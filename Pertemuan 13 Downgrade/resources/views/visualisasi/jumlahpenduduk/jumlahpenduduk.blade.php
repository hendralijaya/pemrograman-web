@extends('patrials.main')

@section('container')

<div id="main">
    <div class="page-heading">
        <h3>Visualisasi Jumlah Penduduk di Jawa Barat Tahun 2017-2020</h3>
    </div>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class='tableauPlaceholder' id='viz1649441533203' style='position: relative;border-radius: 10px;'><noscript><a href='#'><img alt='Chart Jumlah Penduduk Miskin di Jawa Barat  ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ch&#47;ChartJumlahPendudukdiJawaBarat&#47;ChartJumlahPendudukMiskindiJawaBarat&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='ChartJumlahPendudukdiJawaBarat&#47;ChartJumlahPendudukMiskindiJawaBarat' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ch&#47;ChartJumlahPendudukdiJawaBarat&#47;ChartJumlahPendudukMiskindiJawaBarat&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1649441533203');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
</div>
@endsection