<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mega Bulk Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href= {{ asset("hostza-master/img/favicon.png") }}>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href= {{ asset("hostza-master/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/owl.carousel.min.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/magnific-popup.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/themify-icons.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/nice-select.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/flaticon.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/gijgo.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/animate.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/slicknav.css") }}>
    <link rel="stylesheet" href= {{ asset("hostza-master/css/style.css") }}>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!--Jquery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.5/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    
    body{
        text-align:center;
    }

        a{
            text-decoration:none !important;
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

        #navigation li a{
            letter-spacing: 6px;
            margin-right: 15px;
        }

    </style>

</head>