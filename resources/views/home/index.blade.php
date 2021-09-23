@extends('layouts.master_frontend')
@section('title')
Welcome
@endsection

@section('content')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="../../index3.html" class="navbar-brand">
            <img src="/images/logo.png" alt="AdminLTE Logo" class="brand-image">

        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav main_menu">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Find Experts</a>
                </li>

                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Search Tasks/Jobs</a>
                </li>

            </ul>

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <li>

                <a href="" class="btn btn-block btn-warning"><b>REGISTER</b></a>
            </li>


        </ul>
    </div>
</nav>
{{-- <div class="content-wrapper"> --}}
<div class="start_up_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">


                <div class="header">
                    <br />
                    <p class="lead">Login to Your Account</p>

                    <div class="form-group">
                        <label for="signup-email" class="control-label">Email or Telephone</label>
                        <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email"
                            autofocus="">
                    </div>

                    <div class="form-group">
                        <label for="signup-email" class="control-label">Password</label>
                        <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email"
                            autofocus="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <br />
                <h3 style="font-size:26px">Where your Talent &amp; Skills Pays Off</h3>
                <h6>Utalanta links your Talent and skills with Opportunities from individuals or organizations. Also
                    find Tasks & Jobs that best match your skills </h6>
            </div>
        </div>
    </div>

</div>
{{-- </div> --}}


<!-- /.navbar -->

@endsection


@section('css-scripts')
<link href="dist/css/custom.css" rel="stylesheet">

@endsection


@section('js-scripts')
{{-- <script src="{{ asset('js/jquery-ui.min.js')}}"></script> --}}

<script>
    console.log("Hi theere");
</script>

@endsection