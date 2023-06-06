<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.trinitygaming.in/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:15:40 GMT -->

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Avo onepage themeforest" />
    <meta name="description" content="Avo - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Home | Trinity Gaming India </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/public/frontend/img/favicon.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/style.css') }}" />


    <link rel="stylesheet" type="text/css"
        href="{{ asset('/public/frontend/rs-plugin/css/addons/revolution.addon.particles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/frontend/rs-plugin/css/settings.css') }}"
        media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/frontend/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/frontend/rs-plugin/css/navigation.css') }}">



</head>

<body>

    <div id="plr1" class="d-md-none d-block"
        style="background-image: url('{{ asset('/public/frontend/img/portrait.gif') }}');  height: 100%; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;z-index:10000; position: fixed;">

    </div>

    <div id="plr2" class="d-md-block d-none"
        style="background-image: url('{{ asset('/public/frontend/img/example.webm') }}');  height: 100%; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;z-index:10000; position: fixed;">

    </div>

    <div id="preloader">
    </div>


    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    @include('frontend.layouts.include.nav')

    <div>
        @yield('content')
    </div>

    @include('frontend.layouts.include.footer')


    <!-- jQuery -->
    <script src="{{ asset('/public/frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('/public/frontend/js/plugins.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('/public/frontend/js/scripts.js') }}"></script>


    <!-- <script src="javascript/jquery.js"></script> -->
    <script src="{{ asset('/public/frontend/javascript/plugins.min.html') }}"></script>

    <!-- Footer Scripts
============================================= -->
    <script src="{{ asset('/public/frontend/javascript/functions.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script src="{{ asset('/public/frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}.">
    </script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('/public/frontend/rs-plugin/js/extensions/revolution.extension.video.min.js') }}">
        < script src = "{{ asset('/public/frontend/rs-plugin/js/addons/revolution.addon.particles.min.js') }}" >

    </script>

    <script>
        var tpj = jQuery;
        var revapi4;
        var $ = jQuery.noConflict();

        tpj(document).ready(function () {
            if (tpj("#rev_slider_4_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            } else {
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "rs-plugin/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    particles: {},
                    navigation: {},
                    responsiveLevels: [1170, 1024, 778, 480],
                    visibilityLevels: [1170, 1024, 778, 480],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [900, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [1, 2, 3, 4, 5, 10, 15, 20, 25, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }

            RsParticlesAddOn(revapi4);
        }); /*ready*/

    </script>


    <script src="../cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        $(document).ready(function () {

            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 60,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.8,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 160,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 3,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        })
        setTimeout(() => {

            $('#plr1').remove();
            $('#plr2').remove();
            // $('#plr1').css('opacity','0');
            // $('#plr2').css('opacity','0');
            // off();
        }, 4500);

        function on() {
            document.getElementById("overlay").style.display = "block";
            // document.body.scroll="no";
            document.body.style.overflow = "hidden";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
            // document.body.scroll="yes";
            document.body.style.overflow = "visible";
        }

    </script>

</body>


</html>
