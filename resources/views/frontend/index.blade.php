@extends('frontend.layouts.frontend')

@section('content')

{{-- Extra Css --}}
<style>
    .clients .item {
        background: white !important;
        color: black !important;
    }

    .imago {
        background-position: center;
    }

    .clients .brands .img img {
        max-width: 90%;
    }

    .block-sec .showreel .video-box:after,
    .block-sec .showreel .video-box:before {
        display: none !important;
    }

    html,
    head,
    body {
        height: 100%;
        width: 100%;
    }

    .fg-link:hover {
        font-size: 72px;
        background: linear-gradient(to right, #a7394b, #7314c7, #2b5ac0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .myVideo1 {
        position: fixed;
        right: 0;
        bottom: 0;
        width: 100%;
        z-index: 100000;
        ;
    }

    .myVideo2 {
        position: fixed;
        right: 0;
        bottom: 0;
        height: 100%;
        z-index: 100000;
        ;
    }

</style>
{{-- End --}}

<header class="slider slider-prlx" style="display: none;">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('/public/frontend/img/slid/01.jpg') }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption dig">
                                    <h1 data-splitting>Unique
                                        <div class="tline">brand Stories</div>
                                    </h1>
                                    <a target="_blank" href="#0" class="simple-btn mt-50">
                                        <span>Discover Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{asset('/public/frontend/img/slid/03.jpg')}}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption dig">
                                    <h1 data-splitting>Digital
                                        <div class="tline">Design Awards</div>
                                    </h1>
                                    <a target="_blank" href="#0" class="simple-btn mt-50">
                                        <span>Discover Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('/public/frontend/img/slid/02.jpg') }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption dig">
                                    <h1 data-splitting>Original
                                        <div class="tline">Solutions</div>
                                    </h1>
                                    <a target="_blank" href="#0" class="simple-btn mt-50">
                                        <span>Discover Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider setting -->
        <div class="setone setwo">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer" style="opacity: 1 !important;">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer" style="opacity: 1 !important;">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination top botm custom-font"></div>

        <div class="social-icon">
            <a target="_blank" href="#0"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="#0"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="#0"><i class="fab fa-behance"></i></a>
            <a target="_blank" href="#0"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</header>

<header class="freelancer sub-bg valign bg-img parallaxie" data-background="{{ asset('/public/frontend/img/slid/bf2.jpg') }}" data-overlay-dark="4"
    style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cont">
                    <h6>COMMITTED TO THE GAMING COMMUNITY</h6>
                    <h1>Trinity Gaming</h1>
                    <h4>
                        GAME CONNECT BUILD
                    </h4>
                    <div class="social-icon" style="display: none;">
                        <a target="_blank" href="#0" class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a target="_blank" href="#0" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#0" class="icon">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a target="_blank" href="#0" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<section class="slider-element revslider-wrap include-header">

    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.3.1.6 fullscreen mode -->
        <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
            <ul>
                <!-- SLIDE  -->
                <li id="particles-js" class="dark" data-index="rs-8" data-transition="fade" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">

                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-8-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['200','260','380','350']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                        data-responsive_offset="on"
                        data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11;">
                        <div class="rs-looped rs-wave" data-speed="10" data-angle="0" data-radius="5px"
                            data-origin="50% 50%">
                            <h1>Append</h1>
                        </div>
                    </div>


                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>

</section>

