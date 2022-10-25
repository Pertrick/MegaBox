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
        .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255, 245, 245, 0.5) url(hostza-master/img/Spinner-1s-200px.gif) center no-repeat;
        }

        body {
            text-align: center;
        }

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
                            {{-- <div class="logo-img">
                                <a href="index.html">
                                    <img src="hostza-master/img/logo.png" alt="">
                                </a>
                            </div> --}}
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="#">home</a></li>
                                        <li><a href="{{ route('airtime') }}">Airtime</a></li>
                                        {{-- <li><a href="#">Data <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="#">Data</a></li>
                                        {{-- <li><a href="Support.html">Support</a></li> --}}
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Contact</a></li>
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
                                {{-- <div class="live_chat_btn">
                                    <a class="boxed_btn_green" href="#">
                                        <i class="flaticon-chat"></i>
                                        <span>Live Chat</span>
                                    </a>
                                </div> --}}
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
                            <h3 style="font-size:300%;">Go Big with your next Data Or Airtime</h3>
                            <div class="find_dowmain">
                                <form class="find_dowmain_form">
                                    <input id="files" type="file" accept=".csv" required
                                        placeholder="Find your domain">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-keyboard="false" data-backdrop="static">
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
    <div class="modal" id="paymentModal" tabindex="-1" role="dialog" tabindex="-1" aria-hidden="true"
        data-keyboard="false" data-backdrop="static">
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
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Email" required />
                        </div>
                        <p><strong>WHAT ARE YOU BUYING FROM US?</strong></p>
                        <div id="radio" class="mb-5">
                            <input type="radio" id="data" name="type" value="data" class="pe-5 pl-5">
                            <label for="data" class="pr-5">DATA</label>
                            <input type="radio" id="airtime" name="type" value="airtime" class="pe-5">
                            <label for="airtime">AIRTIME</label>
                        </div>
                        <input type="submit" id="proceed-to-pay" class="btn btn-success" value="Make Payment" />
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            $('#submit-file').on("click", function(e) {
                e.preventDefault();
                $('#files').parse({
                    config: {
                        delimiter: "",
                        header: false,
                        complete: displayHTMLTable,
                    },
                    before: function(file, inputElement) {
                        console.log('entering before');
                        $("body").addClass("loading");
                    },
                    error: function(err, file) {},
                    complete: function() {
                        console.log('entering complete');

                        $("body").removeClass("loading");
                    }
                })
            })
            $('#collect-user-email').click(function(e) {
                $('#exampleModal').modal("hide");
                $('#paymentModal').modal("show");
            });
            $('#proceed-to-pay').click(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var type;
               
                if($('#data').prop("checked")){
                     type = $('#data').val();
                }else if($('#airtime').prop("checked")){
                    type = $('#airtime').val();
                }

                const email = $('#email').val();
                
                const airtime = $('#airtime').val();
                const data = JSON.stringify(convertToJson());
                if (validateEmail(email) && type !== undefined || null) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('payment.checkout') }}",
                        dataType: 'JSON',
                        data: {
                            'email': email,
                            'type': type,
                            'data': data
                        },
                        success: function(payout_link) {
                            console.log(payout_link);
                            window.location = payout_link;                

                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                } else {
                        Swal.fire({
                                title:"Invalid email or service type!",
                                icon: "error",
                                button:"close"
                            }
                    )
                }
            });
        });

        function displayHTMLTable(results) {
            var table = "<table class='table table-bordered table-hover' id='tblData' style='width:100%; margin:0 auto;'>";
            var data = results.data;
            for (i = 0; i < data.length; i++) {
                table += "<tr>";
                var row = data[i];
                var cells = row.join(",").split(",");
                for (j = 0; j < cells.length; j++) {
                    table += "<td>";
                    table += cells[j];
                    table += "</th>";
                }
                table += "</tr>";
            }
            table += "</table>";
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
            const res =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"
        integrity="sha512-SGWgwwRA8xZgEoKiex3UubkSkV1zSE1BS6O4pXcaxcNtUlQsOmOmhVnDwIvqGRfEmuz83tIGL13cXMZn6upPyg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <div class="overlay"></div>
</body>


</html>
