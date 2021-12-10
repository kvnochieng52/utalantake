@extends('layouts.master_frontend')
@section('title')
Search Expert
@endsection

@section('content')

@include('includes._main_navigation')

<div style="background-color:#f5f7f6; padding-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{Form::label('skills', 'Search For:',['class'=>'control-label'])}}<br />
                                    <p style="font-size:12px; margin-bottom:4px">Type the Skills that will help us in
                                        getting you the right
                                        expert based on your
                                        task</p>

                                    <div class="input-group">
                                        <input type="text" name="skill" id="skill" class="form-control"
                                            placeholder="Enter the skill">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <p><a href=""><b>Advanced Search</b></a></p> --}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{Form::label('skills', 'Location',['class'=>'control-label'])}}<br />
                                            <p style="font-size:12px; margin-bottom:2px">Type the Skills that will help
                                                us in
                                                getting you the right
                                                expert based on your
                                                task</p>

                                            <div class="input-group">
                                                <input type="text" name="skill" id="skill" class="form-control"
                                                    placeholder="Enter the skill">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            {{Form::label('industries', 'Industries',['class'=>'control-label'])}}<br />
                                            <p style="font-size:12px; margin-bottom:4px">Select Industry that will help
                                                us in getting you
                                                the right expert based on your
                                                task</p>

                                            <div class="select2-blue">
                                                <select class="select2" multiple="multiple"
                                                    data-placeholder="Select Industries"
                                                    data-dropdown-css-class="select2-blue" style="width: 100%;"
                                                    autocomplete="off">

                                                    @foreach ($industries as $key=>$industry)
                                                    <option value="{{$key}}">
                                                        {{$industry}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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
        
        $( "#skill" ).autocomplete({
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
        

    })
   

</script>

@endsection