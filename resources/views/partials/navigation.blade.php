    <header>
        <div class="header-area single_slider justify-content-center slider_bg_1 overlay2">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <img src="hostza-master/img/logo.png" alt="">
                                </a>
                            </div> 
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{request()->is('/') ? 'active' : ''}}" href="/">home</a></li>
                                        <li><a class="{{request()->is('airtime*') ? 'active' : ''}}" href="{{ route('airtime') }}">Airtime</a></li>
                                        <li><a class="{{request()->is('data*') ? 'active' : ''}}"href="{{ route('data') }}">Data</a></li>
                                     
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>  