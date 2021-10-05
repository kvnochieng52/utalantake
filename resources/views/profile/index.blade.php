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
                    <div class="card-body box-profile" style="padding-bottom: 5px">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Kevin Ochieng</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-unstyled list-referrals">
                            <li>
                                <p style="margin-bottom:5px"><span class="value"><b>25%</b></span><span
                                        class="text-muted float-right">Complete | <a href="" data-toggle="modal"
                                            data-target=".profile-complete"><b>(Check here)</b></a>
                                    </span></p>
                                <div class="progress progress-xs progress-transparent custom-color-yellow">
                                    <div class="progress-bar" data-transitiongoal="25" style="width: 25%;"
                                        aria-valuenow="25">
                                    </div>
                                </div>
                                <p style="color: red ;margin-bottom:5px;margin-top:8px">
                                    <b>
                                        <i class="fas fa-info-circle"></i>
                                        Complete
                                        Profile to be listed
                                    </b>
                                </p>
                            </li>
                        </ul>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <a href="" style="color:#5f5f5f"><b> <i class="far fa-user-circle"></i> View Profile</b>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="" style="color:#5f5f5f"><b> <i class="far fa-clipboard"></i> Tasks/Jobs</b>
                                </a>
                                <a class="float-right">Post New</a>
                            </li>
                            {{-- <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li> --}}
                        </ul>

                        {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                    </div>
                    <!-- /.card-body -->
                </div>




                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Opportunties for you</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">View Opportunties <i class="fas fa-arrow-circle-right"></i></a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recently Added Opportunities</h3>

                        {{-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Software Developer
                                        <span class="badge badge-warning float-right">open</span></a>
                                    <span class="product-description">
                                        By: Safaricom
                                    </span>
                                </div>
                            </li>

                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Plumbing Job
                                        <span class="badge badge-danger float-right">Closed</span></a>
                                    <span class="product-description">
                                        By: Roy Willis
                                    </span>
                                </div>
                            </li>

                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Footballer Required
                                        <span class="badge badge-warning float-right">open</span></a>
                                    <span class="product-description">
                                        By: Safaricom
                                    </span>
                                </div>
                            </li>

                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">TV Set Electrician
                                        <span class="badge badge-warning float-right">open</span></a>
                                    <span class="product-description">
                                        By: Pius Malala
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->

                            <!-- /.item -->

                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Opportunities</a>
                    </div>
                    <!-- /.card-footer -->
                </div>









            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="userprofile social" style="padding-top: 20px">
                            <div class="userpic"> <img src="/dist/img/user4-128x128.jpg" alt="" class="userpicimg">
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


                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                    href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                    aria-selected="true">Basic Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                    aria-selected="false">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-four-messages" role="tab"
                                    aria-controls="custom-tabs-four-messages" aria-selected="false">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                                    href="#custom-tabs-four-settings" role="tab"
                                    aria-controls="custom-tabs-four-settings" aria-selected="false">Work Experience &
                                    Education</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">


                                <div class="row">

                                    <div class="col-md-6">

                                        <h5 class="card-title"><i class="fa fa-file"></i> About Kevin Ochieng</h5><br />

                                        <p>I'm speaking with myself, number one, because I have a very good brain and
                                            I've
                                            said
                                            a lot of
                                            things. I write the best placeholder text, and I'm the biggest developer on
                                            the
                                            web
                                            card she
                                            has is the Lorem card. <a href="" class="" data-toggle="modal"
                                                data-target=".about">More
                                                Details</a>
                                        </p>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <small class="text-muted"><strong> <i class="fa fa-map"></i>
                                                        Location:</strong>
                                                </small>
                                                <p>Nairobi, Kenya</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="https://www.youtube.com/watch?v=D0a0aNqTehM">
                                            <div class="embed-responsive embed-responsive-16by9"
                                                style="border-radius:20px">
                                                <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/Ldge7ibXZR4?rel=0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                purus
                                ut ligula
                                tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                Curae;
                                Maecenas
                                sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus
                                ligula
                                eu lectus.
                                Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod
                                pellentesque diam.
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-four-messages-tab">
                                Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                volutpat augue id mi
                                placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit
                                sem, ac
                                tristique
                                nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit
                                condimentum, mattis urna
                                a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam
                                vulputate,
                                eros non luctus
                                efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
                                Nulla
                                lacinia, ex
                                vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel
                                metus.
                                Curabitur eget
                                sem eu risus tincidunt eleifend ac ornare magna.
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-four-settings-tab">
                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                tempus
                                turpis ac, ornare
                                sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate.
                                Morbi
                                euismod molestie
                                tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum
                                placerat
                                urna nec
                                pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc
                                et
                                felis ut nisl
                                commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex
                                sit
                                amet facilisis.
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">

                    </div>
                    <!-- /.card -->


                </div>
                <div class="card">


                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Industries & Skills </h5><br />

                        <p>Let us know what you are talented or passionate about (Click on a skill for more details)</p>

                        <div class="row">
                            <div class="col-md-12" style="padding-bottom: 10px">
                                <hr />
                                <b>Information and Communication Technology</b>
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title"> Laravel &amp; PHP<small class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title">Laravel &amp; PHP<small class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title">Laravel &amp; PHP<small class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title"> Laravel &amp; PHP<small class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title"> Laravel &amp; PHP<small class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>

                        </div>


                    </div>


                </div>


                <div class="card">


                    <div class="card-body">

                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Recent Work & Portfolio </h5><br /><br />

                        <div class="row">

                            <div class="col-md-6">

                                <div class="media">
                                    <a href="" class="" data-toggle="modal" data-target=".video">
                                        <img class="mr-3" src="/images/video3.jpg" alt="Generic placeholder image"
                                            style="width:120px">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0" style="font-size:16px">6 Videos</h5>
                                        <a href="" class="" data-toggle="modal" data-target=".video">Selfie Track
                                            Title goes here </a><br>
                                        <a href="">Another Video title goes here</a><br>
                                        <a href="">Another Video goes here</a>
                                    </div>
                                </div>



                            </div>

                            <div class="col-md-6">
                                <div class="media">
                                    <a href="" class="" data-toggle="modal" data-target=".image">
                                        <img class="mr-3" src="/images/image2.jpg" alt="Generic placeholder image"
                                            style="width:120px">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0" style="font-size:16px">3 Images</h5>
                                        <a href="" class="" data-toggle="modal" data-target=".image">Bead work 1 title
                                            here</a><br>
                                        <a href="">Photography 1 image</a><br>
                                        <a href="">Another Video goes here</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="media">
                                    <img class="mr-3" src="/images/audio.jpg" alt="Generic placeholder image"
                                        style="width:120px">
                                    <div class="media-body">
                                        <h5 class="mt-0" style="font-size:16px">4 Audio</h5>
                                        <a href="">Selfie Track Title goes here</a><br>
                                        <a href="">Another Video title goes here</a><br>
                                        <a href="">Another Video goes here</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="media">
                                    <img class="mr-3" src="/images/file.jpg" alt="Generic placeholder image"
                                        style="width:120px">
                                    <div class="media-body">
                                        <h5 class="mt-0" style="font-size:16px">4 Files</h5>
                                        <a href="">Selfie Track Title goes here</a><br>
                                        <a href="">Another Video title goes here</a><br>
                                        <a href="">Another Video goes here</a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="card">


                    <div class="card-body">

                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Education & Work </h5><br /><br />

                        <div class="col-md-12">
                            <!-- The time line -->
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-grey">Education</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> --}}

                                        <div class="timeline-body">
                                            <p>2014-2017</p>

                                            <h5>Mt Kenya University</h5>
                                            <a href="javascript:void(0);">Bachelors Information Studies </a>
                                            <p>I'm speaking with myself, number one, because I have a very good brain
                                                and I've said a lot of things. I write the best
                                                placeholder text, and I'm the biggest developer on the web card she has
                                                is the Lorem card.</p>

                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> --}}

                                        <div class="timeline-body">
                                            <p>2014-2017</p>

                                            <h5>Mt Kenya University</h5>
                                            <a href="javascript:void(0);">Bachelors Information Studies </a>
                                            <p>I'm speaking with myself, number one, because I have a very good brain
                                                and I've said a lot of things. I write the best
                                                placeholder text, and I'm the biggest developer on the web card she has
                                                is the Lorem card.</p>

                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> --}}

                                        <div class="timeline-body">
                                            <p>2014-2017</p>

                                            <h5>Mt Kenya University</h5>
                                            <a href="javascript:void(0);">Bachelors Information Studies </a>


                                        </div>

                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                            </div>
                        </div>


                        <div class="col-md-12">
                            <!-- The time line -->
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-grey">Work Experience</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-briefcase"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> --}}

                                        <div class="timeline-body">
                                            <p>2014-2017</p>

                                            <h5>Crown Berger Kenya Limited</h5>
                                            <a href="javascript:void(0);">Software Developer </a>
                                            <p>I'm speaking with myself, number one, because I have a very good brain
                                                and I've said a lot of things. I write the best
                                                placeholder text, and I'm the biggest developer on the web card she has
                                                is the Lorem card.</p>

                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-briefcase"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> --}}

                                        <div class="timeline-body">
                                            <p>2014-2017</p>

                                            <h5>Safaricom</h5>
                                            <a href="javascript:void(0);">Applications Developer </a>
                                            <p>I'm speaking with myself, number one, because I have a very good brain
                                                and I've said a lot of things. I write the best
                                                placeholder text, and I'm the biggest developer on the web card she has
                                                is the Lorem card.</p>

                                        </div>

                                    </div>
                                </div>


                                <!-- END timeline item -->
                                <!-- timeline item -->
                            </div>
                        </div>


                    </div>
                </div>


            </div>

            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        Side bar 2
                    </div>
                </div>
            </div> --}}
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
    .feeds_widget {
        padding: 12px 12px;
        border: 1px solid #f0f0f0;
        margin: 4px 0;
        background-color: #f1f0ef;
        border-radius: 1000px;
    }

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
        background: url('{{url('/')}}/images/user_profile_bgs/back6.jpg') no-repeat top center;
        background-size: 100%;
        padding: 50px 0;
        margin: 0
    }
</style>

@endsection


@section('js-scripts')

@endsection