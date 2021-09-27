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


                    <p class="lead">Regsiter Account</p>
                    <h6>Please Register your free Utalanta Account.</h6>

                    {!!
                    Form::open(['action'=>'AuthController@regsiter_account','method'=>'POST','class'=>'form
                    candidate_form',
                    'enctype'=>'multipart/form-data'])
                    !!}

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('first_name', 'First Name',['class'=>'control-label'])}}
                                {{Form::text('first_name',null,['class'=>'form-control', 'placeholder'=>'Enter your First Name', 'autofocus'=>'true'])}}
                                @error('first_name')
                                <span class="error_submission" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                {{Form::label('last_name', 'Last Name',['class'=>'control-label'])}}
                                {{Form::text('last_name',null,['class'=>'form-control', 'placeholder'=>'Enter your Last Name'])}}
                                @error('last_name')
                                <span class="error_submission" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('email', 'Email Address',['class'=>'control-label'])}}
                                {{Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Enter your Email Address'])}}
                                @error('email')
                                <span class="error_submission" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('telephone', 'Telephone No.',['class'=>'control-label'])}}
                                {{Form::text('telephone',null,['class'=>'form-control', 'placeholder'=>'Enter your telephone '])}}
                                @error('telephone')
                                <span class="error_submission" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-lg-12">

                            <div class="form-group">
                                {{Form::label('password', 'Password.',['class'=>'control-label'])}}
                                {{Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter your password '])}}
                                @error('password')
                                <span class="error_submission" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-warning btn-block"><strong>REGISTER</strong></button>

                    {!! Form::close() !!}
                    <div class="bottom">
                        <br>
                        <p> <span class="helper-text">Have an account already? <a href="/login">

                                    <strong> Login </strong></a></span></p>




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