@extends('patrials.main')
@section('container')
<div id="main">
    {{-- Hamburger Starts --}}
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <!-- Beranda dimulai dari sini -->
    <div class="page-heading">
        <h3>Beranda</h3>
    </div>

    <div class="page-content">
        <!-- Section Jumlah Penduduk Mulai -->
        <div class="card">
            <div class="card-body" style="background-color: #FEFEFE; border-radius: 10px; box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1); ">
                <h4 class="text-center mx-auto">Jumlah Penduduk di Jawa Barat Per Tahun</h4>
            </div>
        </div>

        <div class="row">
            @forelse ($data as $d )
            <div class="col-md-3 col-sm-4 col-6">
                <div class="card" style=" display: flex; justify-content: center; align-items: center; ">
                <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="text-center" style=" display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                <h3 class="font-bold text-primary"> {{ $d['tahun'] }} </h3>
                                <h6 class="font-extrabold mb-0"> {{ $d['jumlah_penduduk']}} Penduduk </h6>
                                <br>
                                <p class="text-muted mb-0">{{"(+" . $d['persentase_jumlah_penduduk'] * 100 . "%)"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h1>No Data</h1>
            @endforelse
            <!-- 2016 Mulai -->

            <!-- 2016 Selesai -->
            <!-- Section Jumlah Penduduk Selesai -->

            <!-- Section Jumlah Penduduk Miskin Selesai -->
            <div class="card" >
                <div class="card-body" style="background-color: #FEFEFE; border-radius: 10px; box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1); ">
                    <h4 class="text-center mx-auto">Penduduk Miskin di Jawa Barat Tahun 2016 - 2020</h4>
                </div>
            </div>

            <!-- Top 5 + Bottom 5 Jumlah Penduduk Miskin Mulai -->
            <div class="col-6">
                <div class='tableauPlaceholder' id='viz1650029133093' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='TOP '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5JumlahPendudukMiskindiJawaBarat2016-2020&#47;TOP&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='Top5JumlahPendudukMiskindiJawaBarat2016-2020&#47;TOP' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5JumlahPendudukMiskindiJawaBarat2016-2020&#47;TOP&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650029133093');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
                <div class='tableauPlaceholder' id='viz1650029177608' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='Bottom '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5JumlahPendudukMiskindiJawaBarat2016-2020&#47;BOTTOM&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='Bottom5JumlahPendudukMiskindiJawaBarat2016-2020&#47;BOTTOM' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5JumlahPendudukMiskindiJawaBarat2016-2020&#47;BOTTOM&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650029177608');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <!-- Top 5 + Bottom 5 Jumlah Penduduk Miskin Selesai -->

            <div class="col-6">
                <div class='tableauPlaceholder' id='viz1650031847920' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='Rata-Rata Penduduk Miskin di Jawa Barat '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ra&#47;Rata-RataPendudukMiskindiJawaBarat2016-2020&#47;Rata-RataPendudukMiskindiJawaBarat&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name'
                            value='Rata-RataPendudukMiskindiJawaBarat2016-2020&#47;Rata-RataPendudukMiskindiJawaBarat' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ra&#47;Rata-RataPendudukMiskindiJawaBarat2016-2020&#47;Rata-RataPendudukMiskindiJawaBarat&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650031847920');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 1) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <!-- Section Jumlah Penduduk Miskin Selesai -->


            <!-- Section Angka Harapan Hidup Mulai -->
            <div class="card" style="margin-top: 30px;">
                <div class="card-body" style="background-color: #FEFEFE; border-radius: 10px; box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1); ">
                    <h4 class="text-center mx-auto">Angka Harapan Hidup di Jawa Barat Tahun 2016 - 2020</h4>
                </div>
            </div>

            <!-- Top 5 + Bottom 5 Angka Harapan Hidup Mulai -->
            <div class="col-6">
                <!-- Top 5 Start -->
                <div class='tableauPlaceholder' id='viz1650034456861' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='Top 5 Angka Harapan Hidup (Tahun) '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5AngkaHarapanHidupTahun&#47;Top5AngkaHarapanHidupTahun&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='Top5AngkaHarapanHidupTahun&#47;Top5AngkaHarapanHidupTahun' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5AngkaHarapanHidupTahun&#47;Top5AngkaHarapanHidupTahun&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650034456861');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
                <!-- Top 5 End -->

                <!-- Bottom 5 Start -->
                <div class='tableauPlaceholder' id='viz1650034588007' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt=' Bottom 5 Angka Harapan Hidup (Tahun) '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5AngkaHarapanHidupTahun&#47;Bottom5AngkaHarapanHidupTahun&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name'
                            value='Bottom5AngkaHarapanHidupTahun&#47;Bottom5AngkaHarapanHidupTahun' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5AngkaHarapanHidupTahun&#47;Bottom5AngkaHarapanHidupTahun&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650034588007');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
                <!-- Bottom 5 End -->
            </div>
            <!-- Top 5 + Bottom 5 Angka Harapan Hidup Selesai -->

            <div class="col-6">
                <div class='tableauPlaceholder' id='viz1650034621499' style='position: relative'><noscript><a
                            href='#'><img alt='Total Angka Harapan Hidup '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;TotalAngkaHarapanHidupTahun&#47;TotalAngkaHarapanHidup&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='TotalAngkaHarapanHidupTahun&#47;TotalAngkaHarapanHidup' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;TotalAngkaHarapanHidupTahun&#47;TotalAngkaHarapanHidup&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650034621499');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 1) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <!-- Section Angka Harapan Hidup Selesai -->

            <!-- Section Pengangguran Mulai -->
            <div class="card" style="margin-top: 30px;">
                <div class="card-body" style="background-color: #FEFEFE; border-radius: 10px; box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1); ">
                    <h4 class="text-center mx-auto">Pengangguran di Jawa Barat Tahun 2017 - 2020</h4>
                </div>
            </div>
            <!-- Top 5 + Bottom 5 Pengangguran Mulai -->
            <div class="col-6">
                <!-- Top 5 Start -->
                <div class='tableauPlaceholder' id='viz1650032020927' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='Top 5 Jumlah Pengangguran di Jawa Barat 2017 - 2020 '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Top5JumlahPenganggurandiJawaBarat2017-2020&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name'
                            value='Top5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Top5JumlahPenganggurandiJawaBarat2017-2020' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;To&#47;Top5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Top5JumlahPenganggurandiJawaBarat2017-2020&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650032020927');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
                <!-- Top 5 Ends -->

                <!-- Bottom 5 Start-->
                <div class='tableauPlaceholder' id='viz1650031203058' style='position: relative; border-radius: 10px;'><noscript><a
                            href='#'><img alt='Bottom 5 Jumlah Pengangguran di Jawa Barat 2017 - 2020 '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Bottom5JumlahPenganggurandiJawaBarat2017-20202&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name'
                            value='Bottom5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Bottom5JumlahPenganggurandiJawaBarat2017-20202' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bo&#47;Bottom5JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;Bottom5JumlahPenganggurandiJawaBarat2017-20202&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650031203058');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
                <!-- Bottom 5 Ends-->
            </div>
            <!-- Top 5 + Bottom 5 Pengangguran Selesai -->

            <!-- Jumlah Pengangguran Mulai -->
            <div class="col-6">
                <div class='tableauPlaceholder' id='viz1650028808439'
                    style='position: relative; border-radius: 10px;'><noscript><a href='#'><img
                                alt='Jumlah Penangguran di Jawa Barat pada Tahun 2017 - 2020 '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ju&#47;JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;JumlahPenanggurandiJawaBaratpadaTahun2017-2020&#47;1_rss.png'
                                style='border: none' /></a></noscript><object class='tableauViz'
                        style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name'
                            value='JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;JumlahPenanggurandiJawaBaratpadaTahun2017-2020' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image'
                            value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ju&#47;JumlahPenganggurandiJawaBaratpadaTahun2017-2020&#47;JumlahPenanggurandiJawaBaratpadaTahun2017-2020&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-US' />
                        <param name='filter' value='publish=yes' /></object></div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1650028808439');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 1) + 'px';
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
            <!-- Jumlah Pengangguran Selesai -->
            <!-- Section Pengangguran Selesai -->
        </div>
    </div>
    <!-- Beranda berakhir disini -->
</div>
@endsection
