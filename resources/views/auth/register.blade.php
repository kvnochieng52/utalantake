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
                        details_form',
                        'enctype'=>'multipart/form-data'])
                        !!}

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{Form::label('first_name', 'First Name',['class'=>'control-label'])}}
                                    {{Form::text('first_name',null,['class'=>'form-control',
                                    'placeholder'=>'Enter your First Name',
                                    'autofocus'=>'true','required'=>'required'])}}
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
                                    {{Form::text('last_name',null,['class'=>'form-control',
                                    'placeholder'=>'Enter your Last Name','required'=>'required'])}}
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
                                    {{Form::email('email',null,['class'=>'form-control',
                                    'placeholder'=>'Enter your Email Address','required'=>'required'])}}
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
                                    {{Form::text('telephone',null,['class'=>'form-control',
                                    'placeholder'=>'Enter your telephone','required'=>'required'])}}
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
                                    {{Form::password('password',['class'=>'form-control',
                                    'placeholder'=>'Enter your password','required'=>'required'])}}
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
            @include('includes._footer')

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
        <link rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

        @endsection


        @section('js-scripts')
        <script src="https://oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

        <script>
            $(document).ready(function() {
           
               $('.details_form')
                .bootstrapValidator({
                    // Only disabled elements are excluded
                    // The invisible elements belonging to inactive tabs must be validated
                    excluded: [':disabled'],
                    feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                    },
                })
    
    
        });
    
        </script>

        @endsection