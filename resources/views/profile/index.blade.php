@extends('layouts.master_frontend')
@section('title')
Profile
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
                                {{-- text removed --}}
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-four-messages-tab">
                                {{-- Text Removed --}}
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-four-settings-tab">
                                {{-- text removed --}}
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
                        <div style="width: 100%; padding-bottom:20px">
                            <h5 class="card-title"><i class="fa fa-briefcase"></i> Recent Work & Portfolio </h5>
                            <a href="#modal_add_portfolio" data-toggle="modal" data-target="#modal_add_portfolio"
                                data-backdrop="static" data-keyboard="false"
                                class="btn bg-gradient-secondary btn-sm float-right">
                                <i class="fas fa-plus"></i> Add Portfolio
                            </a>

                            <br /><br />

                        </div>


                        <div class="" style="height: 400px; overflow-x: hidden; overflow-y: auto;">

                            <div class="row">

                                @foreach ($user_portfolio as $portfolio)

                                {{-- <div class="col-md-6">

                                    <div style="padding-bottom: 20px">

                                        <div class="media">
                                            <a href="" class="" data-toggle="modal" data-target=".video">
                                                <img class="mr-3" src="/{{$portfolio->default_thumb_url}}"
                                                    alt="Generic placeholder image" style="width:100px" class="rounded">
                                            </a>
                                            <div class="media-body">

                                                <h6><a href="" class="" data-toggle="modal"
                                                        data-target=".video">{{$portfolio->portfolio_name}} </a></h6>
                                                <p class="mt-0" style="font-size:16px">{{count($portfolio->files)}}
                                                    files
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div> --}}



                                <div class="col-md-4">
                                    {{-- <a href="#modal-xl" data-toggle="modal" data-target="#modal-xl"
                                        data-portfolio_id="{{$portfolio->id}}" id=""> --}}

                                        <a href="" class="portfolio_view" data-portfolio_id="{{$portfolio->id}}">
                                            <div style="margin-bottom: 20px;">
                                                <div class="thumb_container"
                                                    style="height:170px; overflow:hidden; width:100%">
                                                    <img src="/{{$portfolio->default_thumb_url}}"
                                                        alt="{{$portfolio->portfolio_name}}" style="max-width:100%; 
                                             @if (strpos($portfolio->default_thumb_type, 'image') !== false)
                    
                                            @else
                                                filter: blur(4px);
                                                -webkit-filter: blur(4px);
                                            @endif
                                            ">
                                                    <div class="content">
                                                        <div class="div_text">

                                                            <?php 
                                                    if (strpos($portfolio->default_thumb_type, 'video') !== false) {
                                                        $icon = 'play';
                                                    }elseif (strpos($portfolio->default_thumb_type, 'audio') !== false) {
                                                        $icon = 'volume-up';
                                                    }elseif (strpos($portfolio->default_thumb_type, 'image') !== false) {
                                                        $icon = 'camera';
                                                    }else{
                                                        $icon = 'file-alt';
                                                    }

                                                 ?>

                                                            <p style="margin-bottom: 0px; font-size:18px"><i
                                                                    class="fas fa-{{$icon}}"></i></p>
                                                            <p style="margin-bottom: 0px; margin-bottom:0px">
                                                                {{$portfolio->portfolio_name}}</p>
                                                            <p style="font-size: 12px">({{count($portfolio->files)}} {{
                                                                count($portfolio->files) > 1 ? "files" : "file"}})</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                                {{-- <div class="col-md-4">

                                    <img src="images/user_profile_bgs/back4.jpg" style="width: 100%">
                                    {{$portfolio->portfolio_name}}
                                </div> --}}
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">


                    <div class="card-body">

                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Education & Work </h5><br /><br />

                        <div class="col-md-12">
                            <div class="timeline">
                                <div class="time-label">
                                    <span class="bg-grey">Education</span>
                                    <a href="#modal_add_education" data-toggle="modal"
                                        data-target="#modal_add_education" data-backdrop="static" data-keyboard="false"
                                        class="btn bg-gradient-secondary btn-sm float-right">
                                        <i class="fas fa-plus"></i> Add Education
                                    </a>
                                </div>

                                @foreach($user_educations as $education)
                                <div>
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="timeline-item">

                                        <div class="timeline-body">
                                            <p>{{\Carbon\Carbon::parse($education->start_date)->format('M Y')}} - {{
                                                \Carbon\Carbon::parse($education->end_date)->format('M Y')}} </p>

                                            <h5>{{$education->institute_name}}</h5>
                                            <a href="">({{$education->education_level_name}})
                                                {{$education->course_name}} </a>
                                            <p>{{$education->description}}</p>

                                        </div>

                                    </div>
                                </div>

                                @endforeach


                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="timeline">

                                <div class="time-label">
                                    <span class="bg-grey">Work Experience</span>
                                    <a href="#modal_add_experience" data-toggle="modal"
                                        data-target="#modal_add_experience" data-backdrop="static" data-keyboard="false"
                                        class="btn bg-gradient-secondary btn-sm float-right">
                                        <i class="fas fa-plus"></i> Add Experience
                                    </a>
                                </div>

                                @foreach($user_work_experiences as $experience)

                                <div>
                                    <i class="fas fa-briefcase"></i>
                                    <div class="timeline-item">
                                        <div class="timeline-body">
                                            <p>{{\Carbon\Carbon::parse($experience->start_date)->format('M Y')}} -
                                                {{ $experience->current==1 ? "Current":
                                                \Carbon\Carbon::parse($experience->end_date)->format('M Y')}}
                                            </p>

                                            <h5>{{$experience->company_name}}</h5>
                                            <a href="">{{$experience->title}} </a>
                                            <p>{{$experience->role_description}}</p>

                                        </div>

                                    </div>
                                </div>

                                @endforeach




                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>


        <br />
        <br />
    </div>
