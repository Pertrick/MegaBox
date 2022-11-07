
@include('partials.header')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
        @include('partials.navigation')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center welcome overlay2">
            <div class="container">
                @if (session('message'))
                    <div class="alert alert-success my-2 mx-4">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <div class="text-center">{{ session('message') }}</div>
                    </div>
                @endif
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            {{-- <p>The Best Data and Airtime Provider In The Area</p> --}}
                            {{-- <h3 style="font-size:300%;">Go Big with your next Data Or Airtime</h3> --}}
                            <div class="find_dowmain">
                                <form class="find_dowmain_form">
                                    <input id="files" type="file" accept=".csv" class="form-control" required
                                        placeholder="Find your domain">
                                    <button id="submit-file" type="submit">Upload</button>
                                </form>
                            </div>
                            <p>The Best Data and Airtime Provider In The Area</p>
                            <h3 style="font-size:300%;">
                            Go Big with your next Data Or Airtime
                        </h3>
                            <p class="text-light">Bulk Data purchase made easy and affordable</pn>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- prising_area_start -->
     <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-80">
                        <h3>
                            Choose your Service Plan
                        </h3>
                        <p>Choose the best of services from our pool of Discounted Airtime and Data. <br>
                            Our Data Services cuts across all networks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon blue">
                            <i class="flaticon-servers"></i>
                        </div>
                        <h3>Airtime</h3>
                        <p class="prising_text">Bulk purchase of airtime made so easy and also affordable just for you</p>
                        <p class="prise">Start from as low as <span>&#8358;50</span></p>
                        <a href="{{route('airtime')}}" class="boxed_btn_green2">See more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_prising">
                        <div class="prising_icon lite_blue">
                            <i class="flaticon-hosting"></i>
                        </div>
                        <h3>Data Subscription</h3>
                        <p class="prising_text">Purchase your Data in Bulk at a discounted price simply and easy</p>
                        <p class="prise">Start from as low as<span>100 mb</span></p>
                        <a href="{{route('data')}}" class="boxed_btn_green2">See more</a>
                    </div>
                </div>
              
             
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

   @include('partials.footer')
    <!-- Button trigger modal -->
