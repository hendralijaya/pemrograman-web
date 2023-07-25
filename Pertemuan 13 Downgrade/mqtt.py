import paho.mqtt.client as mqtt
import base64
import subprocess
import re

inc = 0
i = 1
ACCESS_TOKEN='Np3CpPds6E5S8VIpOHEo'                 #Token of your device
broker="thingsboard.cloud"   			    #host name
port=1883

# ---------------------------------- Fuzzy Logic ----------------------------------

def calculateMembership(value, x0, x1, x2):
    membership = 0.0

    if value <= x0 or value >= x2:
        membership = 0.0
    elif value >= x0 and value <= x1:
        membership = (value - x0) / (x1 - x0)
    elif value > x1 and value <= x2:
        membership = (x2 - value) / (x2 - x1)

    return membership

def defuzzify(lowValue, mediumValue, highValue):
    if highValue >= 1.0:
        return 15.0

    return (5.0 * lowValue + 10.0 * mediumValue + 15.0 * highValue) / (lowValue + mediumValue + highValue)

# ---------------------------------- End Fuzzy Logic ----------------------------------

# ---------------------------------- Image Processing ----------------------------------

def save_byte_array_as_image(byte_array, filename):
    img_data = base64.b64decode(byte_array)
    with open(filename, 'wb') as file:
        file.write(img_data)
    print(f"Image saved as {filename}")

# ---------------------------------- End Image Processing ----------------------------------

# ---------------------------------- MQTT ----------------------------------

# definisikan callback function untuk handle pesan yang diterima
def on_message(client, userdata, message):
    global inc
    global i
    print("Pesan diterima: " + message.payload.decode())
    save_byte_array_as_image(message.payload, "image"+str(inc)+".jpg") 
    command = "yolo task=detect mode=predict model=yolov8m_custom.pt show=True conf=0.3 source=C:/IoT/image"+str(inc)+".jpg"
    result = subprocess.run(command, shell=True, capture_output=True, text=True)
    inc += 1 
    print("Result: ")
    print(result.stderr)
    regex = r"\d+ cars"
    match = re.search(regex, result.stderr)
    if match:
        num_cars = int(match.group(0).split()[0])
        print("Number of cars:", num_cars)
        lowMembership = calculateMembership(num_cars, 0, 3, 3)
        mediumMembership = calculateMembership(num_cars, 2, 4, 6)
        highMembership = calculateMembership(num_cars, 4, 100000, 100000)
        greenLightDuration = defuzzify(lowMembership, mediumMembership, highMembership)
        print(f"Green light duration: {greenLightDuration} seconds")
        client.publish("hendra12/feeds/iot.camera.result", greenLightDuration)
        for _ in range(3):
            if i == 1:
                key = 'jumlah_kendaraan_jalan_satu'
            elif i == 2:
                key = 'jumlah_kendaraan_jalan_dua'
            elif i == 3:
                key = 'jumlah_kendaraan_jalan_tiga'
                i = 1  # Reset i to 1
            else:
                continue
            
            topic = f"v1/devices/me/telemetry"
            payload = "{{\"{}\": {}}}".format(key, num_cars)
            mqtt_thingsboard.publish(topic, payload)
        i += 1

    else:
        print("No cars detected")
        client.publish("hendra12/feeds/iot.camera.result", 5)
        
def on_publish(client,userdata,result):             #create function for callback
    print("data published to thingsboard \n")

# inisialisasi client
mqtt_local = mqtt.Client(client_id="6ad088c7-9e1c-43fa-9f0c-a0d3e6bb204e")
mqtt_thingsboard = mqtt.Client(client_id="controller")

# set username dan password
mqtt_local.username_pw_set(username="", password="")

mqtt_thingsboard.username_pw_set(ACCESS_TOKEN)

# set callback function
mqtt_local.on_message = on_message
mqtt_thingsboard.on_publish = on_publish

# koneksi ke broker
broker_address = "192.168.100.19"
mqtt_local.connect(broker_address)
mqtt_thingsboard.connect(broker, port, keepalive=60)

# subscribe ke topik tertentu
topic = "hendra12/feeds/iot.camera"
mqtt_local.subscribe(topic)

# loop untuk menerima pesan
mqtt_local.loop_start()
while True:
    pass

# End MQTT