</div>

<div class="modal fade" id="modal-portfolio-view">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="padding:10px">
                <h5 class="modal-title">View Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">

                    <div class="col-md-8">
                        <div class="tabbed_slideshow">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="portfolio_details"></div>

                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@include('modals.user_profile.modal_update_bio')
@include('modals.user_profile.modal_update_basic_details')
@include('modals.user_profile.modal_upload_profile_photo')
@include('modals.user_profile.modal_update_location')
@include('modals.user_profile.modal_update_industries')
@include('modals.user_profile.modal_add_skill')
@include('modals.user_profile.modal_add_education')
@include('modals.user_profile.modal_add_experience')
@include('modals.user_profile.modal_upload_portfolio')

@include('includes._footer')






@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" rel="stylesheet">
<link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet">

<style>
    .thumb_container {
        position: relative;
        max-width: 800px;
        /* Maximum width */
        margin: 0 auto;
        /* Center it */
    }

    .thumb_container .div_text {
        position: absolute;
        top: 20%;
        text-align: center;
        /* transform: translate(-50%, -50%); */
        color: #fff;
        text-align: center;
        width: 100%;
    }

    .thumb_container .content {
        position: absolute;
        /* Position the background text */
        bottom: 0;
        /* At the bottom. Use top:0 to append it to the top */
        background: rgb(0, 0, 0);
        /* Fallback color */
        background: rgba(0, 0, 0, 0.5);
        /* Black background with 0.5 opacity */
        color: #f1f1f1;
        /* Grey text *
        /* Full width */
        padding: 5px;
        /* Some padding */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

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
        background: url('{{url('/')}}/images/user_profile_bgs/back6.jpg') no-repeat top center;
        background-size: 100%;
        padding: 50px 0;
        margin: 0
    }

    .moveall,
    .removeall {
        display: none !important
    }

    .portfolio_details_table td,
    .portfolio_details_table th {
        padding: 5px
    }

    *::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    *::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    *::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 1000px;
    }

    /* Handle on hover */
    *::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    #style-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }
