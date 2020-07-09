@extends('layoutfront.masterfront')

@section('contentfront')

<!-- Bagian Celerates -->
<section class="home_banner section_gap">
    <div class="banner_inner">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <div class="justify-content text-center">
                            <h1>Celerates</h1><br>
                        </div>
                    </div>
                    <div class="title_color text-justify">
                        Celerates adalah perusahaan yang bergerak dalam bidang pengembangan sumber daya manusia dan bertujuan untuk membantu talenta-talenta dalam bidang IT untuk mengakselerasikan karir mereka. Celerates menawarkan program unggulan yaitu Celerates Acceleration Program, sebuah program akselerasi karir selama 1 tahun yang terdiri dari training intensive, mentoring, case study, mini project, networking dan project placement. 
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="home_right_img">
                        <img class="" src="{{asset('satner/img/banner/celeratesprog.png')}}" alt="" sizes="justify-content">
                    </div>
                </div>
            </div>   
        </div>
    </div>
</section>

<!-- Manajemen member -->
<section class="blog_categorie_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>TIM MANAJEMEN</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('satner/img/testimonials/1.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <h5>Riza Wahyu Syah</h5>
                            <div class="border_line"></div>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('satner/img/testimonials/2.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <h5>Anggun Miranda</h5>
                            <div class="border_line"></div>
                            <p>Sales Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('satner/img/testimonials/masdodi.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <h5>Dodi Hardi Setiawan</h5></a>
                            <div class="border_line"></div>
                            <p>Project Manager Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--================ Team Member =================-->
<div class="testimonial_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>TIM PENGEMBANG</h2>
                    <p>Pemodelan COVID-19 DKI Jakarta</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testi_slider owl-carousel">
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/akane.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Akane Viebia Aya</h4>
                                <p>Product Owner </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/angga.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Angga Saputra</h4>
                                <p>Scrum Master</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/icang.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Ikhsan Saputro</h4>
                                <p>Support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/fajar.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Fajar Nur Aulia</h4>
                                <p>Team Lead, Data Analyst</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/daryl.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Daryl Diningrat</h4>
                                <p>Developer, Data Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/gilang.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Gilang Nurdia Yusuf</h4>
                                <p>Developer, Junior Web Developer </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('satner/img/testimonials/sule.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Sulaiman Syah Jamal</h4>
                                <p>Developer, Junior Web Developer </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Team Member =================-->

@stop

