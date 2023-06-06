@extends('frontend.index')

@section('content')
{{-- Extra Css --}}
<style>
    .fblogo1 {
        height: 100px;
        width: auto;
    }

    .fblogo1 {
        height: 75px;
        width: auto;
    }

    @media screen and (max-width: 991px) {
        .fblogo1 {
            height: auto;
            width: 100%;
        }

        .fblogo2 {
            height: auto;
            width: 100%;
        }
    }

    .cont a {
        color: black;
        font-weight: 800;
    }

    .sec-head {
        margin: 0px !important;
    }

    .blur-bg {
        background: rgba(255, 255, 255, 0.5);
        border-radius: 1rem;
    }

    p {
        font-size: 17.5px;
    }

    .blur-bg-black {
        background: rgba(0, 0, 0, 0.5);
        border-radius: 1rem;
    }

    /* .services .mas-item:after{
            
            background: rgba(0,0,0,0.5);
        } */

    .services .mas-item .icon {
        color: white;
    }

    .number-sec .item:after {
        background: none !important;
    }

</style>
{{-- End --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">


<section style="background: -webkit-linear-gradient( right, #a7394b, #7314c7,#2b5ac0); background: -moz-linear-gradient( right, #a7394b, #7314c7,#2b5ac0); background: -ms-linear-gradient( right, #a7394b, #7314c7,#2b5ac0); background: -o-linear-gradient( right, #a7394b, #7314c7,#2b5ac0);
background: linear-gradient( right, #a7394b, #7314c7,#2b5ac0); /* background: url('img/gradient.png');background-position: center; background-repeat: no-repeat; background-size: cover; */
">

    <div id="plr"
        style="background-image: url('{{asset('/public/frontend/img/logo.gif')}}');  height: 100%; width: 100%;background-position: center; background-repeat: no-repeat; background-size: cover; z-index:10000;overflow: hidden;position: fixed;">
    </div>

    <header class="pages-header bg-img valign parallaxie  my-md-5 pt-md-5">
        <div class="container px-3 py-md-3 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h2>Pricing</h2>
                        <br><br>
                        <p>Start visualizing for free today. No credits, no limits.
                            Upgrade to access more features and better collaboration tools</p>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section class="main-enterprice-box" style="margin-top: 90px;">
        <div class="enterprice-box" style="height:auto;">

            <h4>Starter Plan</h4>
            <h6 class="mt-5"><sup>$</sup>0<span> / month</span></h6>

            <ul class="mt-5">
                <p>See what it’s all about with a free plan</p>
                <li style="list-style:circle"><span>Vizcom studio features</span></li>
                <li style="list-style:circle"><span>Unlimited files</span></li>
                <li style="list-style:circle"><span>Unlimited renderings</span></li>
                <li style="list-style:circle"><span>Community support</span></li>

            </ul>
            <br><br><br><br><br><br>
            <div class="text-center"><a href="#" class="buy-btn btn btn-primary">Get Started</a></div>

        </div>

        <div class="enterprice-box" style="height:auto;">

            <h4 class="mt-5">Professional</h4>

            <h6><sup>$</sup>49<span> / month</span></h6>

            <ul class="mt-5">
                <p>See what it’s all about with a free plan</p>
                <li style="list-style:circle"> <span>Vizcom studio features</span></li>
                <li style="list-style:circle"> <span>Unlimited files</span></li>
                <li style="list-style:circle"> <span>Unlimited renderings</span></li>
                <li style="list-style:circle"> <span>Community support</span></li>

            </ul>
            <br><br><br><br><br><br>
            <div class="text-center"><a href="#" class="buy-btn btn btn-primary">Get Started</a></div>

        </div>

        <div class="enterprice-box" style="height:auto;">

            <h4 class="mt-5">Enterprise</h4>

            <h6 class="mt-5"><sup>$</sup>49<span> / month</span></h6>
            <ul class="mt-5">
                <p>Perfect for you and your team</p>
                <li style="list-style:circle"> <span>Everything in Starte</span></li>
                <li style="list-style:circle"> <span>Collaborate with your team</span></li>
                <li style="list-style:circle"> <span>Unlimited exports</span></li>
                <li style="list-style:circle"> <span>Manage user roles</span></li>
                <li style="list-style:circle"> <span>Multiple image variations in one-click</span></li>
                <li style="list-style:circle"> <span>AI model customizations</span></li>
                <li style="list-style:circle"> <span>Access to topic-specific webinars</span></li>
                <li style="list-style:circle"> <span>Priority support from our team</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn btn btn-primary">Try Free For 30 Days</a></div>

        </div>
    </section>

    <section class="container mt-5" style="margin-top: 90px !important;">

        <h2 style="text-align: center;"><strong>Compare Features </strong></h2>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 30%;"><strong>User Roles</strong></th>
                        <th style="width: 30%;">Starter </th>
                        <th style="width: 40%;">Professional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Admin</td>
                        <td></td>
                        <td>Unlimited ($49 per month/editor)</td>
                    </tr>
                    <tr>
                        <td>Editor</td>
                        <td></td>
                        <td>Unlimited ($49 per month/editor)</td>
                    </tr>
                    <tr>
                        <td>Viewer</td>
                        <td></td>
                        <td>Unlimited</td>
                    </tr>
                </tbody>
            </table>
        </div><br><br><br>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 30%;"><strong>Vizcom Studio</strong></th>
                        <th style="width: 30%;">Starter </th>
                        <th style="width: 40%;">Professional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Files</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>AI Rederings</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Exports</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Classic sketching tools</td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>AI Create tools</td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>File layers</td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Magic lasso in-painting</td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>File organization tools</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>4K image export</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Multiple image variations</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Faster rendering speeds</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div><br><br><br>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 30%;"><strong>Collaboration</strong></th>
                        <th style="width: 30%;">Starter </th>
                        <th style="width: 40%;">Professional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Shared workspace</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Shared files and folders</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>User roles</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div><br><br><br>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 30%;"><strong>Support</strong></th>
                        <th style="width: 30%;">Starter </th>
                        <th style="width: 40%;">Professional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Discord community support</td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Vizcom team support</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                    <tr>
                        <td>Webinars</td>
                        <td></td>
                        <td><i class="bi bi-check" style="font-size: 30px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>

</section>

<script>
    window.localStorage.setItem('preloader', 0);

</script>

@stop