</style>

@endsection


@section('js-scripts')
<script src="/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="/dist/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
{{-- <script src="/dist/css/jquery-ui.min.js"></script> --}}



<script>
    Dropzone.autoDiscover = false;
    $(function () {




    $('.portfolio_view').click(function(e){
        e.preventDefault();

        

        $('.tabbed_slideshow').html('<p><i class="fas fa-spinner fa-spin"></i> Loading please wait...</p>')
        $('.portfolio_details').html('');
        
       var portfolio_id= $(this).attr("data-portfolio_id");

       $.ajax({
                type:'GET',
                url:'/portfolio/view_portfolio',
				data:{'portfolio_id':portfolio_id},
                success:function(data){


                // var portfolio_details='<h4>'+data.portfolio_details.portfolio_name+'</h4>'; 
                // portfolio_details+='<p>'+data.portfolio_details.portfolio_description+'</p>';
                // portfolio_details+='<hr/>';
                // portfolio_details+='<p><b>Portfolio Link:</b/><br/>'

                // portfolio_details+='<a target="_blank" href="'+data.portfolio_details.portfolio_url+'"><i class="fas fa-link"></i> Visit Link';

                // portfolio_details+='</a></p>';


                var portfolio_details='<table class="table table-striped table-bordered portfolio_details_table">';
                    portfolio_details+='<body>';
                    portfolio_details+='<tr><th>Portfolio Title</th></tr>';
                    portfolio_details+='<tr><td>'+data.portfolio_details.portfolio_name+'</td></tr>';
                    portfolio_details+='<tr><th>Description</th></tr>';
                    portfolio_details+='<tr><td>'+data.portfolio_details.portfolio_description+'</td></tr>';
                    portfolio_details+='<tr><th>Portfolio Link</th></tr>';
                    portfolio_details+='<tr><td><a target="_blank" href="'+data.portfolio_details.portfolio_url+'"><i class="fas fa-link"></i> Visit Link</a></td></tr>'; 
                    portfolio_details+='<tr><th>Total Files</th></tr>';
                    portfolio_details+='<tr><td>'+data.portfolio_files.length+'</td></tr>';
                    portfolio_details+='</body>';
                    portfolio_details+='</table>';
                
    
        

                 $('.portfolio_details').html(portfolio_details);

                   var tab='<div class="card card-tabs">';
                        tab+='<div class="card-body">';
                        tab+='<div class="tab-content" id="custom-tabs-three-tabContent">';

                        var p_count=1
                        $.each(data.portfolio_files, function(key,value) {

                            var active_css ="";

                            if(key==0){
                                active_css ='active';
                            }

                            tab+='<div class="tab-pane fade show '+active_css+'" id="custom-tabs-three-'+key+'" role="tabpanel" aria-labelledby="custom-tabs-three-'+key+'-tab">'
                            
                              if(value.portfolio_type.indexOf("image") != -1){
                                tab+='<img src="/'+value.portfolio_upload+'" style="width:100%">';
                              }else if (value.portfolio_type.indexOf("video") != -1) {
                                tab+='<video width="100%" height="400" controls>';
                                tab+='<source src="/'+value.portfolio_upload+'">';
                                tab+='Your browser does not support the video tag.';
                                tab+='</video>';
                             }else if (value.portfolio_type.indexOf("audio") != -1) {
                                tab+='<audio controls width="100%">';
                                tab+='<source src="'+value.portfolio_upload+'">';
                                tab+='Your browser does not support the audio element';
                                tab+='</audio>';
                            
                             }else{
                                tab+='<a target="_blank" href="/'+value.portfolio_upload+'" class="btn btn-app" style="height:auto; width:100%"> <i class="fas fa-file" style="font-size:80px"></i> <span style="font-size:16px">Download File</span></a>'
                             }

                                var file_no=key+1;
                            
                                tab+='<p>File: '+file_no+' of '+ data.portfolio_files.length+'</p>';

                            tab+='</div>';


                        });
                           
                               

                            tab+='</div>';
                        tab+='</div>';


                        tab+='<div class="card-header p-0 pt-1 border-bottom-0">';
                           tab+='<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">';


                                    $.each(data.portfolio_files, function(key,value) {

                                        var active_css_tab ="";
                                        
                                        if(key==0){
                                             active_css_tab ='active';
                                        }
                                        tab+='<li class="nav-item">'
                                             tab+='<a class="nav-link '+active_css_tab+'" id="custom-tabs-three-'+key+'-tab" data-toggle="pill" href="#custom-tabs-three-'+key+'" role="tab" aria-controls="custom-tabs-three-'+key+'" aria-selected="true"><i class="fas fa-circle" style="font-size: 18px;"></i>';
                                        tab+='</a></li>';
                                    });
                                
                           tab+='</ul>';
                        tab+='</div>';

                    tab+='</div>';

                   $('.tabbed_slideshow').html(tab)
					// var $dropdown = $("#produce_subtype");
					// $($dropdown)[0].options.length = 0;
					// $dropdown.append($("<option />").text('--none--'));

					// $.each(data, function(index, element) {
					// 	$dropdown.append($("<option />").val(element.id).text(element.produce_sub_type_name));
					// });

                },
                error:function(e){}
            });

       $('#modal-portfolio-view').modal({
            backdrop: 'static',
            keyboard: false
        });
      
    });


        var uploaded_files=[]

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

        $("#current_check").on("click", function(){
            if(this.checked) {
                $('.exp_end_date_cover').hide();
            } else {
               $('.exp_end_date_cover').show();
            }
        }); 


            $("#dropzone_file").dropzone({
                //url: 'urlForDropzone1.php', 
                //acceptedFiles: 'application/pdf',
             // addRemoveLinks: true,

                 clickable: true,
                 dictDefaultMessage: "Click here to upload files or Drag and drop files here...",
                init: function(){
                    this.on("addedfile", function(file) { 
                   
                    }),
                   // this.on("removedfile", function(file) { new_file_removed(file); });
                    this.on("success", function(file,response) {
                        uploaded_files.push({
                            file:response,
                            type:file.type
                        })

                        $('.portfolio_file').val(JSON.stringify(uploaded_files))

                    })
                }
            });


           


       //var dropzone = new Dropzone("div.my-dropzone", { url: "/file/post" });


    // var myNewdDropzone = new Dropzone("#my-great-dropzone",  {
    //     url: "my-ajax.php",
    //     method: "POST",
    //     addRemoveLinks: false,
    //     clickable: true,
    //     previewTemplate: document.querySelector('#preview-template').innerHTML,
    //     init : function() {
    //         this.on("addedfile", function(file) { new_file_added(file); });
    //         this.on("thumbnail", function(file,fileurl) { new_thumbnail_added(file); });
    //         this.on("removedfile", function(file) { new_file_removed(file); });
    //         this.on("totaluploadprogress", function(progress) { display_progress(progress); });
    //         this.on("queuecomplete", function() { all_files_uploaded(); });
    //         //this.on("processing", function(file) { new_file_processed(file); });
    //     }
    // });

        // Dropzone.options.myGreatDropzone = { // camelized version of the `id`
           
           
        //     paramName: "file", // The name that will be used to transfer the file
        //     maxFilesize: 2, // MB
        //     addRemoveLinks : true,
            
        //     accept: function(file, done) {
        //         if (file.name == "justinbieber.jpg") {
        //             done("Naha, you don't.");
        //         }
        //         else { done(); }
        //     },

        //     error: function(response){
        //         alert(response.xhr.responseText);
        //     }
        // };
                
    });
</script>


@endsection