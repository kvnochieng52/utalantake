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


                    <p class="lead">Select Free Account Type</p>
                    <h6>Select your Preffered Account type to help us customize your profile based on your pereferences.
                        Dont worry You can always change this later if wish.
                    </h6>

                    {!!
                    Form::open(['action'=>'AuthController@regsiter_account','method'=>'POST','class'=>'form
                    candidate_form',
                    'enctype'=>'multipart/form-data'])
                    !!}

                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="full_account" name="account_type" value="1">
                                <label for="full_account">
                                    <p style="margin-bottom:0px"> Full Access (Recommended)</p>
                                    <p style="font-size: 14px; font-weight:normal !important; margin-bottom:0px">Enables
                                        you to list your
                                        Skills, Passion and Talent, Post Tasks & Jobs & Receive Applications etc.
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="limited" name="account_type" value="2">
                                <label for="limited">
                                    <p style="margin-bottom:0px"> Limited Access</p>
                                    <p style="font-size: 14px; font-weight:normal !important;">Post Tasks & Jobs &
                                        Receive Applications from Experts
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>




                    <button type="submit" class="btn btn-warning btn-block"><strong>SUBMIT</strong></button>

                    {!! Form::close() !!}

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


    @endsection


    @section('css-scripts')
    <link href="/dist/css/custom.css" rel="stylesheet">

    @endsection


    @section('js-scripts')

    @endsection