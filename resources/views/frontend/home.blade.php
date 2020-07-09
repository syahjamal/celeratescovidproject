@extends('layoutfront.masterfront')

@section('contentfront')

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
	<div class="banner_inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="banner_content">
						<h3 class="text-uppercase">WASPADA !</h3>
						<h1 class="text-uppercase">PENYEBARAN COVID-19</h1>
						<h5 class="text">Jaga Jarak Seksama, Jaga Sehat Bersama</h5>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="home_right_img">
						<img class="" src="{{asset('satner/img/banner/waspada.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Data Area Menggunakan Features Area =================-->
<section class="features_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="main_title">
                    <h2>Data Covid-19 DKI Jakarta </h2>
                    <p>
                        Diperbaharui: 05 Juli 2020
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner">
            <div class="col-lg-4 col-md-4">
                <div class="feature_item2">
                    <div class="stats__count">12.295</div>
                    <br>
                    <h4>Total Kasus Positif</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="feature_item2">
                    <div class="stats__count1">7.663</div>
                    <br>
                    <h4>Total Sembuh</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="feature_item2">
                    <div class="stats__count2">658</div>
                    <br>
                    <h4>Total Meninggal</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
             <h2>Layanan Jakarta Tanggap Covid-19</h2>
             <a href="tel:112" class="primary genric-btn info circle "><img src="../satner/img/phone.png" alt=""> <bold>112</bold></a>
         </div>
     </div>
            <!-- <div class="row justify-content-center">
                <a href="tel:112" class="primary genric-btn info circle "><img src="../satner/img/phone.png" alt=""> <bold>112</bold></a>
            </div> -->
        </div>
    </section>
    <!--================ End Data Covid Jakarta Area =================-->

    <!--================ Start Apa itu covid =================-->
    <section class="about_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{asset('satner/img/apaitu-corona.png')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="text-left justify-content">
                        <h2>Mari Perhatikan, <br>
                        Apa itu COVID-19 ?</h2>
                        <div class="title_color">
                           Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).
                       </div>
                   </div>
                   <br>
                   <div class="text-right justify-content">
                    <a href="https://covid19.kemkes.go.id/situasi-infeksi-emerging/info-corona-virus/tanya-jawab-coronavirus-disease-covid-19-qna-update-6-maret-2020/#.XwQZvygzZPZ">Kementerian Kesehatan RI</a>
                </div>
            </div>
        </div>
    </div> 
</section>
<!--================ End Apa itu Covid =================-->

<!--================ Start Berapa Bahaya covid =================-->
<section class="about_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-7">
                <div class="text-left justify-content">
                    <h2>Tetap Waspada, <br>
                    Seberapa Bahaya COVID-19 ?</h2>
                    <div class="title_color">
                       Penyakit COVID-19 pada umumnya bersifat ringan, terutama pada anak-anak dan orang dewasa muda. Namun, infeksi juga dapat 
                       menyebabkan penyakit serius: sekitar 1 dari 5 orang yang terinfeksi membutuhkan perawatan di rumah sakit. Karenanya, 
                       wajar jika orang khawatir akan dampak wabah COVID-19 pada diri mereka dan orang-orang yang mereka sayangi.
                    </div>
                   <h5>Tetap Hati-hati, Saling Mawas Diri</h5>
               </div>
               <br>
           </div>
           <div class="col-lg-5">
            <div class="home_right_img">
                <img class="" src="{{asset('satner/img/bahayacorona.png')}}" alt="">
            </div>
        </div>
    </div>
</div> 
</section>
<!--================ Seberapa Bahaya Covid =================-->

<!-- Area Card -->
<section class="features_area section_gap_bottom">
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <div class="justify-content text-center">
                    <h2>Gejala COVID-19</h2><br>
                </div>
                <div class="col-md-12 text-justify">
                    <div class="title_color">
                        Bila seseorang terinfeksi virus, dia akan menunjukkan gejala dalam 1-14 hari sejak terpapar virus. 
                        Gejala umumnya adalah demam, rasa lelah dan batuk kering, Sebagian besar orang hanya akan mengalami gejala ringan,
                        namun di kasus-kasus yang tertentu, infeksi dapat menyebabkan pnemonia dan kesulitan bernapas. Pada sebagian kecil kasus, 
                        infeksi virus corona bisa berakibat fatal. Orang lanjut usia (lansia) dan orang-orang dengan masalah kesehatan seperti tekanan darah tinggi,
                        gangguan jantung atau diabetes kemungkinan mengalami sakit lebih serius. Karena gejala-gejalanya mirip flu biasa, 
                        maka perlu dilakukan tes untuk memastikan apakah seseorang terinfeksi virus corona. 
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('satner/img/icons/demam.png')}}" alt="">
                        <br>
                        <p class="melindungi-diri">Demam suhu tinggi atau memiliki riwayat demam</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('satner/img/icons/batuk-gejala.png')}}" alt="">
                        <br>
                        <p class="melindungi-diri">Batuk dan nyeri tenggorokan</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('satner/img/icons/sesak.png')}}" alt="">
                        <br>
                        <p class="melindungi-diri">Sesak nafas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section_gap">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="justify-content text-center">
                        <h2>Mari Bersama Cegah COVID-19!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding-bottom:20px; padding-top: 20px;">
                <div class="col-md-1 text-center"></div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/stayathome.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Tetap tinggal di rumah; bekerja dari rumah, belajar dari rumah, dan beribadah di rumah</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/handsanitizer.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Cuci tangan dengan sabun dan air minimal 20 detik atau gunakan hand sanitizer berbasis alkohol minimal 60 %</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/disinfectant.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Bersihkan dan disinfeksi permukaan benda yang sering disentuh</p>
                </div>
                <div class="col-md-1 text-center"></div>
            </div>
            <div class="row justify-content-center" style="padding-bottom:20px;">
                <div class="col-md-1 text-center"></div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/batuk.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Tutupi mulut dan hidung saat batuk atau bersin dengan tisu atau siku bagian dalam</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/masker.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Pakai masker jika Anda harus beraktivitas di luar rumah dan ganti secara berkala</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('satner/img/icons/hidupsehat.png')}}" alt="">
                    <br>
                    <p class="melindungi-diri">Terapkan pola hidup sehat dengan makanan bergizi dan olahraga</p>
                </div>
                <div class="col-md-1 text-center"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Area Card -->

<!--================ Start Features Area =================-->

<!-- <section class="features_area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h3>Jaga Sehat Bersama Dengan Seksama </h3>
                    <h4>Bergandengan Tangan Lawan COVID-19</h4>
                </div>
            </div>
            <div class="col-md-12">
             <img src="{{asset('satner/img/banner/teamdoctors.png')}}" alt="">
         </div>
     </div>
 </div>
</section> -->


<!--================ End Features Area =================-->




@stop