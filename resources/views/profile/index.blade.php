@extends('layouts.master_frontend')
@section('title')
Register Account
@endsection

@section('content')
<!-- Navbar -->
@include('includes._main_navigation')
{{-- <div class="content-wrapper"> --}}

<div style="background-color:#f5f7f6; padding-top:20px">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-header" style="margin-bottom: 0px;">
                            <div class="body text-center">
                                <div class="profile-image"> <img src="http://127.0.0.1:8000/assets/img/albert.jpg"
                                        class="rounded-circle" alt="" style="width: 200px"> </div>
                                <div>
                                    <h4 class="m-b-0"><strong>Kevin</strong> Ochieng</h4>
                                    <span>Nairobi, Kenya</span>
                                    <hr />

                                    <ul class="list-unstyled list-referrals">
                                        <li>
                                            <p style="margin-bottom:5px"><span class="value">25%</span><span
                                                    class="text-muted float-right">Profile
                                                    Progress | <a href="" data-toggle="modal"
                                                        data-target=".profile-complete">Details</a>
                                                </span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-yellow">
                                                <div class="progress-bar" data-transitiongoal="25" style="width: 25%;"
                                                    aria-valuenow="25">
                                                </div>
                                            </div>
                                            <p style="color: red ;margin-bottom:5px;margin-top:8px"><i
                                                    class="icon-info"></i> Complete
                                                Profile to be listed</p>
                                        </li>
                                    </ul>

                                </div>
                                {{-- <div class="m-t-15">
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-secondary">Message</button>
                                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="userprofile social" style="padding-top: 20px">
                            <div class="userpic"> <img src="http://127.0.0.1:8000/assets/img/albert.jpg" alt=""
                                    class="userpicimg">
                            </div>
                            <h5 class="username"> Kevin Ochieng</h5>
                            <p class="text-center">Passionate Designer & Developer</p>
                            <div class="socials text-center">
                                {{-- <a href="" data-toggle="modal" data-target=".call" class="btn btn-btn btn-secondary">
                                    <i class="fa fa-envelope"></i> CONTACT KEVIN
                                </a>

                                <button type="button" class="btn btn-warning"><i class="fa fa-dashboard"></i> HIRE
                                    KEVIN</button> --}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        Side bar 2
                    </div>
                </div>
            </div>
        </div>


        <br />
        <br />
    </div>
</div>

@include('includes._footer')






@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">

<style>
    .userprofile {
        width: 100%;
        float: left;
        clear: both;
        margin: 40px auto
    }

    .userprofile .userpic {
        height: 100px;
        width: 100px;
        clear: both;
        margin: 0 auto;
        display: block;
        border-radius: 100%;
        box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        position: relative;
    }

    .userprofile .userpic .userpicimg {
        height: auto;
        width: 100%;
        border-radius: 100%;
    }

    .username {

        text-align: center;
    }

    .username+p {
        color: #607d8b;
        font-size: 13px;
        line-height: 15px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }



    .userprofile.small {
        width: auto;
        clear: both;
        margin: 0px auto;
    }

    .userprofile.small .userpic {
        height: 40px;
        width: 40px;
        margin: 0 10px 0 0;
        display: block;
        border-radius: 100%;
        box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
        position: relative;
        float: left;
    }

    .userprofile.small .textcontainer {
        float: left;
        max-width: 100px;
        padding: 0
    }

    .userprofile.small .userpic .userpicimg {
        min-height: 100%;
        width: 100%;
        border-radius: 100%;
    }

    .userprofile.small .username {
        font-weight: 400;
        font-size: 16px;
        line-height: 21px;
        color: #000000;
        margin: 0px;
        float: left;
        width: 100%;
    }

    .userprofile.small .username+p {
        color: #607d8b;
        font-size: 13px;
        float: left;
        width: 100%;
        margin: 0;
    }







    .userprofile.social {
        background: url('{{url('/')}}/images/user_profile_bgs/back7.jpg') no-repeat top center;
        background-size: 100%;
        padding: 50px 0;
        margin: 0
    }
</style>

@endsection


@section('js-scripts')

@endsection