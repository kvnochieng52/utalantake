@extends('layouts.master_frontend')
@section('title')
Terms and Conditions
@endsection

@section('content')
<!-- Navbar -->
@include('includes._main_navigation')
{{-- <div class="content-wrapper"> --}}
    <div class="start_up_cover">
        <div class="container">
            <br />
            <br />
            <div class="row">
                <div class="col-md-12">
                    <h4>Contact Us</h4>
                    <p>To get more information on our work and services and how you can be part? Feel free to contact us
                        here and our staff
                        will happily be at your service.</p>

                    <h4>Email:</h4>

                    <p>Info@utalanta.com</p>

                    <h4>Telephone</h4>

                    +254713295853
                </div>
            </div>
            <br />
            <br />

        </div>

        @include('includes._footer')


    </div>

    <!-- /.navbar -->

    @endsection


    @section('css-scripts')
    <link href="dist/css/custom.css" rel="stylesheet">
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
    <style>
        h4,
        p {
            display: block;
            width: 100%;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }



        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }
    </style>

    @endsection


    @section('js-scripts')
    {{-- <script src="{{ asset('js/jquery-ui.min.js')}}"></script> --}}
    <script src="https://oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <script>

    </script>

    @endsection