
@include('partials.header')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
        @include('partials.navigation')
    <!-- header-end -->

    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center data overlay2">
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
                            <h3 style="font-size:300%;">Go Big with your next Data</h3>
                            <div class="find_dowmain">
                                <form class="find_dowmain_form">
                                    <input id="files" type="file" accept=".csv" required
                                        placeholder="Find your domain">
                                        <input type="hidden" value="data" id="type">
                                    <button id="submit-file" type="submit">Preview File</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br>

                <a href="{{ route('download.data') }}" class="btn btn-outline-warning">DOWNLOAD DATA SAMPLE CSV FILE</a>

            </div>
        </div>
    </div>



     <!-- prising_area_start -->
     <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>
                            Pricing
                        </h3>
                        <p>Data Subscription <br>
                            <span class="text-success font-weight-bold">MTN - AIRTEL - 9MOBILE - GLO</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="single_prising">
                        <h3>Data Subscription</h3>
                        <div class="prising_icon blue table-responsive">
                        <table class="table" style="">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>Product/Service</th>
                                    <th>Code</th>
                                    <th>Amount</th>
                                    <th>Regular Discount</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($mtn as $value)
                                <tr>
                                    <td><img src="/images/MTN-logo.jpg" width="40" height="40" style="border-radius:50%;"></td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['code']}}</td>
                                    <td>&#8358;{{$value['amount']}}</td>
                                    <td>{{$value['discount']}}</td>
                                    
                                </tr> 
                                @endforeach

                                @foreach ($airtel as $value)
                                <tr>
                                    <td><img src="/images/airtel-logo.jpg" width="40" height="40" style="border-radius:50%;"></td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['code']}}</td>
                                    <td>&#8358;{{$value['amount']}}</td>
                                    <td>{{$value['discount']}}</td>
                                    
                                </tr> 
                                @endforeach

                                @foreach ($glo as $value)
                                <tr>
                                    <td><img src="/images/glo-logo.jpg" width="40" height="40" style="border-radius:50%;"></td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['code']}}</td>
                                    <td>&#8358;{{$value['amount']}}</td>
                                    <td>{{$value['discount']}}</td>
                                    
                                </tr> 
                                @endforeach

                                @foreach ($etisalat as $value)
                                <tr>
                                    <td><img src="/images/9mobile-logo.jpg" width="40" height="40" style="border-radius:50%;"></td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['code']}}</td>
                                    <td>&#8358;{{$value['amount']}}</td>
                                    <td>{{$value['discount']}}</td>
                                    
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <p class="prising_text">Fast and quick response for Bulk Data subscription distribution for all Networks</p>
                        <p class="prise">From as low as<span>100mb</span></p>
                        <!-- <a href="/" class="boxed_btn_green2">Start Now</a> -->
                </div>
                          
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    @include('modals.csv')

    @include('partials.footer')
    <!-- Button trigger modal -->

 