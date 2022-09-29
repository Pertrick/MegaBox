@extends('layouts.navbar')

@section('content')

    <head>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (session('status'))
            <script>
                swal("{{ session('status') }}");
            </script>
        @endif
    </head>

    <body>
    
        <div class="slider_area">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9">
                            <div class="slider_text text-center">
                                {{-- <p>The Best Domain & Hosting Provider In The Area</p> --}}
                                {{-- <p id="output"></p> --}}

                                <h3>Upload a file to Preview</h3>
                                <div class="find_dowmain">
                                    <form action="{{ url('prev') }}" method="post" class="find_dowmain_form"
                                        enctype="multipart/form-data" >
                                        @csrf
                                        <input type="file" name="file" placeholder="upload your SV file">
                                        <button type="submit">Preview</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->

        @include('layouts.footer')

        {{-- <script>
        onchange="loadFile(event)"
            var loadFile = function(event) {

                var output = document.getElementById('output')
                output = URL.createObjectURL(event.target.files[0])
            };
        </script> --}}
    </body>
@endsection
