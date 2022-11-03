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
        a{
            text-decoration:none !important;
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