<section class="blc-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro md-mb30">
                    <div class="sub-title">

                    </div>
                    <h2 class="extra-title wow" data-splitting>The next generation of product visualization
                    </h2>
                </div>
            </div>
            <div class="col-lg-5 valign">
                <div class="full-width">
                    <p class="wow fadeInUp txt">
                        Vizcom's powerful combination of hand sketching and AI
                        processing tools enables designers to create and render faster than ever before. </p>
                    <a target="_blank" href="about.html" class="simple-btn custom-font mt-20 wow" data-splitting></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services section-padding d-none">
    <div class="container">
        <div class="row rone">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-monitor"></span>
                    <h6>Channel <br> Management</h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-camera"></span>
                    <h6>Art & <br> Animation</h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-phone"></span>
                    <h6>Brand<br> Collaboration</h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
        </div>
        <div class="row rtwo">
            <div class="col-lg-3 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-diskette"></span>
                    <h6>Event <br> Mangement</h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-help2"></span>
                    <h6>Funding <br></h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                <div class="mas-item">
                    <span class="icon pe-7s-arc"></span>
                    <h6>Career <br> Development</h6>
                    <div class="text-right">
                        <a target="_blank" href="#0" class="more"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block-sec">
    <div class="background bg-img section-padding pb-0" data-background="{{asset('/public/frontend/img/pattern.png')}}">
        <div class="container">
            <div class="number-sec">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item no-bord">
                            <span class="icon pe-7s-smile"></span>
                            <h3 class="custom-font" style="font-weight: 400;font-size: 3rem;"><span
                                    class="count">700</span>+</h3>
                            <p class="wow txt" style="font-weight: 400;font-size: 1rem;" data-splitting>Creators</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="icon pe-7s-portfolio"></span>
                            <h3 class="custom-font" style="font-weight: 400;font-size: 3rem;"><span
                                    class="count">50</span>+</h3>
                            <p class="wow txt" style="font-weight: 400;font-size: 1rem;" data-splitting>Brands</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="icon pe-7s-cloud-download"></span>
                            <h3 class="custom-font" style="font-weight: 400;font-size: 3rem;"><span
                                    class="count">250</span>+</h3>
                            <p class="wow txt" style="font-weight: 400;font-size: 1rem;" data-splitting>Events</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="icon pe-7s-medal"></span>
                            <h3 class="custom-font" style="font-weight: 400;font-size: 3rem;"><span class="count">120
                                    M</span>+</h3>
                            <p class="wow txt" data-splitting style="font-weight: 400;font-size: 1rem;">Monthly
                                Views</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="showreel" id="video">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="video-box">
                            <div class="w-100">
                                <video src="{{ asset('/public/frontend/video/home-main-video.mp4') }}" class="w-100" controls autoplay muted
                                    loop></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-carousel section-padding caroul sub-bg position-re">
    <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3>Enjoy effortless, time-saving rendering</h3>
                <p>
                    Vizcom turns your sketches into stunning concept drawings in seconds. Import your drawings or
                    sketch directly in the app. The native AI tools will dramatically boost your workflow speed by
                    rendering your design for you.
                </p>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="assets/img/features-light-1.jpg" alt="" class="stack-front">
                    <img src="assets/img/features-light-2.jpg" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
            <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                <img src="{{ asset('/public/frontend/img/features-light-3.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                <h3>Maintain authorship over your creations</h3>
                <p>You decide what gets created and that’s important. Our familiar, built-in sketch tools and layers
                    keep you in control, while AI handles the details..</p>


            </div>
        </div><!-- Features Item -->

    </div>
</section>

<section id="features" class="features">

    <!-- Features Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <br>
        <br>

    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3>Build momentum with product variations</h3>
                <p>
                    Increase efficiency with infinite design variations. Whether it’s color, material and finish
                    (CMF) or part-specific variations, Vizcom will help you produce more, faster.
                </p>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="{{ asset('/public/frontend/img/features-light-1.jpg') }}" alt="" class="stack-front">
                    <img src="{{ asset('/public/frontend/img/features-light-2.jpg') }}" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
            <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                <img src="{{ asset('/public/frontend/img/features-light-3.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                <h3>Collaborate seamlessly with others</h3>
                <p>
                    Build a workspace to collaborate on design files with your team and keep everyone in the loop on
                    shared work.
                </p>


            </div>
        </div><!-- Features Item -->

    </div>

</section>
<br>
<br>
<br>

<section id="stats" class="stats">

    <img src="{{asset('/public/frontend/img/bkground.jpg')}}" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <h1>Measurable design acceleration across your workflow</h1>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <h1 style="color: blueviolet;"> 2.4x</h1>
                    <p>Faster final concept rendering</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <h1 style="color: blueviolet;"> 4x</h1>
                    <p>More product variations</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <h1 style="color: blueviolet;"> 95%</h1>
                    <p>Less time spent hand rendering</p>
                </div>
            </div><!-- End Stats Item -->



        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>





    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <h1 style="text-align: center;">Experience Vizcom anywhere</h1><br>
        <h5 style="text-align: center; color: #A1A1A1;">Download the Vizcom desktop client app for Windows or Mac
            and get started with your drawing tablet.</h5><br><br>



        <section class="main-enterprice-box" style="margin-top: 90px;">
            <div class="enterprice-box" style="height:250px; display: flex; align-items: center;">

                <h4>MacOS</h4>

                <div class="text-center">

                    <p id="box-para"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-apple" viewBox="0 0 16 16">
                            <path
                                d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                            <path
                                d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                        </svg></p>
                </div>



            </div>

            <div class="enterprice-box" style="height:250px; display: flex; align-items: center;">

                <h4>Web</h4>

                <div class="text-center">
                    <p id="box-para"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-globe" viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                        </svg></p>
                </div>


            </div>

            <div class="enterprice-box" style="height:250px; display: flex; align-items: center;">

                <h4>Windows</h4>

                <p id="box-para"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-microsoft" viewBox="0 0 16 16">
                        <path
                            d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z" />
                    </svg></p>

            </div>
        </section>
    </div>


</section>

@stop
