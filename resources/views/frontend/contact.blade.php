@extends('frontend.index')

@section('content')
{{-- Extra Css --}}
<script>
    window.localStorage.setItem('preloader', 0);

</script>
{{-- End --}}


<header class="works-header fixed-slider hfixd valign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11 static">
                <div class="capt mt-50">
                    <div class="parlx">
                        <h2 class="custom-font"><span>Let's</span>Talk About Your project.</h2>
                    </div>

                    <div class="bactxt custom-font valign">
                        <span class="full-width">Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="main-content">


    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form md-mb50">

                        <h4 class="extra-title mb-50">Get In Touch.</h4>

                        <form id="contact-form" method="post" action="https://www.trinitygaming.in/contact.php">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Name"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                        required="required"></textarea>
                                </div>

                                <button type="submit" class="btn-curve btn-lit"><span>Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="extra-title mb-50">Contact Info.</h4>
                        <h3 class="custom-font wow" data-splitting>Let's Talk.
                        </h3>
                        <div class="item mb-40">
                            <h5><a href="mailto:info@trinitygaming.in">jordan@vizcom.ai</a></h5>
                            <h5></h5>
                        </div>


                        <div class="social mt-50">

                            <a href="https://www.facebook.com/Trinitygamingindia" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/trinitygaming.in" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCpIQwX4Ohu5qWTuejt4S3dg" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://discord.gg/trinitygamingindia" class="icon">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   

</div>
@stop
