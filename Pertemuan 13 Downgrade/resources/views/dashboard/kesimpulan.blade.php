@extends('patrials.main')
@section('container')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <!-- Kesimpulan dimulai disini -->
        <div class="page-heading">
            <h3>Kesimpulan</h3>
        </div>


        <div class="row">
            {{-- Analisis Penduduk Miskin dan Angka Harapan Hidup Starts --}}
            <div class="col-12 mt-3 mb-1">
                <h4 class="section-title">Penduduk Miskin dan Angka Harapan Hidup di Jawa Barat</h4>
            </div>
            <div class="col-6">
                <div class='tableauPlaceholder' id='viz1651204402505' style='position: relative; border-radius: 10px;'>
                    <noscript><a href='#'><img alt='Visualisasi Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                    </object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1651204402505');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <div class="col-6">
                <div class="tableauPlaceholder" id="viz1650037351329" style="position: relative; border-radius: 10px">
                    <noscript><a href="#"><img alt="Visualisasi Angka Harapan Hidup di Jawa Barat "
                                src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup&#47;1_rss.png"
                                style="border: none" /></a></noscript><object class="tableauViz" style="display: none">
                        <param name="host_url" value="https%3A%2F%2Fpublic.tableau.com%2F" />
                        <param name="embed_code_version" value="3" />
                        <param name="site_root" value="" />
                        <param name="name" value="VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup" />
                        <param name="tabs" value="no" />
                        <param name="toolbar" value="yes" />
                        <param name="static_image"
                            value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup&#47;1.png" />
                        <param name="animate_transition" value="yes" />
                        <param name="display_static_image" value="yes" />
                        <param name="display_spinner" value="yes" />
                        <param name="display_overlay" value="yes" />
                        <param name="display_count" value="yes" />
                        <param name="language" value="en-US" />
                        <param name="filter" value="publish=yes" />
                    </object>
                </div>
                <script type="text/javascript">
                    var divElement = document.getElementById("viz1650037351329");
                    var vizElement = divElement.getElementsByTagName("object")[0];
                    vizElement.style.width = "100%";
                    vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                    var scriptElement = document.createElement("script");
                    scriptElement.src =
                        "https://public.tableau.com/javascripts/api/viz_v1.js";
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <div class="col-12 mt-3 mb-1">
                <br>
                <h6>Q : Apa hubungan antara angka persentase penduduk miskin dengan angka harapan hidup di Jawa Barat?</h6>
                <p style="text-align: justify">
                    <b>A :</b> Dari visualisasi data, hubungan tingkat kemiskinan penduduk dengan tingkat harapan hidup cukup berpengaruh. Hal ini
                    dapat terjadi karena penduduk yang miskin cenderung lebih sulit mendapatkan pelayanan kesehatan karena faktor biaya dan
                    jarak dari tempat tinggal ke rumah sakit cukup jauh. Tetapi jika dilihat dari grafik jumlah penduduk miskin dari tahun
                    2016 sampai tahun 2019, terlihat bahwa grafiknya menurun. Hal ini menunjukkan bahwa program pemerintah provinsi Jawa
                    Barat dalam menurunkan angka kemiskinan cukup sukses. Beriringan juga dengan tingkat harapan hidup yang semakin lama
                    semakin naik yang menandakan semakin banyak warga yang cukup makmur hidupnya. Tetapi pada tahun 2020, ketika pandemi
                    covid-19 menyerang Indonesia, angka kemiskinan pada tahun tersebut langsung meroket dikarenakan banyak pekerja yang di
                    PHK dan banyak usaha-usaha yang bangkrut karena tidak bisa menjalankan kegiatan ekonominya.
                </p>


                <br>
            </div>
            {{-- Analisis Penduduk Miskin dan Angka Harapan Hidup Ends --}}

            {{-- Analisis Penduduk Miskin dan Jumlah Pengangguran Starts --}}
            <div class="col-12 mt-3 mb-1">
                <hr>
                <h4 class="section-title">Penduduk Miskin dan Jumlah Pengangguran di Jawa Barat</h4>
            </div>

            <div class="col-6">
                <div class="tableauPlaceholder" id="viz1650036456351" style="position: relative; border-radius: 10px">
                    <noscript><a href="#"><img alt="Visualisasi Jumlah Penduduk Miskin di Jawa Barat "
                                src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1_rss.png"
                                style="border: none" /></a></noscript><object class="tableauViz" style="display: none">
                        <param name="host_url" value="https%3A%2F%2Fpublic.tableau.com%2F" />
                        <param name="embed_code_version" value="3" />
                        <param name="site_root" value="" />
                        <param name="name" value="VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin" />
                        <param name="tabs" value="no" />
                        <param name="toolbar" value="yes" />
                        <param name="static_image"
                            value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1.png" />
                        <param name="animate_transition" value="yes" />
                        <param name="display_static_image" value="yes" />
                        <param name="display_spinner" value="yes" />
                        <param name="display_overlay" value="yes" />
                        <param name="display_count" value="yes" />
                        <param name="language" value="en-US" />
                        <param name="filter" value="publish=yes" />
                    </object>
                </div>
                <script type="text/javascript">
                    var divElement = document.getElementById("viz1650036456351");
                    var vizElement = divElement.getElementsByTagName("object")[0];
                    vizElement.style.width = "100%";
                    vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                    var scriptElement = document.createElement("script");
                    scriptElement.src =
                        "https://public.tableau.com/javascripts/api/viz_v1.js";
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>

            <div class="col-6">
                <div class="tableauPlaceholder" id="viz1650037095958" style="position: relative; border-radius: 10px">
                    <noscript><a href="#"><img alt="Visualisasi Jumlah Pengangguran di Jawa Barat "
                                src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1_rss.png"
                                style="border: none" /></a></noscript><object class="tableauViz" style="display: none">
                        <param name="host_url" value="https%3A%2F%2Fpublic.tableau.com%2F" />
                        <param name="embed_code_version" value="3" />
                        <param name="site_root" value="" />
                        <param name="name" value="VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur" />
                        <param name="tabs" value="no" />
                        <param name="toolbar" value="yes" />
                        <param name="static_image"
                            value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1.png" />
                        <param name="animate_transition" value="yes" />
                        <param name="display_static_image" value="yes" />
                        <param name="display_spinner" value="yes" />
                        <param name="display_overlay" value="yes" />
                        <param name="display_count" value="yes" />
                        <param name="language" value="en-US" />
                        <param name="filter" value="publish=yes" />
                    </object>
                </div>
                <script type="text/javascript">
                    var divElement = document.getElementById("viz1650037095958");
                    var vizElement = divElement.getElementsByTagName("object")[0];
                    vizElement.style.width = "100%";
                    vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                    var scriptElement = document.createElement("script");
                    scriptElement.src =
                        "https://public.tableau.com/javascripts/api/viz_v1.js";
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <div class="col-12 mt-3 mb-1">
                <br>
                <h6>Q : Apa hubungan antara angka persentase penduduk miskin dengan jumlah pengangguran di Jawa Barat?</h6>
                <p style="text-align: justify"><b>A :</b>
                    Dalam visualisasi data yang kami pantau, hubungan tingkat kemiskinan dengan tingkat pengangguran di Jawa Barat sangatlah
                    saling mempengaruhi satu sama lain karena ketika tingkat pengangguran naik, maka tingkat kemiskinan juga naik dan ketika
                    tingkat pengangguran menurun maka tingkat kemiskinan akan menurun juga sebab masyarakat yang menganggur tidak mempunyai
                    penghasilan dan pastinya akan berpengaruh ke tingkat kemiskinan

                    Teori tersebut dapat dilihat dari chart diagram batang, yang mana jumlah penduduk miskin dan pengangguran mulai
                    mengalami penurunan di tahun 2017 hingga 2019. Namun saat pandemi covid terjadi di tahun 2020 mengakibatkan banyak
                    masyarakat atau pemuda yang mengurung diri di rumah atau menganggur sehingga tingkat kemiskinan dan pengangguran pun
                    mengalami kenaikan kembali, banyaknya karyawan yang mengalami PHK dan tenaga kesehatan yang kurang memadai mengakibatkan
                    pemuda was-was untuk keluar dari rumah merupakan faktor dari meningkatnya kembali tingkat kemiskinan dan pengangguran di
                    Jawa Barat.
                </p>
                <br>
            </div>
            {{-- Analisis Penduduk Miskin dan Jumlah Pengangguran Ends --}}

            {{-- Analisis Kepadatan Penduduk Starts --}}
            <div class="col-12 mt-3 mb-1">
                <hr>
                <h4 class="section-title">Kepadatan Penduduk di Jawa Barat</h4>
            </div>

            <div class="col-12" style="margin-bottom:20px;">
                <div class='tableauPlaceholder' id='viz1651638871792' style='position: relative; border-radius: 10px;'><noscript><a href='#'><img
                    alt='Tingkat Kepadatan Penduduk di Jawa Barat '
                    src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;te&#47;testone_16516386300470&#47;Sheet1&#47;1_rss.png'
                    style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='testone_16516386300470&#47;Sheet1' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='static_image'
                    value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;te&#47;testone_16516386300470&#47;Sheet1&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
                <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1651638871792');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.625) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>

            <div class="col-6" style="margin-top: 20px; margin-bottom:20px;">
                <div class='tableauPlaceholder' id='viz1651205732469' style='position: relative; border-radius: 10px;'>
                    <noscript><a href='#'><img alt='kepadatan penduduk '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ke&#47;kepadatanpenduduk_16505328031940&#47;Sheet1&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='kepadatanpenduduk_16505328031940&#47;Sheet1' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ke&#47;kepadatanpenduduk_16505328031940&#47;Sheet1&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' />
                    </object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1651205732469');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>

            <div class="col-6" style="margin-top: 20px; margin-bottom:20px;">
                <h6>Q : Bagaimana kepadatan penduduk kabupaten - kabupaten yang ada di Jawa Barat dari tahun 2011-2020?</h6>
                <p style="text-align:justify"><b>A :</b> Dari data kepadatan penduduk kabupaten/kota di Jawa Barat, selama 10 tahun terakhir terdapat 5 kota/kabupaten
                    yang secara konsisten memiliki kepadatan penduduk yang paling tinggi yaitu, Kota Bogor, Kota Depok, Kota Bekasi,
                    Kota Bandung dan Kota Cimahi dan 5 kota/kabupaten yang memiliki kepadatan penduduk yang paling rendah yaitu,
                    Kabupaten Pengandaran, Kabupaten Cianjur, Kabupaten Sukabumi, Kabupaten Tasikmalaya, dan Kabupaten Sumedang.
                </p>
            </div>

            <div class="col-6" style="margin-top: 20px; margin-bottom:20px;">
                <h6>Q : Bagaimana estimasi kepadatan penduduk yang ada di Jawa Barat dari kini hingga tahun 2045? </h6>
                <p style="text-align:justify"><b>A :</b> Berdasarkan data kepadatan penduduk yang didapatkan mulai dari tahun 2010-2020,
                    hasil menunjukkan bahwa selalu ada peningkatan kepadatan penduduk secara konstan. Dari data tersebut, diperkirakan
                    hingga tahun 2045 kepadatan penduduk akan meningkat sekitar 1.133.267 penduduk setiap tahun. Berdasarkan hasil
                    estimasi prediksi sekitar 25 tahun dimulai dari tahun 2021 hingga 2045, total kenaikkan penduduk mencapai
                    19.610.567.</p>
                <p style="text-align:justify"><b>Note :</b> Kami memilih untuk melakukan prediksi hingga tahun 2045 karena kami mendapati bahwa tahun 2045 akan menjadi momentum bersejarah bagi Indonesia. Tingkat
                    kelahiran yang meningkat pesat pada tahun 2020 dan 2021 karena situasi pandemi ini menjadi hal yang perlu diberikan
                    perhatian khusus. Bayi lahir pada tahun tersebut akan menjadi penduduk berusia produktif pada 2045 mendatang.
                    Berdasarkan berita yang kami peroleh di indonesiabaik.id, Indonesia akan mendapatkan bonus demografi yaitu 70% dari
                    jumlah penduduk Indonesia dalam usia produktif (15-64 tahun), sedangkan sisanya 30% merupakan penduduk yang tidak
                    produktif (usia dibawah 14 tahun dan diatas 65 tahun) pada periode tahun 2020-2045.</p>
                <p><a href="https://indonesiabaik.id/infografis/siapkah-kamu-jadi-generasi-emas-2045"><b>Link berita bisa dilihat disini</b></a></p>
                <br>
            </div>

            <div class="col-6" style="margin-top: 20px; margin-bottom:20px;">
                <div class='tableauPlaceholder' id='viz1651211011388' style='position: relative; border-radius:10px'><noscript><a href='#'><img
                                alt='Kepadatan Penduduk di Jawa Barat  '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ke&#47;KepadatanPendudukdiJawaBarat&#47;KepadatanPendudukdiJawaBarat&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='KepadatanPendudukdiJawaBarat&#47;KepadatanPendudukdiJawaBarat' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ke&#47;KepadatanPendudukdiJawaBarat&#47;KepadatanPendudukdiJawaBarat&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' />
                    </object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1651211011388');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.875) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            {{-- Analisis kepadatan Penduduk Ends --}}

            {{-- Solusi Starts --}}
            <div class="col-12 mt-3 mb-1">
                <hr>
                <h4 class="section-title">Saran dan Solusi</h4>
            </div>

            <div class="col-12">
                <p>Dari data pemantuan provinsi Jawa Barat yang kita miliki tentang permasalahan kemiskinan , pengangguran
                    dan angka harapan hidup. Kami sebagai peneliti memiiki beberapa solusi dalam persoalan tersebut sebagai
                    berikut:</p>
                <ol>
                    <li>Membuat serta meningkatkan sarana dan prasarana bagian kesehatan pada wilayah yang belum terjangkau.</li>
                    <li>Pemerintah menyalurkan anggaran yang lebih besar untuk meningkatkan kesehatan, kesejahteraan, dan pendidikan penduduk sehingga SDM dapat meningkat </li>


                    <li>Melakukan sosialisasi kesadaran masyarakat kurang mampu untuk mengejar kemakmuran</li>
                    <li>
                        Membuat sistem informasi pengetasan kemiskinan untuk melakukan monitoring, menganalisa efektivitas program pemerintah dan melakukan
                        kerja sama dengan BUMN maupun BUMS baik untuk memberikan pelatihan kerja serta untuk mendistribusikan produk dari usaha yang diberdayakan.
                    </li>

                    <li>Membuka sekolah gratis ke tempat yang perekonomiannya lebih rendah</li>

                    <li>Menciptakan lapangan kerja yang luas untuk warga</li>
                    <li>Pembatasan pajak dan retribusi daerah yg dapat merugikan usaha lokal dan warga daerah</li>

                    <li>Mengatur keseimbangan kepadatan penduduk dengan cara pemberlakuan program Keluarga Berencana(KB) demi menghindari lonjakan jumlah penduduk</li>
                    <li>Menyediakan pelatihan dan meningkatkan sarana dan prasarana pendidikan sebagai media belajar bagi generasi yang akan datang</li>
                    <li>Pemerataan pembangunan infrastuktur di seluruh daerah Jawa Barat untuk memperlancar transmigrasi penduduk</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
