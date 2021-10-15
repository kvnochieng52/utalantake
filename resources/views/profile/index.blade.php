@extends('layouts.master_frontend')
@section('title')
Register Account
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
                @include('notices')
                <div class="card">
                    <div class="card-body p-0">
                        <div class="userprofile social" style="padding-top: 20px">

                            <div class="userpic">
                                <a href="#modal_upload_profile_photo" data-toggle="modal"
                                    data-target="#modal_upload_profile_photo" data-backdrop="static"
                                    data-keyboard="false">
                                    <img src="/{{$user_details->profile_photo !=null ? $user_details->profile_photo : 'images/no-image.png' }}"
                                        alt="{{$user_details->first_name}} {{$user_details->last_name}} profile picture"
                                        class="userpicimg">

                                    <span style="position: absolute; margin-left:-15px"><i
                                            class="fas fa-edit"></i></span>
                                </a>
                            </div>

                            <h5 class="username"> {{$user_details->first_name}} {{$user_details->last_name}} <a
                                    href="#modal_update_basic_details" data-toggle="modal"
                                    data-target="#modal_update_basic_details" data-backdrop="static"
                                    data-keyboard="false">
                                    <i class="fas fa-edit"></i></a></h5>
                            <p class="text-center" style="font-size: 16px">@if($user_details->title
                                !=null){{$user_details->title}} <a href="#modal_update_bio" data-toggle="modal"
                                    data-target="#modal_update_bio" data-backdrop="static" data-keyboard="false">

                                    <i class="fas fa-edit"></i> </a>@else
                                <a href="#modal_update_bio" data-toggle="modal" data-target="#modal_update_bio"
                                    data-backdrop="static" data-keyboard="false" style="color:#f15c5c">
                                    <i class="fas fa-info-circle"></i>
                                    Update your Title <i class="fas fa-edit"></i> </a>
                                @endif
                            </p>
                            <div class="socials text-center">

                                {{-- <a href="" data-toggle="modal" data-target=".call"
                                    class="btn btn-btn btn-secondary">
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

                                        <h5 class="card-title" style="width: 100%"><i class="fa fa-file"></i> About
                                            {{$user_details->first_name}} {{$user_details->last_name}}


                                            <a href="#modal_update_bio" data-toggle="modal"
                                                data-target="#modal_update_bio" data-backdrop="static"
                                                data-keyboard="false" class="btn btn-link" style="float: right"><i
                                                    class="fas fa-edit"></i> Edit Bio</a>
                                        </h5>

                                        <div style="clear: both"></div>


                                        @if($user_details->bio != null)
                                        <p>{{$user_details->bio}} <a href="" class="" data-toggle="modal"
                                                data-target=".about">More
                                                Details</a>
                                        </p>

                                        @else

                                        <a href="#modal_update_bio" data-toggle="modal" data-target="#modal_update_bio"
                                            data-backdrop="static" data-keyboard="false">
                                            <p style="color:#f15c5c"><span><i class="fas fa-info-circle"></i> </span>
                                                Update
                                                your Bio to let others
                                                know
                                                you better. Click on the Edit Bio to proceed</p>
                                        </a>
                                        @endif


                                        <div class="row">
                                            <div class="col-md-12">

                                                <small class="text-muted"><strong> <i class="fa fa-map"></i>
                                                        Location:</strong>
                                                </small>

                                                <a href="#modal_update_location" data-toggle="modal"
                                                    data-target="#modal_update_location" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-link"
                                                    style="float: right; font-size:14px">

                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                    Location</a>


                                                <div style="clear: both"></div>
                                                @if($user_details->country_id != null)
                                                <p>{{$user_details->county_name}}, {{$user_details->country_name}}</p>
                                                @else
                                                <a href="#modal_update_location" data-toggle="modal"
                                                    data-target="#modal_update_location" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-link" style="padding-left:0px">
                                                    <p style="color:#f15c5c"><span><i class="fas fa-info-circle"></i>
                                                        </span>Update your Location</p>
                                                </a>
                                                @endif
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
                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Industries & Skills </h5>



                        <br />

                        <p>Let us know what you are talented or passionate about (Click on a skill for more details)</p>

                        <div class="row">



                            <div class="col-md-12" style="padding-bottom: 10px">
                                <a href="#modal_update_industries" data-toggle="modal"
                                    data-target="#modal_update_industries" data-backdrop="static" data-keyboard="false"
                                    class="btn bg-gradient-secondary btn-sm" style="float: right">
                                    <i class="fas fa-edit"></i> Edit Industries</a>
                                <hr />
                                <b>
                                    @foreach($user_selected_industries as $industry)
                                    <span class="badge badge-info"> {{$industry}}</span>
                                    @endforeach


                                </b>
                                <hr />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <a href="#modal_add_skill" data-toggle="modal" data-target="#modal_add_skill"
                                    data-backdrop="static" data-keyboard="false"
                                    class="btn bg-gradient-secondary btn-sm" style="float: right">
                                    <i class="fas fa-plus"></i> Add New Skill</a>
                            </div>


                            @foreach($user_selected_skills as $skill)
                            <div class="col-md-6">
                                <a href="" class="" data-toggle="modal" data-target="#skill">
                                    <div class="feeds_widget">
                                        <h6 class="title"> {{$skill->selected_skill_name}}<small
                                                class="float-right text-muted">
                                                Read More

                                            </small>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                            @endforeach


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
                                    <span class="bg-grey">Education</span> <a href="#modal_add_education"
                                        data-toggle="modal" data-target="#modal_add_education" data-backdrop="static"
                                        data-keyboard="false" class="btn bg-gradient-secondary btn-sm"
                                        style="float: right">
                                        <i class="fas fa-plus"></i> Add Education</a>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="timeline-item">


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                        </h3> --}}

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


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                        </h3> --}}

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


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                        </h3> --}}

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


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                        </h3> --}}

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


                                        {{-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                        </h3> --}}

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

@include('modals.user_profile.modal_update_bio')
@include('modals.user_profile.modal_update_basic_details')
@include('modals.user_profile.modal_upload_profile_photo')
@include('modals.user_profile.modal_update_location')
@include('modals.user_profile.modal_update_industries')
@include('modals.user_profile.modal_add_skill')
@include('modals.user_profile.modal_add_education')

@include('includes._footer')






@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" rel="stylesheet">
<link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">

<style>
    .ui-autocomplete {
        z-index: 9999999 !important;
    }

    .feeds_widget {
        padding: 8px 20px;
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
        background: url('{{url('/')}}/images/user_profile_bgs/back8.jpg') no-repeat top center;
        background-size: 100%;
        padding: 50px 0;
        margin: 0
    }

    .moveall,
    .removeall {
        display: none !important
    }
</style>

@endsection


@section('js-scripts')
<script src="/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="/dist/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
{{-- <script src="/dist/css/jquery-ui.min.js"></script> --}}



<script>
    $(function () {

          $('.date_selector').datepicker({
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            format: "dd-mm-yyyy",
            yearRange: "-90:+00"
        })


        $('.select2').select2({
             theme: 'bootstrap4'
        })


        $('.duallistbox').bootstrapDualListbox()

				$( "#skill" ).autocomplete({
					delay: 0,
					source: '/skill/autocomplete_skills',
					
					select: function(e,selected) {
                        $('#selected_skill_id').val(selected.item.id)
						//var $item = selected.item;
						// counter=Math.floor(Math.random() * 1000000000);
						// searchvalid=selected.item.id;
						// searchvaltext=selected.item.value;      
					
					}
				
				});
    });
</script>


@endsection