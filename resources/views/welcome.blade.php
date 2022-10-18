<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mega Box</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="hostza-master/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="hostza-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="hostza-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="hostza-master/css/magnific-popup.css">
    <link rel="stylesheet" href="hostza-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="hostza-master/css/themify-icons.css">
    <link rel="stylesheet" href="hostza-master/css/nice-select.css">
    <link rel="stylesheet" href="hostza-master/css/flaticon.css">
    <link rel="stylesheet" href="hostza-master/css/gijgo.css">
    <link rel="stylesheet" href="hostza-master/css/animate.css">
    <link rel="stylesheet" href="hostza-master/css/slicknav.css">
    <link rel="stylesheet" href="hostza-master/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!--Jquery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>

        .overlay{
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255,245,245,0.5) url(hostza-master/img/Spinner-1s-200px.gif) center no-repeat;
        }
        body{
            text-align: center;
        }
        /* Turn off scrollbar when body element has the loading class */
        body.loading{
            overflow: hidden;   
        }
        /* Make spinner image visible when body element has the loading class */
        body.loading .overlay{
            display: block;
        }

       #exampleModal .modal-dialog,
       #exampleModal .modal-content{
            height: 90;
        }

        #exampleModal .modal-body{
            overflow-y:scroll;
        }

        .modal-backdrop {
            opacity:0.5 !important;
        }

       
        tbody td {
            cursor:pointer;
            color:black;
        }
       
    </style>
        
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="hostza-master/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="#">home</a></li>
                                        <li><a href="{{ route('airtime') }}">Airtime</a></li>
                                        <li><a href="#">Data <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Support.html">Support</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_green" href="#">
                                        <i class="flaticon-chat"></i>
                                        <span>Live Chat</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
            @if(session('message'))
                      <div class="alert alert-success my-2 mx-4">
                          <button type="button" class="close" data-dismiss="alert">x</button>
                          <div class="text-center">{{ session('message') }}</div>
                      </div>
                  @endif
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p>The Best Data and Airtime Provider In The Area</p>
                            <h3 style="font-size:300%;">Go Big with your next Data Or Airtime</h3>
                            <div class="find_dowmain">
                                <form class="find_dowmain_form">
                                    <input id="files" type="file" accept=".csv" required placeholder="Find your domain">
                                    <button id="submit-file" type="submit">Preview File</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">File Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">

        </div>  
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" id="collect-user-email" class="btn btn-success">Proceed</button>
        
      </div>
    </div>
  </div>
</div>

<!--Payment Modal -->
<div class="modal" id="paymentModal" tabindex="-1" role="dialog" tabindex="-1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Enter your E-mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" class="form-inline" style="width:50%; margin:1px auto;">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required/>
             </div>
           
            <input type="submit" id="proceed-to-pay" class="btn btn-success" value="Make Payment"/>
        </form> 
      </div>
    </div>
  </div>
