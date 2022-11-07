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
        <div class="single_slider d-flex align-items-center justify-content-center airtime overlay2">
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
                            <p>The Best Data and Airtime Provider In The Area</p>
                            <h3 style="font-size:300%;">Go Big with your next Airtime</h3>
                            <div class="find_dowmain">
                                <form class="find_dowmain_form">
                                    <input id="files" type="file" accept=".csv" required
                                        placeholder="Find your domain">
                                    <input type="hidden" value="airtime" id="type">
                                    <button id="submit-file" type="submit">Preview File</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>

                <a href="{{ url('downloadairtime') }}" class="btn btn-outline-warning">DOWNLOAD SAMPLE CSV FILE</a>

            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    @include('modals.csv')

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-70">
                        <h3>
                            Pricing
                        </h3>
                        <p>Airtime <br>
                            <span class="text-success font-weight-bold">MTN - AIRTEL - 9Mobile - GLO</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="single_prising">
                        <h3>Airtime</h3>
                        <div class="prising_icon blue">
                        <table class="table ">
                            <thead class="thead-light">
                                <tr>
                                    <th>Product/Service</th>
                                    <th>Network</th>
                                    <th>Regular Discount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <img src="/images/MTN-logo.jpg" width="60" height="60" style="border-radius:50%;"></td>
                                    <td>MTN</td>
                                    <td>3% Discount</td>
                                </tr>
                                <tr>
                                    <td> <img src="/images/airtel-logo.jpg" width="60" height="60" style="border-radius:50%;"></td>
                                    <td>AIRTEL</td>
                                    <td>3% Discount</td>
                                </tr>
                                <tr>
                                    <td> <img src="/images/glo-logo.jpg" width="60" height="60" style="border-radius:50%;"></td>
                                    <td>GLO</td>
                                    <td>3% Discount</td>
                                </tr>
                                <tr>
                                    <td> <img src="/images/9mobile-logo.jpg" width="60" height="60" style="border-radius:50%;"></td>
                                    <td>9MOBILE</td>
                                    <td>3% Discount</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <p class="prising_text">Fast and quick response for Bulk airtime distribution for all Networks
                        </p>
                        <p class="prise">From as low as<span>&#8358;50</span></p>
                        <!-- <a href="/" class="boxed_btn_green2">Start Now</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    @include('partials.footer')
