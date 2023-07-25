@extends('patrials.main') @section('container')
<div id="main">
    <div class="page-heading">
        <h3>Pengangguran di Jawa Barat Tahun 2017-2020</h3>
    </div>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="row">
        <div class="col-12">
            <div
                class="tableauPlaceholder"
                id="viz1650705988502"
                style="position: relative; border-radius : 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Peta Jumlah Pengangguran di Jawa Barat (Satuan Jiwa) "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2&#47;1_rss.png"
                            style="border: none" /></a></noscript
                ><object class="tableauViz" style="display: none">
                    <param
                        name="host_url"
                        value="https%3A%2F%2Fpublic.tableau.com%2F"
                    />
                    <param name="embed_code_version" value="3" />
                    <param name="site_root" value="" />
                    <param
                        name="name"
                        value="PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2&#47;1.png"
                    />
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
                var divElement = document.getElementById("viz1650705988502");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12" style="margin-top: 30px">
            <div
                class="tableauPlaceholder"
                id="viz1650037095958"
                style="position: relative; border-radius: 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Visualisasi Jumlah Pengangguran di Jawa Barat "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1_rss.png"
                            style="border: none" /></a></noscript
                ><object class="tableauViz" style="display: none">
                    <param
                        name="host_url"
                        value="https%3A%2F%2Fpublic.tableau.com%2F"
                    />
                    <param name="embed_code_version" value="3" />
                    <param name="site_root" value="" />
                    <param
                        name="name"
                        value="VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1.png"
                    />
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
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <h4>Detail</h4>
            <p style="text-align: justify">
                Berdasarkan hasil pengumpulan data pengangguran provinsi Jawa Barat dari tahun 2017 sampai tahun 2019, angka
                pengangguran masih tergolong stabil. Meskipun sedikit meningkat, tetapi pada tahun 2020 pertumbuhan pengangguran
                meningkat sangat pesat. Hal ini disebabkan oleh pandemi COVID-19 yang melanda sehingga banyak perusahaan yang tutup
                (gulung tikar), melakukan PHK besar besaran dan banyak usaha yang tidak boleh dibuka seperti hotel, pelabuhan, restoran
                dan masih banyak lainnya.
            </p>

            <p style="text-align: justify">
                Kabupaten Bogor merupakan daerah Jawa Barat yang jumlah penganggurannya meningkat paling drastis akibat pandemi ini.
                Mulai dari 543 ribu orang pada tahun 2019 meningkat menjadi 870 ribu orang. Walaupun pandemi ini menyebabkan angka
                pengangguran meningkat sangat tinggi, tingkat pengangguran di Kota Banjar tergolong stabil walaupun angka
                penganggurannya meningkat tetapi tidak terlalu drastis. Berdasarkan data yang ada, kota tersebut hanya mengalami sedikit
                peningkatan mulai dari 11 ribu pada tahun 2019 menjadi 12 ribu pada tahun 2020.
            </p>

            <p style="text-align: justify">
                Namun, berdasarkan data visualisasi diatas, Saran atau solusi dari kami untuk pemerintah adalah sebagai berikut:
                <ol>
                    <li>Membuka lahan pekerjaan baru di tempat yang memiliki lahan pekerjaan yang sedikit</li>
                    <li>Membuka sekolah gratis ke tempat yang perekonomiannya lebih rendah</li>
                    <li>Mendirikan pusat-pusat latihan kerja ke tempat yang tingkat pendidikannya rendah</li>
                    <li>Meningkatkan transmigrasi ke tempat yang lebih sepi tetapi lapangan pekerjaannya banyak</li>
                </ol>
            </p>

        </div>
        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Perbandingan Angka Pengangguran di Setiap Wilayah Kabupaten atau Kota di Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Angka Pengangguran di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Persentase Pengangguran</th>
                                        <th>Jumlah Penduduk Pengangguran</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ( $data as $d)
                                    <tr>
                                        <td>{{ $d->nama_kabupaten_kota }}</td>
                                        <td>{{ $d->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d->jumlah_pengangguran_angka . " jiwa" }}</td>
                                        <td>{{ $d->tahun }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        {{-- COBA --}}
        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Selisih Jumlah Pengangguran Setiap Tahunnya di Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Angka Pengangguran di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Persentase Pengangguran</th>
                                        <th>Jumlah Pengangguran</th>
                                        <th>Selisih Pengangguran</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $data2018 as $d18)
                                    <tr class="table-light">
                                        <td>{{ $d18->nama_kabupaten_kota }}</td>
                                        <td>{{ $d18->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d18->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2017 as $d17)
                                            @if ($d18->nama_kabupaten_kota == $d17->nama_kabupaten_kota)
                                            <td>{{ $d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d18->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                    @forelse ( $data2019 as $d19)
                                    <tr class="table-light">
                                        <td>{{ $d19->nama_kabupaten_kota }}</td>
                                        <td>{{ $d19->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d19->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2018 as $d18)
                                            @if ($d19->nama_kabupaten_kota == $d18->nama_kabupaten_kota)
                                            <td>{{ $d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d19->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                    @forelse ( $data2020 as $d20)
                                    <tr class="table-light">
                                        <td>{{ $d20->nama_kabupaten_kota }}</td>
                                        <td>{{ $d20->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d20->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2019 as $d19)
                                            @if ($d20->nama_kabupaten_kota == $d19->nama_kabupaten_kota)
                                            <td>{{ $d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d20->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <hr>
        <br>

        <div class="col-sm-6 col-12">
            <h4>Tertinggi</h4>
            <p style="text-align: justify">Alasan Bogor memiliki tingkat pengangguran tertinggi:</p>
            <ol style="text-align: justify">
                <li>
                    Penurunan drastis angka penjualan UMKM.<br>
                    Seperti, penurunan penjualan, permodalan, distribusi terhambat, kesulitan bahan baku, produksi menurun dan PHK buruh akibat dari pandemic COVID-19.
                </li>
                <li>
                    Karena banyak pengangguran lulusan SMK yang menumpuk. Dulunya pemerintah membuat program sekolah-sekolah SMK yang  bertujuan untuk langsung kerja. Tetapi lulusannya lah yang sekarang menumpuk.
                </li>
            </ol>

            <h6>Link</h6>
            <ol style="text-align: justify">
                <li>
                    https://diskopukm.bogorkab.go.id/tantangan-dan-usaha-pemulihan-ekonomi-daerah-bagi-koperasi-usaha-mikro-kecil-dan-menengah-umkm-kabupaten-bogor-di-masa-pandemi-covid-19/
                </li>
                <li>
                    https://bogor.ayoindonesia.com/berita-bogor/pr-31868381/Angka-Pengangguran-di-Kota-Bogor-Masih-Tinggi
                </li>
            </ol>
        </div>

        <div class="col-sm-6 col-12">
            <h4>Terendah</h4>
            <p style="text-align: justify">Alasan Pangandaran memliki tingkat pengangguran terendah di Jawa Barat</p>
            <ol style="text-align: justify">
                <li>
                    Banyak wirausahawan pendatang di Pangandaran.
                    Sebagai kota baru, banyak peluang usaha yang dapat buka di daerah baru ini.
                </li>
                <li>
                    Adanya rencana KEK yang akan menimbulkan banyaknya hotel – hotel tradisional dan modern sehingga hal tersebut tidak menjadi sebuah ancaman bagi para pemilik wisma dan pondok yang berada di sekitar KEK.
                </li>
            </ol>

            <h6>Link</h6>
            <ol style="text-align: justify">
                <li>
                    https://news.detik.com/berita-jawa-barat/d-5893847/tingkat-pengangguran-di-pangandaran-terendah-di-jawa-barat
                </li>
                <li>
                    https://elibrary.unikom.ac.id/id/eprint/1956/10/UNIKOM_SINDY%20SINTIA.
                    N_BAB%20IV.pdf
                </li>
            </ol>
        </div>

    </div>
</div>

@endsection
