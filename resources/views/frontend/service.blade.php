@extends('layoutfront.masterfront')
@section('contentfront')

<!-- Area Deskripsi -->
<br>
<div class="about_area section_gap_top">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2>Dasbor </h2>
                </div>
                <div class="text-justify title_color">
                    Dasbor ini ditujukan untuk melihat data persebaran kasus COVID-19 disetiap kota pada Provinsi DKI Jakarta. oleh karena itu  pembuatan dashboard dibuat berdasarkan data yang sudah diberikan batasan, yaitu data-data kasus COVID-19 diluar jakarta ataupun yang belum teridentifikasi tidak diikutsertakan. Kemudian data ini difokuskan untuk melihat banyaknya kasus positif, sembuh, serta meninggal secara harian dan kumulatif. 
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ Start Features Area =================-->
<section class="features_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center feature_item">
            <div class='tableauPlaceholder' id='viz1594209257171' style='position: relative'>
                <noscript>
                    <a href='#'>
                        <img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;CO&#47;COVID-19Jakarta&#47;Dashboard1&#47;1_rss.png' style='border: none' />
                    </a>
                </noscript>
                <object class='tableauViz'  style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
                    <param name='embed_code_version' value='3' /> 
                    <param name='site_root' value='' />
                    <param name='name' value='COVID-19Jakarta&#47;Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;CO&#47;COVID-19Jakarta&#47;Dashboard1&#47;1.png' /> 
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en' />
                    <param name='filter' value='publish=yes' />
                </object></div>                
                <script type='text/javascript'>                   
                   var divElement = document.getElementById('viz1594209257171');                    
                   var vizElement = divElement.getElementsByTagName('object')[0];                    
                   if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1100px';vizElement.style.height='827px';} 
                   else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='1100px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='850px';}                     
                   var scriptElement = document.createElement('script');                  
                   scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                  
                   vizElement.parentNode.insertBefore(scriptElement, vizElement);                
               </script>
        </div>
        <div class="text-left">
            <a href="https://riwayat-file-covid-19-dki-jakarta-jakartagis.hub.arcgis.com">Sumber Data</a>
        </div>
    </div>
</section>
<!--================ End Features Area =================-->


@stop