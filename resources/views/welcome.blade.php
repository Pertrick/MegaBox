
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

     <!-- prising_area_start -->
     <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
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
                        <h3>Data</h3>
                        <p class="prising_text">Purchase your Data in Bulk at a discounted price simply and easy</p>
                        <p class="prise">Start from as low as<span>100 mb</span></p>
                        <a href="{{route('data')}}" class="boxed_btn_green2">See more</a>
                    </div>
                </div>
              
             
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
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
                        {{-- <p><strong>WHAT ARE YOU BUYING FROM US?</strong></p>
                        <div id="radio" class="mb-5">
                            <input type="radio" id="data" name="type" value="data" class="pe-5 pl-5">
                            <label for="data" class="pr-5">DATA</label>
                            <input type="radio" id="airtime" name="type" value="airtime" class="pe-5">
                            <label for="airtime">AIRTIME</label>
                        </div> --}}
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
