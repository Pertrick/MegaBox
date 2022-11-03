
@extends('layouts.navbar');
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
    <link rel="stylesheet" href="css/responsive.css">
    <!--Jquery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
        /* .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255, 245, 245, 0.5) url(hostza-master/img/Spinner-1s-200px.gif) center no-repeat;
        } */

        /* * {
            background: rgba(255, 245, 245, 0.5) url(hostza-master/img/Spinner-1s-200px.gif) center no-repeat;
        } */

        /* Turn off scrollbar when body element has the loading class */
        body.loading {
            overflow: hidden;
        }

        /* Make spinner image visible when body element has the loading class */
        body.loading .overlay {
            display: block;
        }

        #exampleModal .modal-dialog,
        #exampleModal .modal-content {
            height: 90;
        }

        #exampleModal .modal-body {
            overflow-y: scroll;
        }

        .modal-backdrop {
            opacity: 0.5 !important;
        }


        tbody td {
            cursor: pointer;
            color: black;
        }

        #radio {
            display: flex;
            margin-right: 50px;
            margin-top: 20px;
            margin-bottom: 160px;
            padding-left: 10px;
        }

        label {

            padding-left: 20px;
        }

        #radio.input {
            padding-left: 10px;

        }


        table {
            margin-bottom: 300px;
        }
    </style>

    <!-- {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}} -->

</head>

<body>
    <!-- {{-- header-begin --}} -->

    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">

                <div class="row">
                    <div class="col-xl-9">
                        <div class="">

                            <div class="container">

                                <div class="data">
                                    {{-- <div class="row align-items-center justify-content-center"> --}}
                                    {{-- <div class="col-xl-9"> --}}
                                    <div class="slider_text text-center">
                                        <p>Please kindly scroll down to see the list of data we have</p>
                                        <h3 style="font-size:200%; padding-top:100px;">Go Big with your next Data</h3>
                                        <div class="find_dowmain" style="padding-bottom:150px;">
                                            <form class="find_dowmain_form">
                                                <input id="files" type="file" accept=".csv" required
                                                    placeholder="Find your domain">
                                                <button id="submit-file" type="submit">Preview File</button>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped slider_bg_1 overlay2">
            <h1 class="text-white">LIST OF DATA</h1>
            <thead>
                <tr>

                    <!-- <th scope="col"></th> -->
                    <th scope="col" class="text-white">Type</th>
                    <th scope="col" class="text-white">Name</th>
                    <th scope="col" class="text-white">Code</th>
                    <th scope="col" class="text-white">Amount</th>
                    <th scope="col" class="text-white">Discount</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Server</th>
                    <th scope="col" class="text-white">Product Code</th>
                    <th scope="col" class="text-white">Network</th>
                </tr>
            </thead>
            <tbody>

                <!-- <th scope="row">1</th> -->
                @foreach ($data as $datas)
                    <tr>
                        <td class="text-white">{{ $datas['type'] }}</td>
                        <td class="text-white">{{ $datas['name'] }}</td>
                        <td class="text-white">{{ $datas['code'] }}</td>
                        <td class="text-white">{{ $datas['amount'] }}</td>
                        <td class="text-white">{{ $datas['discount'] }}</td>
                        <td class="text-white">{{ $datas['status'] }}</td>
                        <td class="text-white">{{ $datas['server'] }}</td>
                        <td class="text-white">{{ $datas['product_code'] }}</td>
                        <td class="text-white">{{ $datas['network'] }}</td>
                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>



    <script></script>



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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"
        integrity="sha512-SGWgwwRA8xZgEoKiex3UubkSkV1zSE1BS6O4pXcaxcNtUlQsOmOmhVnDwIvqGRfEmuz83tIGL13cXMZn6upPyg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <div class="overlay"></div>
</body>


</html>
