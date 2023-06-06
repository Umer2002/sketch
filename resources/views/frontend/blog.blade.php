@extends('frontend.index')

@section('content')

<header class="works-header fixed-slider valign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11 static">
                <div class="capt mt-50">
                    

                    <div class="bactxt custom-font valign">
                        <span class="full-width">BLOG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="services section-padding sub-bg">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">Inside Vizcom</h6>
            <h3 class="wow" data-splitting>Blog.</h3>
            <p data-aos="fade-up" data-aos-delay="200">Read about the latest Vizcom news, product updates,
                interviews, and resources.</p>
            <span class="tbg">BLOG</span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="mas-item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-star">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Product
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        Viscom Philosophy on AI tools
                    </p>
                    <p class="post-author" style="color: rgb(128, 126, 125);">Maria Doe</p>
                    <p class="post-date">
                        <time datetime="2022-01-01" style="color: rgb(128, 126, 125);">Jan 1, 2022</time>
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="mas-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-users">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Company
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        Nisi magni odit consequatur autem nulla dolorem.
                    </p>
                    <p class="post-author" style="color: rgb(128, 126, 125);">Allisa Mayer</p>
                    <p class="post-date">
                        <time datetime="2022-01-01" style="color: rgb(128, 126, 125);">Jun 5, 2022</time>
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mas-item wow fadeInUp" data-wow-delay=".3s">

                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-note2">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Entertainment
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        Possimus soluta ut id suscipit ea ut in quo quia et soluta
                    </p>
                    <p class="post-author" style="color: rgb(128, 126, 125);">Mark Dower</p>
                    <p class="post-date">
                        <time datetime="2022-01-01" style="color: rgb(128, 126, 125);">Jun 22, 2022</time>
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="mas-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-portfolio">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Entertainment
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        Possimus soluta ut id suscipit ea ut in quo quia et soluta
                    </p>
                    <p class="post-author" style="color: rgb(128, 126, 125);">Mark Dower</p>
                    <p class="post-date">
                        <time datetime="2022-01-01" style="color: rgb(128, 126, 125);">Jun 22, 2022</time>
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="mas-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-plane">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Brand Recognition
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        We provide our creators with suitable brands to collaborate with. Creators have equal
                        chances to be recognized by our partner brands.
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="mas-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="row my-3">
                        <div class="col-2 text-center d-flex my-auto icon pe-7s-smile">
                        </div>
                        <div class="col-10 text-center my-auto d-flex">
                            Personalized Guidance
                        </div>
                    </div>
                    <br>
                    <p style="text-align:justify;">
                        We at Trinity aim at holistic growth of our creators. We focus on our creators individually
                        and cater to their issues which are leading to hindrances in their growth.
                    </p>

                    <div class="bg-color"></div>
                </div>
            </div>



        </div>
    </div>
</section>

<section class="call-action section-padding sub-bg bg-img d-none" data-background="{{ asset('/public/frontend/img/pattern.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="content sm-mb30">
                    <h6 class="wow" data-splitting>Let’s Talk</h6>
                    <h2 class="wow custom-font" data-splitting>about your <b>next project</b>.</h2>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 valign">
                <a href="contact.html" class="btn-curve btn-lit"><span>Get In Touch</span></a>
            </div>

        </div>
    </div>
</section>

@stop
