<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="pingback" href="xmlrpc.php">


    <title> Sunstate &#8211; Hire a Car</title>

    
    <link rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Hind%3A300%2Cregular%2C500%2C600%2C700&amp;subset=latin-ext%2Cdevanagari%2Clatin&amp;ver=84e558e18080ec9bc7458b79924cc3ab'
        type="text/css" media="all">
    <link rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Clatin&amp;ver=84e558e18080ec9bc7458b79924cc3ab'
        type="text/css" media="all">
    <link rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin-ext%2Clatin&amp;ver=84e558e18080ec9bc7458b79924cc3ab'
        type="text/css" media="all">
    <link rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=84e558e18080ec9bc7458b79924cc3ab'
        type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/superfish.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/component.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style-responsive.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style-custom.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/masterslider.main.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/masterslider-custom.css') }}" type="text/css" media="all">
    <script type="text/javascript">
        function Captcha() {
            var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
                'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
                'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
            var i;
            for (i = 0; i < 6; i++) {
                var a = alpha[Math.floor(Math.random() * alpha.length)];
                var b = alpha[Math.floor(Math.random() * alpha.length)];
                var c = alpha[Math.floor(Math.random() * alpha.length)];
                var d = alpha[Math.floor(Math.random() * alpha.length)];
                var e = alpha[Math.floor(Math.random() * alpha.length)];
                var f = alpha[Math.floor(Math.random() * alpha.length)];
                var g = alpha[Math.floor(Math.random() * alpha.length)];
            }
            var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
            document.getElementById("mainCaptcha").value = code
        }

        function ValidCaptcha() {
            var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
            var string2 = removeSpaces(document.getElementById('txtInput').value);
            if (string1 == string2) {
                return true;
            } else {
                return false;
            }
        }

        function removeSpaces(string) {
            return string.split(' ').join('');
        }
    </script>
    <style>
        .modal-footer a.text-left {
            color: blue;
        }

        .loginIndex .modal-footer {
            justify-content: end !important;
        }

    </style>
</head>

