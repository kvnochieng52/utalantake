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
                    <br />

                    <p class="lead">Select Free Account Type</p>
                    <h6>Select your Preffered Account type to help us customize your profile based on your pereferences.
                        Dont worry You can always change this later if wish.
                    </h6>

                    {!!
                    Form::open(['action'=>'UserProfileController@select_acc_type_store','method'=>'POST','class'=>'form
                    candidate_form',
                    'enctype'=>'multipart/form-data'])
                    !!}

                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="full_account" name="account_type"
                                    value="{{$FULL_ACCESS_AC_TYPE}}" checked>
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
                                <input type="radio" id="limited" name="account_type"
                                    value="{{$LIMITED_ACCESS_AC_TYPE}}">
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


        <br />
        <br />

        @include('includes._footer')

    </div>




    @endsection


    @section('css-scripts')
    <link href="/dist/css/custom.css" rel="stylesheet">

    @endsection


    @section('js-scripts')

    @endsection