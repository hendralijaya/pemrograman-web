@extends('patrials.main') @section('container')
<div id="main">
    <div class="page-heading">
        <h3>Penduduk Miskin di Jawa Barat Tahun 2016-2020</h3>
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
                id="viz1650706392693"
                style="position: relative"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Peta Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin&#47;1_rss.png"
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
                        value="PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin&#47;1.png"
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
                var divElement = document.getElementById("viz1650706392693");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12" style="margin-top: 30px ">
            <div class='tableauPlaceholder' id='viz1651655520031' style='position: relative; border-radius: 10px'><noscript><a href='#'><img
                            alt='Visualisasi Garis Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                    <param name='filter' value='publish=yes' /></object></div>
            <script type='text/javascript'>
                var divElement = document.getElementById('viz1651655520031');
                var vizElement = divElement.getElementsByTagName('object')[0];
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <h4>Detail</h4>
            <p style="text-align: justify">
                Berdasarkan data visualisasi di atas, angka kemiskinan penduduk mengalami penurunan dari tahun 2016 sampai 2019 tetapi
                mengalami sedikit lonjakan penaikan pada tahun 2020 dikarenakan pandemi COVID-19 yang melanda seluruh dunia.
                Program pemerintah daerah Jawa Barat sangat efektif dalam menangani kemiskinan yang terjadi di Jawa Barat. Mulai dari
                program yang mengalokasikan anggaran untuk jaminan kesehatan masyarakat kurang mampu melalui BPJS, melakukan perbaikan
                rumah tidak layak huni sampai meningkatkan peran masyarakat dalam pembangunan akses permodalan serta sinkronisasi
                penanggulangan kemiskinan. Selain upaya diatas ada juga program unggulan Pemprov Jabar yaitu Kredit Mesra, One Pesantren
                One Product, One Village One Company, Desa Digital dan program pengembangan kepariwisataan.
            </p>

            <p style="text-align: justify">
                Kota Bogor merupakan kota yang memiliki jumlah angka kemiskinan tertinggi dengan total 465 ribu jiwa pada Tahun 2020 dan Kota
                Banjar memiliki angka kemiskinan terendah dengan total 11 ribu jiwa pada Tahun 2020.
            </p>

            <p style="text-align: justify">
                Untuk mengatasi kemiskinan secara :
                <ol>
                    <li>
                        <i>Long term</i> perspektif, yaitu pendidikan gratis seperti program Gubernur Jawa Barat dan
                        alokasi anggaran untuk jaminan kesehatan masyarakat kurang mampu melalui BPJS.
                    </li>
                    <li>
                        <i>Mid term</i> perspektif, Membentuk balai pelatihan kerja dan pemberdayaan usaha guna meningkatkan pendapatan masyarakat.
                    </li>
                    <li>
                        <i>Short term</i> prespektif, Memberikan Bantuan Sosial terutama untuk warga kurang mampu yang terdiri dari 13 program Pemerintah Daerah Jawa Barat,
                        <ol>
                            (1) PKH Reguler Triwulan 3;<br>
                            (2) BNPT/Program Sembako Reguler;<br>
                            (3) Bantuan Sosial Tunai;<br>
                            (4) Bantuan Beras Cadangan Pemerintah untuk KPM PKH;<br>
                            (5) Bantuan Beras Cadangan Pemerintah untuk BST;<br>
                            (6) Tambahan Bantuan Beras Cadangan Pemerintah untuk Pemkab/Pemkot.<br>
                            (7) Bantuan Beras 5 kilogram x 1 Bulan dari Dana Non-APBN dari Kantor Sekpres.<br>
                            (8) Bansos Pemkab dan Pemkot (Kota Bandung, Kabupaten Ciamis, dan Kabupaten Bogor);<br>
                            (9) BLT Dana Desa;<br>
                            (10) Bantuan Pelaku Usaha Mikro;<br>
                            (11) Bantuan Diskon Listrik;<br>
                            (12) Kartu Prakerja; dan<br>
                            (13) Bantuan Subsidi Kuota Internet.<br>
                        </ol>
                    </li>
                </ol>
            </p>

            <p style="text-align: justify">
                Saran :
                <ol>
                    <li>Tetap melanjutkan program – program tersebut.</li>
                    <li>Melakukan pembinaan terhadap  masyarakat kurang mampu melalui pelatihan kerja yang bekerja sama dengan BUMN atau BUMS</li>
                    <li>Membina masyarakat kurang mampu untuk mengembangkan kekuatan produksi dengan bekerja sama dengan BUMN atau BUMS</li>
                    <li>Melakukan sosialisasi kesadaran masyarakat kurang mampu untuk mengejar kemakmuran</li>
                    <li>
                        Membuat sistem informasi pengetasan kemiskinan untuk melakukan monitoring, menganalisa efektivitas program pemerintah dan melakukan
                        kerja sama dengan BUMN maupun BUMS baik untuk memberikan pelatihan kerja serta untuk mendistribusikan produk dari usaha yang diberdayakan.
                    </li>
                </ol>

                <p><b>Link berita bisa dilihat disini</b></p>
                <ol>
                    <li><a href="https://www.jabarprov.go.id/index.php/news/44094/2021/09/29/Gubernur-Jabar-Paparkan-Tiga-Solusi-Turunkan-Angka-Kemiskinan"><b>Link 1</b></a></li>
                    <li><a href="https://www.republika.co.id/berita/qwdnje459/china-beberkan-strategi-entas-kemiskinan-selama-pandemi-part1"><b>Link 2</b></a></li>
                </ol>
            </p>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Persentase dan Jumlah Penduduk Miskin di Setiap Wilayah Kabupaten atau Kota di Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Persentase dan Jumlah Penduduk Miskin di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Persentase Penduduk Miskin</th>
                                        <th>Jumlah Penduduk Miskin</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ( $data as $d)
                                    <tr>
                                        <td>{{ $d->nama_kabupaten_kota }}</td>
                                        <td>{{ $d->persentase_penduduk_miskin }}</td>
                                        <td>{{ $d->jumlah_penduduk_miskin . " ribu jiwa" }}</td>
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

        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Selisih Jumlah Penduduk Miskin Setiap Tahunnya di Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Jumlah Penduduk Miskin di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Jumlah Penduduk Miskin</th>
                                        <th>Selisih Jumlah Penduduk Miskin</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ( $data2017 as $d17)
                            <tr class="table-light">
                                <td>{{ $d17->nama_kabupaten_kota }}</td>
                                <td>{{ $d17->jumlah_penduduk_miskin }}</td>
                                @forelse ( $data2016 as $d16)
                                    @if ($d17->nama_kabupaten_kota == $d16->nama_kabupaten_kota)
                                    <td>{{ number_format($d17->jumlah_penduduk_miskin - $d16->jumlah_penduduk_miskin, 1) }}</td>
                                <td>{{ $d17->tahun }}</td>
                                <td class="text-center">
                                    @if (number_format($d17->jumlah_penduduk_miskin - $d16->jumlah_penduduk_miskin, 1) > 0)
                                    <span class="badge bg-success">Naik</span>
                                    @elseif (number_format($d17->jumlah_penduduk_miskin - $d16->jumlah_penduduk_miskin, 1) < 0)
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
                            </tr>
                            @forelse ( $data2018 as $d18)
                            <tr class="table-light">
                                <td>{{ $d18->nama_kabupaten_kota }}</td>
                                <td>{{ $d18->jumlah_penduduk_miskin }}</td>
                                @forelse ( $data2017 as $d17)
                                    @if ($d18->nama_kabupaten_kota == $d17->nama_kabupaten_kota)
                                    <td>{{ number_format($d18->jumlah_penduduk_miskin - $d17->jumlah_penduduk_miskin, 1) }}</td>
                                <td>{{ $d18->tahun }}</td>
                                <td class="text-center">
                                    @if (number_format($d18->jumlah_penduduk_miskin - $d17->jumlah_penduduk_miskin, 1) > 0)
                                    <span class="badge bg-success">Naik</span>
                                    @elseif (number_format($d18->jumlah_penduduk_miskin - $d17->jumlah_penduduk_miskin, 1) < 0)
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
                            </tr>
                            @forelse ( $data2019 as $d19)
                            <tr class="table-light">
                                <td>{{ $d19->nama_kabupaten_kota }}</td>
                                <td>{{ $d19->jumlah_penduduk_miskin }}</td>
                                @forelse ( $data2018 as $d18)
                                    @if ($d19->nama_kabupaten_kota == $d18->nama_kabupaten_kota)
                                    <td>{{ number_format($d19->jumlah_penduduk_miskin - $d18->jumlah_penduduk_miskin, 1) }}</td>
                                <td>{{ $d19->tahun }}</td>
                                <td class="text-center">
                                    @if (number_format($d19->jumlah_penduduk_miskin - $d18->jumlah_penduduk_miskin, 1) > 0)
                                    <span class="badge bg-success">Naik</span>
                                    @elseif (number_format($d19->jumlah_penduduk_miskin - $d18->jumlah_penduduk_miskin, 1) < 0)
                                    <span class="badge bg-danger">Turun</span>
                                    @else
                                    <span class="badge bg-warning">Stagnan</span>
                                    @endif
                                    @endif
                                </td>
                                @empty
                                @endforelse
                            @empty
                            <tr>
                                <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                            @endforelse
                            @forelse ( $data2020 as $d20)
                        <tr class="table-light">
                            <td>{{ $d20->nama_kabupaten_kota }}</td>
                            <td>{{ $d20->jumlah_penduduk_miskin }}</td>
                            @forelse ( $data2019 as $d19)
                                @if ($d20->nama_kabupaten_kota == $d19->nama_kabupaten_kota)
                                <td>{{ number_format($d20->jumlah_penduduk_miskin - $d19->jumlah_penduduk_miskin, 1) }}</td>
                            <td>{{ $d20->tahun }}</td>
                            <td class="text-center">
                                @if (number_format($d20->jumlah_penduduk_miskin - $d19->jumlah_penduduk_miskin, 1) > 0)
                                <span class="badge bg-success">Naik</span>
                                @elseif (number_format($d20->jumlah_penduduk_miskin - $d19->jumlah_penduduk_miskin, 1) < 0)
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
            <p style="text-align: justify">Alasan Kota Tasikmalaya memiliki presentase kemiskinan tertinggi:</p>
            <ol style="text-align: justify">
                <li>
                    Dampak pandemi COVID-19. Kegiatan ekonomi berhenti bergerak sehingga terjadi penurunan tingkat produktivitas baik secara individu maupun perusahaan yang mengakibatkan peningkatan jumlah penduduk kurang mampu.
                </li>
                <li>
                    Pemekaran di Kota Tasikmalaya menjadi Kabupaten dan Kota. Lin mengatakan bahwa kenaikan angka kemiskinan di kota Tasikmalaya diakibatkan oleh pembentukan kota yang mencakup lima kecamatan yang statusnya masih pedesaan. Menurutnya Pemerintah Kota Tasikmalaya perlu melakukan akselerasi ekonomi di kecamatan yang masih serupa dengan pedesaan.
                </li>
                <li>
                    Terdapat banyak warga yang bekerja pada sektor informal, seperti pedagang kaki lima.
                </li>
                <li>
                    Upah buruh yang dibawah UMR. <br>
                    Adi Menyimpulkan bahwa rendahnya daya beli, pendapatan dan kurangnya lapangan kerja menjadi alasan utama kota tasikmalaya masuk dalam kategori miskin.
                </li>
            </ol>

            <h6>Link</h6>
            <ol style="text-align: justify">
                <li>
                    https://data.tasikmalayakota.go.id/infografis/tingkat-kemiskinan-di-kota-tasikmalaya-tahun-2021/
                </li>
                <li>
                    https://jabar.tribunnews.com/2019/11/08/tercatat-masih-banyak-warga-miskin-di-kota-tasikmalaya-ini-alasannya-menurut-bps
                </li>
                <li>
                    https://nasional.tempo.co/read/543175/tasikmalaya-termiskin-di-jawa-barat
                </li>
            </ol>
        </div>

        <div class="col-sm-6 col-12">
            <h4>Terendah</h4>
            <p style="text-align: justify">Alasan Kota Depok memiliki presentase kemiskinan terendah:</p>
            <ol style="text-align: justify">
                <li>
                    Kondisi pandemi COVID-19 berdampak pada kegiatan perekonomiannya, tetapi Pemerintah Kota Depok memiliki berbagai program pemulihan ekonomi yaitu:
                    <ul>
                        <li>5.000 wirausaha baru</li>
                        <li>1.000 perempuan pengusaha</li>
                        <li>Kartu Depok Sejahtera</li>
                        <li>Menyelesaikan permasalahan ketidaksesuaian Angkatan kerja dan dunia kerja.</li>
                    </ul>
                </li>
                <li>
                    Index Pembangunan Manusia yang tertinggi ketiga setelah Kota Bandung dan Kota Bekasi, yaitu 81,37.
                </li>
                <li>
                    Mencari modal melalui investasi untuk penyerapan tenaga kerja lokal.
                </li>
            </ol>

            <h6>Link</h6>
            <ol style="text-align: justify">
                <li>
                    https://berita.depok.go.id/pemerintahan/keren-kota-depok-catat-angka-kemiskinan-terendah-ketiga-se-indonesia-10684
                </li>
            </ol>
        </div>

    </div>
</div>
@endsection
