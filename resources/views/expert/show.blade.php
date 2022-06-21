@extends('layouts.master_frontend')
@section('title')
{{$user_profile_details->first_name}}
{{$user_profile_details->last_name}}
@endsection

@section('content')

@include('includes._main_navigation')

<div style="background-color:#f5f7f6; padding-top:20px">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                @include('notices')
                <div class="card">
                    <div class="card-body p-0">
                        <div class="userprofile social" style="padding-top: 20px">

                            <div class="userpic">
                                <a href="">
                                    <img src="/{{$user_profile_details->profile_photo !=null ? $user_profile_details->profile_photo : 'images/no-image.png' }}"
                                        alt="{{$user_profile_details->first_name}} {{$user_profile_details->last_name}} profile picture"
                                        class="userpicimg">
                                </a>
                            </div>

                            <h5 class="username"> {{$user_profile_details->first_name}}
                                {{$user_profile_details->last_name}}</h5>
                            <p class="text-center" style="font-size: 16px">{{$user_profile_details->title}} </p>
                            <div class="socials text-center">



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
                                            {{$user_profile_details->first_name}} {{$user_profile_details->last_name}}
                                        </h5>

                                        <div style="clear: both"></div>



                                        <p>{{$user_profile_details->bio}} <a href="" class="" data-toggle="modal"
                                                data-target=".about">More
                                                Details</a>
                                        </p>


                                        <div class="row">
                                            <div class="col-md-12">

                                                <small class="text-muted"><strong> <i class="fa fa-map"></i>
                                                        Location:</strong>
                                                </small>

                                                <p>{{$user_profile_details->county_name}},
                                                    {{$user_profile_details->country_name}}</p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <a
                                            href="https://www.youtube.com/watch?v={{!empty($user_details->intro_video) ? $user_details->intro_video : '6YYfsu0PDOk'}}">
                                            <div class="embed-responsive embed-responsive-16by9"
                                                style="border-radius:20px">
                                                <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/{{!empty($user_details->intro_video) ? $user_details->intro_video : '6YYfsu0PDOk'}}?rel=0"
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
                </div>


                <div class="card">


                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-briefcase"></i> Industries & Skills </h5>



                        <br />

                        <p>Let us know what you are talented or passionate about (Click on a skill for more details)</p>

                        <div class="row">



                            <div class="col-md-12" style="padding-bottom: 10px">

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
                            <br />


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

            <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact
                            {{$user_profile_details->first_name}}
                            {{$user_profile_details->last_name}} </h5>
                        <div style="clear: both"></div>

                        <hr />
                        <h6><i class="fa fa-phone"></i> <strong>{{$user_profile_details->primary_phone}}</strong></h6>
                        <hr />
                        <h6><i class="fa fa-envelope"></i> {{$user_profile_details->email}}</h6>
                        <hr />
                        <h6><i class="fa fa-map"></i> {{$user_profile_details->town_name}},
                            {{$user_profile_details->county_name}}</h6>


                        {{-- {!!
                        Form::open(['action'=>'EducationController@add_education','method'=>'POST','class'=>'form
                        candidate_form',
                        'enctype'=>'multipart/form-data'])
                        !!}

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{Form::label('full_names', 'Your Full Names.',['class'=>'control-label'])}}
                                    {{Form::text('full_names',null,['class'=>'form-control',
                                    'placeholder'=>'Enter Your Fullnames'])}}
                                    @error('full_names')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{Form::label('email', 'Your Email.',['class'=>'control-label'])}}
                                    {{Form::text('email',null,['class'=>'form-control',
                                    'placeholder'=>'Enter Your Email'])}}
                                    @error('email')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    {{Form::label('telephone', 'Telephone No.',['class'=>'control-label'])}}
                                    {{Form::text('telephone',null,['class'=>'form-control',
                                    'placeholder'=>'Enter Your Telphone'])}}
                                    @error('telephone')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    {{Form::label('message', 'Message.',['class'=>'control-label'])}}
                                    {{Form::textarea('message',
                                    "Hi ".$user_profile_details->first_name.
                                    ", I am interested in your services. Can we get in touch?",
                                    ['class'=>'form-control',
                                    'placeholder'=>'Enter Your Message here', 'style'=>'height:90px'])}}
                                    @error('message')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-block bg-gradient-secondary"><b>SUBMIT</b></button>
                        {!! Form::close() !!} --}}



                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Search Expert</h5>
                    </div>
                    <div class="card-body">
                        {!!
                        Form::open(['action'=>'SearchController@expert_process','method'=>'GET','class'=>'form',
                        'enctype'=>'multipart/form-data'])
                        !!}


                        <div class="row">


                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{Form::label('skills', 'Skill Name',['class'=>'control-label'])}}
                                    {{Form::text('skills',null,['class'=>'form-control',
                                    'placeholder'=>'Enter the Skill Name*'])}}
                                    @error('skills')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <p><a href=""><b>Advanced Search</b></a></p> --}}

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="form-group">
                                            {{Form::label('industry', 'Industry
                                            Type',['class'=>'control-label'])}}
                                            {{ Form::select('industry', $industries,null, ['class' =>
                                            'select2 form-control','placeholder'=>'--select--'])
                                            }}
                                            @error('industry')
                                            <span class="error_submission" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{Form::label('location', 'Location',['class'=>'control-label'])}}
                                            {{Form::text('location',null,['class'=>'form-control',
                                            'placeholder'=>'Enter the location Name*'])}}
                                            @error('location')
                                            <span class="error_submission" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <input type="hidden" name="selected_location_id">
                                    </div>




                                </div>

                            </div>
                        </div>



                        <div class="row" style="padding-top: 20px">

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block bg-gradient-secondary">
                                    <b>SEARCH EXPERT</b></button>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal-portfolio-view">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="padding:10px">
                    <h5 class="modal-title">View Portfolio</h5>
                    <a href="/profile">
                        <h3 aria-hidden="true">&times;</h3>

                    </a>
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

    @include('includes._footer')
    @endsection


    @section('css-scripts')
    <link href="/dist/css/custom.css" rel="stylesheet">
    <link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
    <link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet">
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
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
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/URI.js/1.17.0/URI.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('.select2').select2();
            
            $( "#skills" ).autocomplete({
                delay: 0,
                source: '/skill/autocomplete_skills',
                
                select: function(e,selected) {
                    $('#selected_skill_id').val(selected.item.id)
                    //var $item = selected.item;
                    // counter=Math.floor(Math.random() * 1000000000);
                    // searchvalid=selected.item.id;
                    // searchvaltext=selected.item.value;      
                
                },
                search: function() {
                 $('#selected_skill_id').val('')
                },
            });
    
    
             $( "#location" ).autocomplete({
                delay: 0,
                source: '/search/location_autocomplete',
                
                select: function(e,selected) {
                    $('#selected_location_id').val(selected.item.id)
                    //var $item = selected.item;
                    // counter=Math.floor(Math.random() * 1000000000);
                    // searchvalid=selected.item.id;
                   // searchvaltext=selected.item.value;      
                
                },
                search: function() {
                 $('#selected_skill_id').val('')
                },
            });


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
                            
                              
                            //   if(value.portfolio_url.indexOf("youtube") != -1){
                            //       alert('me');
                            //   }
                              

                            if(data.portfolio_details.portfolio_url.indexOf("youtube") != -1){

                                var uri = data.portfolio_details.portfolio_url;
                                var components = URI.parse(uri);
                                var query = URI.parseQuery(components['query']);
                               //alert(query['v']);



                               tab+='<iframe src="https://www.youtube.com/embed/'+query['v']+'" style="width:100% ;height:400px">';
                               tab+='</iframe>';
                              //tab+='<p>'+data.portfolio_details.portfolio_url+'</p>';
                            }else{
                              
                              
                             if(value.portfolio_type.indexOf("image") != -1){
                                tab+='<img src="/'+value.portfolio_upload+'" style="width:100%">';
                              }else if (value.portfolio_type.indexOf("video") != -1) {
                                tab+='<video width="100%" height="400" controls>';
                                tab+='<source src="/'+value.portfolio_upload+'">';
                                tab+='Your browser does not support the video tag.';
                                tab+='</video>';
                             }else if (value.portfolio_type.indexOf("audio") != -1) {
                                tab+='<audio controls width="100%">';
                                tab+='<source src="/'+value.portfolio_upload+'">';
                                tab+='Your browser does not support the audio element';
                                tab+='</audio>';
                            
                             }else{
                                tab+='<a target="_blank" href="/'+value.portfolio_upload+'" class="btn btn-app" style="height:auto; width:100%"> <i class="fas fa-file" style="font-size:80px"></i> <span style="font-size:16px">Download File</span></a>'
                             }
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
            
    
        })
       
    
    </script>

    @endsection