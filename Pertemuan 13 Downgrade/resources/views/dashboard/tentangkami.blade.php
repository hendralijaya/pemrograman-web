@extends('patrials.main')
@section('container')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <!-- Tentang kami dimulai disini -->
    <div class="page-heading">
        <h3>Tentang Kami</h3>
    </div>

    <!-- Tentang Jawa Barat Dimulai Disini -->
    <div class="row match-height">
        <div class="col-12 mt-3 mb-1">
            <h4 class="section-title">Tentang Jawa Barat</h4>
        </div>
        <div class="col-12" style="margin-bottom:30px">
            <h6>Profil Provinsi Jawa Barat</h6>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12" >
                    <div class="photo-map" style="display: flex; justify-content: center; align-items: center">
                        <img src="./assets/images/peta-jabar.png" style="width: 75%; min-width: none; margin-top: 25px; margin-bottom: 10px;">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <p class="text-justify" style="text-align:justify ">
                        <ul style="list-style: none; line-height: 2.1">
                            <li><b>Nama resmi:</b> Provinsi Jawa Barat</li>
                            <li><b>Ibu kota:</b> Kota Bandung </li>
                            <li><b>Dasar pembentukan:</b> Undang-Undang Nomor 11 Tahun 1950 </li>
                            <li><b>Hari jadi:</b> 19 Agustus 1945 </li>
                            <li><b>Gubernur pertama:</b> Sutardjo Kertohadikusumo </li>
                            <li><b>Gubernur saat ini:</b> Ridwan Kamil </li>
                            <li><b>Semboyan:</b> "Gemah Ripah Repeh Rapih” </li>
                            <li><b>Plat nomor:</b> D, E, F, T, Z </li>
                            <li><b>Landmark:</b> Gedung Sate</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12" style="margin-bottom:30px">
            <h6>Aspek Demografi Provinsi Jawa Barat</h6>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="photo-map" style="display: flex; justify-content: center; align-items: center">
                        <img src="./assets/images/gedung-sate.jpeg" style="width: 100%; min-width: none; margin-top: 25px; margin-bottom: 10px; border-radius: 10px">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <p class="text-justify" style="text-align:justify ">
                        <ul style="list-style: none; line-height: 2.1">
                            <li><b>Luas wilayah:</b> 35.377,76 kilometer persegi</li>
                            <li><b>Letak geografis:</b> 5º50’ - 7º50’ Lintang Selatan dan 104º 48’ - 108º 48’ Bujur Timur </li>
                            <li><b>Batas wilayah Utara:</b> Laut Jawa dan Provinsi DKI Jakarta </li>
                            <li><b>Batas wilayah Timur:</b> 19 Agustus 1945 </li>
                            <li><b>Batas wilayah Selatan:</b> Samudera Indonesia </li>
                            <li><b>Batas wilayah Barat:</b> Provinsi Banten </li>
                            <li><b>Kota terbesar: </b> Bekasi </li>
                            <li><b>Kota industri: </b> Karawang </li>
                            <li><b>Infrastruktur penting:</b> Bandara Husein Sastranegara, Pelabuhan Cirebon</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Jawa Barat Berakhir Disini -->

    <!-- Tentang Proyek Start -->
    <div class="row match-height">
        <div class="col-12 mt-3 mb-1">
            <h4 class="section-title">Tentang Proyek</h4>
        </div>
        <div class="col-12" style="margin-bottom:30px;">
            <h6>Tujuan Proyek</h6>
            <p class="text-justify" style="text-align:justify">
                Projek ini bertujuan untuk melakukan pemantauan di provinsi Jawa Barat pada domain Society
                dengan 4 aspek berupa aspek kemiskinan, angka harapan hidup, angka pengangguran, dan
                kepadatan penduduk.
                <br><br>
                Tujuan dari pemantauan ini:
                <ol>
                    <li>Mengetahui dan memberikan solusi terhadap masalah kemiskinan.</li>
                    <li>Mengetahui perbandingan antara angka kemiskinan dan angka harapan hidup.</li>
                    <li>Mengetahui pengaruh jumlah pengangguran terhadap angka kemiskinan.</li>
                    <li>Mengetahui dan memberikan solusi untuk menanggulangi masalah kepadatan penduduk di Jawa Barat.</li>
                </ol>
            </p>
        </div>
    </div>
    <!-- Tentang Proyek End -->

    <!-- Groups section start -->
    <section id="groups">
        <div class="row match-height">
            <div class="col-12 mt-3 mb-1">
                <h4 class="section-title">Anggota Kelompok</h4>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-12">
                <div class="card-group">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/1.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Delvin</h4>
                                <p class="card-text">
                                    Jurusan : Teknik Informatika
                                </p>
                                <small class="text-muted">NIM : 2110101012</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/2.png"
                                alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Patricia Ho</h4>
                                <p class="card-text">
                                    Jurusan : Teknik Informatika
                                </p>
                                <small class="text-muted">NIM : 2110101015</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/3.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Hendra Lijaya</h4>
                                <p class="card-text">
                                    Jurusan : Teknik Informatika
                                </p>
                                <small class="text-muted">NIM : 2110101023</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/4.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Yogi Valentino Nadeak</h4>
                                <p class="card-text">
                                    Jurusan : Teknik Informatika
                                </p>
                                <small class="text-muted">NIM : 2110101033</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Groups section ends here -->
    <!-- Tentang kami berakhir disini -->
</div>


@endsection
