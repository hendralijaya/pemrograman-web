@extends('patrials.main') @section('container')
<div id="main">
    <div class="page-heading">
        <h3>Penduduk di Jawa Barat Tahun 2016-2020</h3>
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
                id="viz1650705720367"
                style="position: relative; border-radius: 10px;"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Peta Jumlah Penduduk di  Jawa Barat (Satuan Jiwa) "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukdiJawaBaratSatuanJiwa_16507052173980&#47;Sheet1&#47;1_rss.png"
                            style="border: none" /></a></noscript
                ><object class="tableauViz" style="display: none">
                    <param
                        name="host_url"
                        value="https%3A%2F%2Fpublic.tableau.com%2F"
                    />
                    <param name="embed_code_version" value="3" />
                    <param
                        name="path"
                        value="views&#47;PetaJumlahPendudukdiJawaBaratSatuanJiwa_16507052173980&#47;Sheet1?:language=en-US&amp;:embed=true&amp;publish=yes"
                    />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukdiJawaBaratSatuanJiwa_16507052173980&#47;Sheet1&#47;1.png"
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
                var divElement = document.getElementById("viz1650705720367");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-6" style="margin-top: 30px;">
            <div class='tableauPlaceholder' id='viz1651655278478' style='position: relative; border-radius: 10px'><noscript><a href='#'><img
                            alt='Visualisasi Garis Jumlah Penduduk di Jawa Barat (Satuan Jiwa) '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BP&#47;BPN37CR3Z&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='path' value='shared&#47;BPN37CR3Z' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BP&#47;BPN37CR3Z&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                    <param name='filter' value='publish=yes' /></object></div>
            <script type='text/javascript'>
                var divElement = document.getElementById('viz1651655278478');
                var vizElement = divElement.getElementsByTagName('object')[0];
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-6" style="margin-top:30px;">
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
                vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <h4>Detail</h4>
            <p style="text-align: justify">
                Berdasarkan data visualisasi diatas, kepadatan penduduk di tiap wilayah di Jawa Barat mengalami peningkatan yang cukup
                signifikan, dimulai dari tahun 2016 hingga 2020. Peningkatan kepadatan penduduk ini dipengaruhi oleh beberapa faktor
                seperti naiknya angka kelahiran dan migrasi masuk di Jawa Barat serta menurunnya angka kematian.
            </p>

            <p style="text-align: justify">
                Dalam kurun waktu tersebut, kota Cimahi merupakan kota yang mengalami kepadatan penduduk tertinggi diantara kota atau
                kabupaten di Jawa Barat lainnya sedangkan kabupaten pangandaran merupakan kabupaten/kota dengan kepadatan penduduk terendah.
            </p>

            <p style="text-align: justify">
                Dari visualisasi garis diatas, dapat dilihat bahwa kepadatan penduduk di Jawa Barat sangatlah kurang merata. Contohnya adalah Kota
                Cimahi dan Kabupaten Pangandaran dapat terlihat jelas perbedaan kepadatan penduduknya, maka dari itu berikut saran / solusi dari
                kami untuk pemerintah dalam menangani jumlah penduduk yang tidak merata adalah sebagai berikut:
                <ol>
                    <li> Mengatur keseimbangan kepadatan penduduk dengan cara pemberlakuan program Keluarga Berencana(KB) demi menghindari lonjakan jumlah penduduk </li>
                    <li> Meningkatkan kualitas pendidikan khususnya tentang kependudukan </li>
                    <li> Menyediakan pelatihan dan meningkatkan sarana dan prasarana pendidikan sebagai media belajar bagi generasi yang akan datang </li>
                    <li> Pemerintah menyalurkan anggaran yang lebih besar untuk meningkatkan kesehatan, kesejahteraan, dan pendidikan penduduk sehingga SDM dapat meningkat </li>
                    <li> Pemerataan pembangunan infrastuktur di seluruh daerah Jawa Barat untuk memperlancar transmigrasi penduduk </li>
                </ol>
            </p>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h3>Tabel</h3>
                            <p class="text-subtitle text-muted">Perbandingan Jumlah Penduduk di Setiap Wilayah Kabupaten atau Kota di Jawa Barat dengan Rata - Rata Jumlah Penduduk Provinsi Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Jumlah Penduduk di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Jumlah Penduduk</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data2016 as $d16)
                                    <tr>
                                        <td>{{ $d16->nama_kabupaten_kota }}</td>
                                        <td>{{ $d16->jumlah_penduduk }}</td>
                                        <td>{{ $d16->tahun }}</td>
                                        <td>
                                            @if ($d16->status == "Diatas rata-rata")
                                            <span class="badge bg-success">Di atas rata - rata</span>
                                            @elseif ($d16->status == "rata-rata")
                                            <span class="badge bg-warning">Rata - rata</span>
                                            @else
                                            <span class="badge bg-danger">Di bawah rata - rata</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse

                                    @forelse ($data2017 as $d17)
                                    <tr>
                                        <td>{{ $d17->nama_kabupaten_kota }}</td>
                                        <td>{{ $d17->jumlah_penduduk }}</td>
                                        <td>{{ $d17->tahun }}</td>
                                        <td>
                                            @if ($d17->status == "Diatas rata-rata")
                                            <span class="badge bg-success">Di atas rata - rata</span>
                                            @elseif ($d17->status == "rata-rata")
                                            <span class="badge bg-warning">Rata - rata</span>
                                            @else
                                            <span class="badge bg-danger">Di bawah rata - rata</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse

                                    @forelse ($data2018 as $d18)
                                        <td>{{ $d18->nama_kabupaten_kota }}</td>
                                        <td>{{ $d18->jumlah_penduduk }}</td>
                                        <td>{{ $d18->tahun }}</td>
                                        <td>
                                            @if ($d18->status == "Diatas rata-rata")
                                            <span class="badge bg-success">Di atas rata - rata</span>
                                            @elseif ($d18->status == "rata-rata")
                                            <span class="badge bg-warning">Rata - rata</span>
                                            @else
                                            <span class="badge bg-danger">Di bawah rata - rata</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse

                                    @forelse ($data2019 as $d19)
                                        <td>{{ $d19->nama_kabupaten_kota }}</td>
                                        <td>{{ $d19->jumlah_penduduk }}</td>
                                        <td>{{ $d19->tahun }}</td>
                                        <td>
                                            @if ($d19->status == "Diatas rata-rata")
                                            <span class="badge bg-success">Di atas rata - rata</span>
                                            @elseif ($d19->status == "rata-rata")
                                            <span class="badge bg-warning">Rata - rata</span>
                                            @else
                                            <span class="badge bg-danger">Di bawah rata - rata</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse

                                    @forelse ($data2020 as $d20)
                                        <td>{{ $d20->nama_kabupaten_kota }}</td>
                                        <td>{{ $d20->jumlah_penduduk }}</td>
                                        <td>{{ $d20->tahun }}</td>
                                        <td>
                                            @if ($d20->status == "Diatas rata-rata")
                                            <span class="badge bg-success">Di atas rata - rata</span>
                                            @elseif ($d20->status == "rata-rata")
                                            <span class="badge bg-warning">Rata - rata</span>
                                            @else
                                            <span class="badge bg-danger">Di bawah rata - rata</span>
                                            @endif
                                        </td>
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

        <div class="row">
            <div class="col-sm-6 col-12">
                <h4>Tertinggi</h4>
                <p style="text-align: justify">Alasan Cimahi menjadi Kota dengan kepadatan penduduk</p>
                <ol style="text-align: justify">
                    <li>
                        Letak Geografis<br>
                        Dilihat dari fungsi kota dan letak geografis yang berbatasan langsung dengan Kota dan Kab. Bandung,
                        Kota Cimahi memiliki peran dan posisi yang cukup strategis. Kondisi tersebut juga mendorong
                        lajunya tingkat pertumbuhan kota yang menimbulkan berbagai permasalahan klasik,
                        sebagaimana dialami oleh kota-kota yang tengah berkembang.
                    </li>
                    <li>
                        Migrasi/Perpindahan penduduk<br>
                        Di Kota Cimahi selalu terjadi migrasi/perpindahan penduduk setiap tahunnya walau agak melamban dikarenakan dampak Pandemi Covid-19.
                        Menurut Ajay sebagai walikota Cimahi mengatakan bahwa kepadatan penduduk di kota Cimahi terjadi karena Wilayahnya yang terbatas,
                        namun, daya tarik untuk ditinggali tinggi terlebih lagi banyak masyarakat yang kerja di Bandung tinggal di Cimahi
                    </li>
                </ol>

                <h6>Link</h6>
                <ol style="text-align: justify">
                    <li>
                        https://jabarekspres.com/berita/2021/09/06/penduduk-kota-cimahi-kian-padat-ini-sebabnya/
                    </li>
                    <li>
                        https://jabarprov.go.id/index.php/pages/id/1064#:~:text=Tingkat%20per
                        tumbuhan%20penduduk%20mencaapai%202,-rata%201.331%20jiwa%2Fkm
                    </li>
                    <li>
                        https://cimahikota.go.id/index.php/berita/detail/81168-cimahi-jadi-magnet-migrasi-yang-berimbas-terhadap-padatnya-penduduk
                    </li>
                </ol>
            </div>

            <div class="col-sm-6 col-12">
                <h4>Terendah</h4>
                <p style="text-align: justify">Alasan Kabupaten Pangandaran menjadi kota dengan kepadatan penduduk terendah</p>
                <ol style="text-align: justify">
                    <li>
                        Lapangan Pekerjaan/Mata Pencaharian<br>
                        Penduduk di Kawasan Pusat Pertumbuhan Pangandaran dominan bermata pencaharian sebagai petani, pedagang, dan peternak .
                        Mata Pencaharian jenis ini melibatkan hal individu sehingga tak banyak lapangan pekerjaan di Kabupaten Pangandaran
                        sehingga banyak penduduk dari kabupaten Pangandaran lebih memilih untuk migrasi dan juga sedikitnya migrasi yang terjadi di Kabupaten Pangandaran ini
                    </li>
                    <li>
                        Letak Geografis dan Ketenagakerjaan<br>
                        Dilihat dari fungsi kota dan letak geografis kabupaten pangandaran ini terletak dekat perbatasan pesisir pantai/samudra Hindia,
                        tempat ini banyak dijadikan sebagai tempat pariwisata. Namun dikarenakan tempatnya yang berdekatan dengan pesisir pantai/samudra Hindia
                        membuat para penduduk khawatir tentang pekerjaan yang mereka dapatkan.
                    </li>
                </ol>

                <h6>Link</h6>
                <ol style="text-align: justify">
                    <li>
                        http://bappeda.jabarprov.go.id/wp-content/uploads/2017/03/Laporan-Akhir-Kebutuhan-Inv-Pangandaran-Raya.pdf
                    </li>
                    <li>
                        https://elibrary.unikom.ac.id/id/eprint/1956/9/UNIKOM_SINDY%20SINTIA.
                        N_BAB%20III.pdf
                    </li>
                </ol>

            </div>

        </div>

    </div>
</div>

@endsection