<body onload="Captcha();" data-rsssl=1
    class="home page-template-default page page-id-5702 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home=home.html>
        <header class="limoking-header-wrapper header-style-2-wrapper limoking-header-no-top-bar">
            <div class="container-fluid webview">
                <div class="row">

                    <div class="col-md-9 col-sm-12">
                        <div class=limoking-logo-inner>
                            <a href="{{ url('/') }}">
                                <img class="img-responsive w-9" src="{{ asset('assets/upload/logo.png') }}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <!--------------col-md-12-->
                    <div class="col-md-2 col-sm-12 mx-auto text-center contactZone">
                        <form class="loginIndex">

                            <div class="form-group row">
                                <!---<img class="img-responsive mt-2 col-md-1 col-sm-2 p-0" src="images/envelope-icon1.png" />-->
                                <a href="contact-page.html"><img class="img-responsive mt-2 mr-1"
                                        style="width:20px; height:20px;" src="{{ asset('assets/images/phone-icon1.png') }}" /></a>
                                <label for="inputEmail3" class="col-form-label"><a href="{{ url('/contact') }}">Contact Us
                                    </a></label>
                                <div class="col-md-2 col-sm-2">
                                    <a class="btn btn-primary ml-3" data-toggle="modal"
                                        data-target="#exampleModal">Login</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="w-100">

                                                        <div class="form-group text-left">
                                                            <label for="exampleInputEmail1" class="col-form-label">Email
                                                                address</label>
                                                            <input type="email" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Enter email">

                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label for="exampleInputPassword1"
                                                                class="col-form-label text-left">Password</label>
                                                            <input type="password" class="form-control"
                                                                id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                    <a class="text-left col-md-4" href="create_new.html">Create
                                                        Account</a>
                                                    <div class="col-md-8 text-right">
                                                        <a class="color-blue pr-2" href="forgot_password.html">Forgot
                                                            Password</a>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <a type="button" class="btn btn-primary text-white"
                                                            href="myreservation.html">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------end of modal-->
                                </div>
                            </div>
                        </form>
                        <!-- Modal -->
                        <div class="modal fade" id="#exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail3"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3"
                                                    class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword3"
                                                        placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10 text-center mx-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------end of modal-->
                    </div>
                    <!--------------col-md-12-->
                </div>
            </div>
            <!------------------end of container-fluid-->
            <div class="container-fluid mobview">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="limoking-logo">
                            <div class="limoking-logo-inner">
                                <a href="index.html"> <img src="{{ asset('assets/upload/logo.png') }}" alt=""> </a>
                            </div>
                            <div class="limoking-responsive-navigation dl-menuwrapper"
                                id="limoking-responsive-navigation">
                                <button class="dl-trigger mr-4">Open Menu</button>
                                <ul id="menu-main-menu" class="dl-menu limoking-main-mobile-menu ml-4">
                                    <li class="menu-item menu-item  limoking-normal-menu"><a href="{{ url('/')}}">Home</a>
                                    </li>
                                    <li class="menu-item menu-item limoking-normal-menu"><a
                                            href="{{ url('/rates')}}">Rates</a></li>
                                    <li class="menu-item menu-item limoking-normal-menu"><a href="{{ url('/fleet') }}">Fleet</a>
                                    </li>
                                    <li class="menu-item menu-item limoking-normal-menu"><a href="{{ url('/faq') }}">FAQ</a></li>
                                    <li class="menu-item menu-item limoking-normal-menu">
                                        <a href="{{ url('/testimonial') }}">Testimonial</a>
                                    </li>
                                    <li class="menu-item current-menu-item limoking-normal-menu">
                                        <a href="{{ url('/reserve_online') }}">Reserve Online</a>
                                    </li>
                                    <li class="menu-item menu-item limoking-normal-menu"><a
                                            href="{{ url('/contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--------------col-md-12-->
                    <div class="col-sm-12 mx-auto text-center">
                        <form>

                            <div class="form-group row mtMinus20">
                                <!---<img class="img-responsive mt-2 col-md-1 col-sm-2 p-0" src="images/envelope-icon1.png" />-->
                                <a href="contact-page.html"><img class="img-responsive mt-2 mr-1"
                                        style="width:20px; height:20px;" src="{{ asset('assets/upload/phone-icon1.png')}}" /></a>
                                <label for="inputEmail3" class="col-form-label"><a href="{{ url('/contact') }}">Contact Us
                                    </a></label>
                                <div class="col-md-2 col-sm-2 mx-auto mt-3">
                                    <button class="btn btn-primary ml-3" data-toggle="modal"
                                        data-target="#exampleModalCenter">Login</button>
                                </div>
                            </div>
                        </form>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------col-md-12-->
                </div>
            </div>
            <!------------------end of container-fluid-->
            <!-------------------end of mobview-->
            <div id="limoking-header-substitute"></div>
            <div class="limoking-header-inner header-inner-header-style-2" id="stickytypeheader">
                <div class="limoking-header-container container">
                    <div class="limoking-header-inner-overlay"></div>
                    <div class="limoking-navigation-wrapper">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <ul class="navbar-nav text-uppercase">
                                <li id="menu-main-menu-1" class="nav-item active">
                                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/rates') }}" class="nav-link">Rates</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/fleet') }}" class="nav-link">Fleet</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/faq') }}" class="nav-link">FAQ</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/testimonial') }}" class="nav-link">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/reserve_online') }}" class="nav-link">Reserve Online</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/contact') }}" class="nav-link">Contact Us</a>
                                </li>
                            </ul><img id="limoking-menu-search-button" src="{{ asset('assets/images/magnifier-light.png') }}"
                                alt="width:58; height:59;">

                            <div class="limoking-menu-search searchCustom" id="limoking-menu-search">
                                <form method="get" id="searchform" action="#">
                                    <div class="search-text">
                                        <input type="text" value="Type Keywords" name="s" autocomplete="off"
                                            data-default="Type Keywords">
                                    </div>
                                    <input type="submit" value="">
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </nav>

                        <div class="limoking-navigation-gimmick" id="limoking-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!------------------end of header-->
