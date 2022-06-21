@extends('layouts.master_frontend')
@section('title')
Search Expert
@endsection

@section('content')

@include('includes._main_navigation')

<div style="background-color:#f5f7f6; padding-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
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
                                    {{Form::label('skills', 'Skill or Title',['class'=>'control-label'])}}
                                    {{Form::text('skills',null,['class'=>'form-control',
                                    'placeholder'=>'Enter the Skill Name or Title*'])}}
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

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Search Results</h5>
                    </div>
                    <div class="card-body">
                        @if(count($experts)==0)
                        <div class="alert alert-danger">
                            No Expert Found Matching your Query
                        </div>
                        @else

                        @foreach ($experts as $expert)
                        <div>
                            <div class="thumbnail" style="border:none;">


                                <div class="row">

                                    <div class="col-sm-2 col-md-2 col-xs-12 image-container">
                                        <a href="/expert/{{$expert->slug}}">
                                            <img src="/{{!empty($expert->profile_photo_thumb !=null) ? $expert->profile_photo_thumb : 'images/no-image.png' }}"
                                                class="user-image" alt="User Image"
                                                style="margin-left:-15px; width:100%">

                                        </a>

                                    </div>

                                    <div class="col-sm-10 col-md-10 col-xs-12">

                                        <h5 style="margin-bottom: 2px"><a
                                                href="/expert/{{$expert->slug}}">{{$expert->first_name}}
                                                {{$expert->last_name}}</a>
                                        </h5>
                                        <p style="margin-bottom: 2px">{{$expert->title}}/{{$expert->town_name}}</p>
                                        <p style="margin-bottom: 2px">
                                            {{mb_strimwidth($expert->bio, 0, 150, "...")}}
                                            <a href="/expert/{{$expert->slug}}"><b>Read More</b></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div style="clear: both"></div>
                            <hr style="margin-top: 2px" />
                        </div>
                        @endforeach





                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">
<link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<style>

</style>

@endsection



@section('js-scripts')
<script src="/plugins/select2/js/select2.full.min.js"></script>




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
        

    })
   

</script>

@endsection