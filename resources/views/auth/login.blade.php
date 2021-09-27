@extends('layouts.master_frontend')
@section('title')
Register Account
@endsection

@section('content')
<!-- Navbar -->
@include('includes._main_navigation')
{{-- <div class="content-wrapper"> --}}
<div class="start_up_cover">
    <div class="container">
        <div class="row">

            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">


                <div class="header">
                    <br />
                    <p class="lead">Login to your Account</p>
                    <h6>Enter your Email Address to login.</h6>
                    @include('includes.auth._login_form')

                    <div class="bottom">
                        <br>
                        <p> <span class="helper-text">Dont Have Account? <a href="/register">

                                    <strong> Register </strong></a></span></p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3">
            </div>
        </div>

        <div class="container">

            <div class="footer"
                style="border-top: 1px solid #dee2e6; padding-top:20px; margin-top:15px; padding-bottom:50px">


                <div class="row">
                    <div class="col-lg-6">
                        <p>All Rights Reserved | Copyright 2020 © Utalanta.com</p>
                    </div>


                    <div class="col-lg-6">
                        <div class="float-right">
                            <a href="">About</a> &nbsp; <a href="">Privacy Statement</a> &nbsp; <a href="">Contact
                                Us</a>
                            &nbsp;&nbsp;
                            Powered By <a href="http://softtouchtechnologies.com/">Soft Touch Technologies.</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <div class=" modal fade" id="introVideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>


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

    @endsection






















    {{-- @extends('layouts.app')

@include('notices')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}