@extends('layouts.master_frontend')
@section('title')
Post a Task or Job
@endsection

@section('content')

@include('includes._main_navigation')

<div style="background-color:#f5f7f6; padding-top:20px">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                @include('profile.includes._profile_sidebar')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Post a Task or Job </h5>
                    </div>
                    <div class="card-body">
                        @include('notices')
                        {!!
                        Form::open(['action'=>'JobController@start_process','method'=>'GET','class'=>'form',
                        'enctype'=>'multipart/form-data'])
                        !!}

                        <div class="row">
                            <div class="col-md-12">
                                <h6>Are you Posting a Job or Task ? (Please Select)</h6>
                            </div>

                            <div class="col-md-6">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="task" name="post_type" value="{{$TASK_CODE}}"
                                        class="post_type">
                                    <label for="task">
                                        <p style="margin-bottom:0px"> Posting a Task</p>
                                        <p style="font-size: 14px; font-weight:normal !important; margin-bottom:0px">
                                            Short term piece of work to be undertaken e.g. when you need a Plumber,
                                            Electrician, Saloonist, Footballer, Artist/mc for your wedding etc.
                                        </p>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="job" name="post_type" value="{{$JOB_CODE}}"
                                        class="post_type">
                                    <label for="job">
                                        <p style="margin-bottom:0px">Posting a Job</p>
                                        <p style="font-size: 14px; font-weight:normal !important;">
                                            Post permanent/contract/intern based Jobs. e.g. When you need to post a
                                            vacancy openining in your company or oganization.
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="row" style="padding-top: 20px">

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block bg-gradient-secondary">
                                    <b>CONTINUE</b></button>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('css-scripts')

@endsection



@section('js-scripts')

@endsection