</div>

    <!-- slider_area_end -->

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Choose your Hosting Plan
                        </h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon blue">
                            <i class="flaticon-servers"></i>
                        </div>
                        <h3>Share Hosting</h3>
                        <p class="prising_text">Easy drag and drop fully customizable mobile friendly</p>
                        <p class="prise">Start from <span>$2.5/m</span></p>
                        <a href="#" class="boxed_btn_green2">Start Now</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon lite_blue">
                            <i class="flaticon-hosting"></i>
                        </div>
                        <h3>VPS Hosting</h3>
                        <p class="prising_text">Easy drag and drop fully customizable mobile friendly</p>
                        <p class="prise">Start from <span>$2.5/m</span></p>
                        <a href="#" class="boxed_btn_green2">Start Now</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon pink">
                            <i class="flaticon-wordpress"></i>
                        </div>
                        <h3>Wordpress Hosting</h3>
                        <p class="prising_text">Easy drag and drop fully customizable mobile friendly</p>
                        <p class="prise">Start from <span>$2.5/m</span></p>
                        <a href="#" class="boxed_btn_green2">Start Now</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon yellow">
                            <i class="flaticon-servers-1"></i>
                        </div>
                        <h3>Dedicated Hosting</h3>
                        <p class="prising_text">Easy drag and drop fully customizable mobile friendly</p>
                        <p class="prise">Start from <span>$2.5/m</span></p>
                        <a href="#" class="boxed_btn_green2">Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    <!-- core_features_start -->
    <div class="core_features">
        <div class="container">
            <div class="border-bottm">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="featuures_heading">
                            <h3>Core Features</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="featurest_tabs ">
                            <nav>
                                <div class="nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Features</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Advanced Features</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon"><i class="flaticon-browser"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Free Domain for 1st Year
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon blue"><i class="flaticon-security"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Free SSL Certificate
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon pink"><i class="flaticon-like"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                30-Day Money-Back Guarantee
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon yellow"><i class="flaticon-lock"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Spam Protection
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon"><i class="flaticon-browser"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Free Domain for 1st Year
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon blue"><i class="flaticon-security"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Free SSL Certificate
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon pink"><i class="flaticon-like"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                30-Day Money-Back Guarantee
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon yellow"><i class="flaticon-lock"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Spam Protection
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- core_features_end -->

    <!-- dedicated_support_start -->
    <div class="dedicated_support support_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="support_info">
                        <h3>24h Dedicated Support</h3>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                            moving. Moving in fourth air night bring upon you’re it beast.</p>
                        <div class="get_started">
                            <a class="boxed_btn_green" href="#">
                                <span>Get Start Now</span>
                            </a>
                            <a href="#" class="phone_num">
                                +10 267 367 678 2678
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dedicated_support_end -->

    <div class="data_center_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Our Data Centres
                        </h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="location">
                        <div class="pulse_group">
                            <span>
                                <div class="address_on_hover d-none d-lg-block">
                                    <div class="address_inner">
                                        <i class="fa fa-map-marker"></i>
                                        <h3>Sydney, Australia</h3>
                                        <p>It is a long established fact that <br>
                                            a reader</p>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <div class="address_on_hover d-none d-lg-block">
                                    <div class="address_inner">
                                        <i class="fa fa-map-marker"></i>
                                        <h3>Sydney, Australia</h3>
                                        <p>It is a long established fact that <br>
                                            a reader</p>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <div class="address_on_hover d-none d-lg-block">
                                    <div class="address_inner">
                                        <i class="fa fa-map-marker"></i>
                                        <h3>Sydney, Australia</h3>
                                        <p>It is a long established fact that <br>
                                            a reader</p>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <div class="address_on_hover d-none d-lg-block">
                                    <div class="address_inner">
                                        <i class="fa fa-map-marker"></i>
                                        <h3>Sydney, Australia</h3>
                                        <p>It is a long established fact that <br>
                                            a reader</p>
                                    </div>
                                </div>
                            </span>
                        </div>
                        <img src="hostza-master/img/banner/map.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- faq_area_start -->
    <div class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="accordion_heading">
                        <h3>Frequently Ask Question</h3>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="flaticon-info"></i> What are the advantages <span>of WordPress hosting
                                            over shared?</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="flaticon-info"></i> Will you transfer my site?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        <i class="flaticon-info"></i> Why should I host with Hostza?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                        <i class="flaticon-info"></i> How do I get started <span>with Shared
                                            Hosting?</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->



    <!-- latest_new_area_start -->
    <div class="latest_new_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Latest News
                        </h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="hostza-master/img/news/1.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="hostza-master/img/news/2.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="hostza-master/img/news/3.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_new_area_end -->

    <!-- lets_launch_start -->
    <div class="lets_launch launch_bg_1 overlay2">
        <div class="launch_text text-center">
            <h3>Let’s Launch your Website Now</h3>
            <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. <br>
                Moving in fourth air night bring upon you’re it beast.</p>
            <div class="chat">
                <a class="boxed_btn_green" href="#">
                    <i class="flaticon-chat"></i>
                    <span>Live Chat</span>
                </a>
                <a class="boxed_btn_green2" href="#">
                    <span>get start now</span>
                </a>
            </div>
        </div>
    </div>
    <!-- lets_launch_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="hostza-master/img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="footer_text doanar"> <a class="first" href="#">+10 783 467 3789
                                </a> <br>
                                <a href="#">hostza@support.com</a></p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                service
                            </h3>
                            <ul>
                                <li><a href="#">Hosting</a></li>
                                <li><a href="#">Domain</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Shared Hosting</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="hostza-master/img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="hostza-master/img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Resistration</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <script>


        $(document).ready(function(){ 
            $('#submit-file').on("click", function(e){
                e.preventDefault();

                $('#files').parse({
                config:{
                    delimiter: "",
                    header:false,
                    complete: displayHTMLTable,
                },
                before: function(file, inputElement){
                    console.log('entering before');
                    $("body").addClass("loading");  
                },
                error:function(err, file){

                },
                complete:function(){
                    console.log('entering complete'); 
                          
                    $("body").removeClass("loading");                      
                }
                })  
            }) 


            $('#collect-user-email').click( function(e){
                 $('#exampleModal').modal("hide");
                $('#paymentModal').modal("show");
            });

            $('#proceed-to-pay').click( function(e){
                e.preventDefault();

                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                const email = $('#email').val();
                const data = JSON.stringify(convertToJson());
                if(validateEmail(email)){
                    $.ajax({
                    type: "POST",
                    url: "{{route('payment.checkout')}}",
                    dataType : 'JSON',
                    data : {
                        'email': email,
                        'data': data
                    },

                    success: function(payout_link){
                            // $('#paymentModal').modal("hide");
                            // Swal.fire(
                            //     'Data Uploaded Successfully!',
                            //     'success'
                            // )
                            console.log($reponse);

                             window.location = 'http://localhost:8000/'
                        }
                            console.log(payout_link);
                            window.location = payout_link;
                        
                    },
                    error: function(response){
                        console.log(response);

                    }

                    });
                }else{
                     Swal.fire(
                                'invalid Email',
                            )
                }
            });
        });  
      

    function displayHTMLTable(results){
       var table = "<table class='table table-bordered table-hover' id='tblData' style='width:100%; margin:0 auto;'>";
       var data = results.data;

       for(i=0; i<data.length; i++){
            table+="<tr>";
            var row =data[i];
            var cells = row.join(",").split(",");

            for(j=0; j<cells.length;j++){
                table+= "<td>";
                table+=cells[j];
                table+="</th>";
            }

            table+="</tr>";
       }
       table+="</table>";

       $(".table-responsive").html(table);
       $('#exampleModal').modal("show");
    }


    function convertToJson() {
      
        var table = document.getElementById("tblData");
        console.log(table);

        var header = [];
        var rows = [];
 
        for (var i = 0; i < table.rows[0].cells.length; i++) {
            header.push(table.rows[0].cells[i].innerHTML);
        }
 
        for (var i = 1; i < table.rows.length; i++) {
            var row = {};
            for (var j = 0; j < table.rows[i].cells.length; j++) {
                row[header[j]] = table.rows[i].cells[j].innerHTML;
            }
            rows.push(row);
        }

        
        return rows;
       
    }


    function validateEmail(email) {
        const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return res.test(String(email).toLowerCase());
    }
    </script>



    <!-- JS here -->
    <script src="hostza-master/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="hostza-master/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="hostza-master/js/popper.min.js"></script>
    <script src="hostza-master/js/bootstrap.min.js"></script>
    <script src="hostza-master/js/owl.carousel.min.js"></script>
    <script src="hostza-master/js/isotope.pkgd.min.js"></script>
    <script src="hostza-master/js/ajax-form.js"></script>
    <script src="hostza-master/js/waypoints.min.js"></script>
    <script src="hostza-master/js/jquery.counterup.min.js"></script>
    <script src="hostza-master/js/imagesloaded.pkgd.min.js"></script>
    <script src="hostza-master/js/scrollIt.js"></script>
    <script src="hostza-master/js/jquery.scrollUp.min.js"></script>
    <script src="hostza-master/js/wow.min.js"></script>
    <script src="hostza-master/js/nice-select.min.js"></script>
    <script src="hostza-master/js/jquery.slicknav.min.js"></script>
    <script src="hostza-master/js/jquery.magnific-popup.min.js"></script>
    <script src="hostza-master/js/plugins.js"></script>
    <script src="hostza-master/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="hostza-master/js/contact.js"></script>
    <script src="hostza-master/js/jquery.ajaxchimp.min.js"></script>
    <script src="hostza-master/js/jquery.form.js"></script>
    <script src="hostza-master/js/jquery.validate.min.js"></script>
    <script src="hostza-master/js/mail-script.js"></script>
    <script src="hostza-master/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js" integrity="sha512-SGWgwwRA8xZgEoKiex3UubkSkV1zSE1BS6O4pXcaxcNtUlQsOmOmhVnDwIvqGRfEmuz83tIGL13cXMZn6upPyg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <div class="overlay"></div>
</body>


</html>