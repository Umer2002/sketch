@extends('frontend.enterprice')

@section('content')

{{-- Extra Css --}}
<script>
    window.localStorage.setItem('preloader', 0);
</script>
<style>
    @media screen and (max-width: 991px) {

        .team .team-container {
            width: 100% !important;
        }
    }

    p {
        font-size: 17.5px;
    }
</style>
{{-- End --}}


<header class="pages-header bg-img valign parallaxie" data-background="{{ asset('/public/frontend/img/bg.jpg') }}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Curate your own AI design library</h1>

                    <p class=" mt-5">Unlock the value of your design data and render with a personalized, customized
                        AI model.</p>

                    <a href="#" class="contact-link mt-5">
                        <button class="enter-button">Contact Us</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</header>

<section class="enterprice-alphabat-img mt-5"></section>

<section class="main-enterprice-box" style="margin-top: 90px;">
    <div class="enterprice-box">

        <h4>Sort</h4>

        <p id="box-para">Select designs, sort them into libraries, and match vocabulary to create
            your
            personalized design language.</p>

        <div>
            <img id="box-img" src="https://www.vizcom.ai/images/enterprise/sort.svg" alt="">
        </div>

    </div>

    <div class="enterprice-box">

        <h4>Arrange</h4>

        <p id="box-para">Train your own AI model library and select which libraries to render from,
            try
            merging past designs with fresh mood boards.</p>

        <div>
            <img id="box-img" src="https://www.vizcom.ai/images/enterprise/arrange.svg" alt="">
        </div>

    </div>

    <div class="enterprice-box">

        <h4>Create</h4>

        <p id="box-para">Select relevant libraries and start rendering relevant designs.</p>

        <div>
            <img id="box-img" src="https://www.vizcom.ai/images/enterprise/create.svg" alt="">
        </div>

    </div>
</section>

<section class="container" style="margin-top: 90px;">

    <h1 style="color: white;">Render with Relevance</h1>
    <p class=" mt-5">Select relevant libraries and start rendering designs that make sense to you.
    </p>

    <div class="sc-bGhRYA iAYkSd mt-5">
        <div class="sc-fyBusP kKFciz"><button id="pre">←</button>
            <p>Moodboard</p><button id="next">→</button>
        </div>

        <div class="main-slider-box" id="slide-box-1">

            <div class="enterprice-box">

                <h4>Input</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/input1.png') }}" alt="">
                </div>

            </div>

            <div class="enterprice-box">

                <h4>Design Direction</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/design1.png') }}" alt="">
                </div>

            </div>

            <div class="enterprice-box">

                <h4>Output</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/output1.png') }}" alt="">
                </div>

            </div>

        </div>

        <div class="main-slider-box" id="slide-box-2">

            <div class="enterprice-box">

                <h4>Input</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/input2.png') }}" alt="">
                </div>

            </div>

            <div class="enterprice-box">

                <h4>Design Direction</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/design2.png') }}" alt="">
                </div>

            </div>

            <div class="enterprice-box">

                <h4>Output</h4>
                <div>
                    <img id="box-img" src="{{ asset('/public/frontend/img/enterprice/output2.png') }}" alt="">
                </div>

            </div>
        </div>

    </div>


</section>

<section class="container mt-5" style="margin-top: 90px;">
    <h1 style="color: white;">Maintain Authorship</h1>
    <p class=" mt-5">Renders are sourced from your initial sketch, giving you authorship and control over the
        outcome.</p>

    <div class="mt-5" style="width:100%;">
        <video src="{{ asset('/public/frontend/video/home-main-video.mp4') }}" controls autoplay loop muted width="100%" height="360"></video>
    </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>

    $("#slide-box-1").hide();
    $("#slide-box-2").show();

    $("#pre").click(function () {

        $("#slide-box-2").hide();
        $("#slide-box-1").show();
    })

    $("#next").click(function () {

        $("#slide-box-1").hide();
        $("#slide-box-2").show();
    })

</script>

@stop