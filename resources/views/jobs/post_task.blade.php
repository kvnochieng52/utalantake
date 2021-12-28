@extends('layouts.master_frontend')
@section('title')
Post a Task
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
                        <h5 class="card-title">Post Task </h5>
                    </div>
                    <div class="card-body">
                        @include('notices')
                        {!!
                        Form::open(['action'=>'JobController@post_task_process','method'=>'POST','class'=>'form',
                        'enctype'=>'multipart/form-data'])
                        !!}
                        <input type="hidden" name="post_type" value="1">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    {{Form::label('title', 'Task Title/Name',['class'=>'control-label'])}}
                                    {{Form::text('title',null,['class'=>'form-control',
                                    'placeholder'=>'Enter your task title','required'=>'required'])}}
                                    @error('title')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{Form::label('description', 'Task Description',['class'=>'control-label'])}}
                                    {{Form::textarea('description',null,['class'=>'form-control description_textbox',
                                    'placeholder'=>'Properly Describe your task, requirements and qualification if
                                    any'])}}
                                    @error('description')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    {{Form::label('industries', 'Select Industries',['class'=>'control-label'])}}<br />
                                    <p style="font-size:12px">Select Industry that will help us in getting you the right
                                        expert based on your
                                        task</p>

                                    <div class="select2-blue">
                                        <select name="industries[]" class="select2" multiple="multiple"
                                            data-placeholder="Select Industries" data-dropdown-css-class="select2-blue"
                                            style="width: 100%;" autocomplete="off" required>

                                            @foreach ($industries as $key=>$industry)
                                            <option value="{{$key}}">
                                                {{$industry}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{Form::label('skills', 'Type Skills',['class'=>'control-label'])}}<br />
                                    <p style="font-size:12px">Type the Skills that will help us in getting you the right
                                        expert based on your
                                        task</p>

                                    <div class="input-group">
                                        <input type="text" name="skill" id="skill" class="form-control"
                                            placeholder="Enter the skill then click add one at a time">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <a href="" class="add_skill"><i class="fa fa-plus"></i> Add</button></a>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="selected_skill_id" id="selected_skill_id">
                                    <input type="hidden" name="job_skills" id="job_skills">
                                    <div class="selected_skills">
                                        <ul>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="description" class="control-label">Attachments (optional) </label>
                                <p style="font-size:12px">You may upload attachments/screenshots that will help
                                    understand your task</p>
                                <div class="clsbox-1" runat="server">
                                    <div class="dropzone clsbox" id="mydropzone">

                                    </div>
                                </div>

                                <input type="hidden" name="attachment_file" id="attachment_file"
                                    class="attachment_file">
                            </div>
                        </div>

                        <hr />


                        <div class="row">
                            <div class="col-md-7">

                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            {{Form::label('country', 'Select Country',['class'=>'control-label'])}}
                                            {{ Form::select('country', $countries,'', ['class' =>
                                            'form-control select2','required'=>'required','style'=>'width:100%']) }}
                                            @error('country')
                                            <span class="error_submission" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{Form::label('county', 'County',['class'=>'control-label'])}}
                                            {{ Form::select('county', $counties,'', ['class' => 'form-control
                                            select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required'])
                                            }}
                                            @error('county')
                                            <span class="error_submission" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{Form::label('town_estate', 'Town/Estate',['class'=>'control-label'])}}
                                            {{ Form::select('town_estate', $towns,null, ['class' => 'form-control
                                            select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required'])
                                            }}
                                            @error('town_estate')
                                            <span class="error_submission" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">

                                <div class="form-group">
                                    {{Form::label('address', 'Phyiscal Address',['class'=>'control-label'])}}
                                    {{Form::textarea('address',$user_details->address,['class'=>'form-control',
                                    'placeholder'=>'Specify your physical address','style'=>'height:60px'])}}
                                    @error('address')
                                    <span class="error_submission" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr />

                        <div class="row">

                            <div class="col-md-12">
                                <p>Specify the Payment Range (optional)</p>
                            </div>

                            <div class="col-md-5">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="range" name="payment_type" value="range_type"
                                        class="payment_type">
                                    <label for="range">
                                        Select Range
                                    </label>
                                </div>

                                <div class="icheck-primary d-inline" style="margin-left:20px">
                                    <input type="radio" id="custom" name="payment_type" value="custom_type"
                                        class="payment_type">
                                    <label for="custom">
                                        Specify Amount
                                    </label>
                                </div>

                            </div>

                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="salary_range_div range_type" style="display: none">
                                            <div class="form-group">
                                                {{Form::label('salary_range', 'Select
                                                Range',['class'=>'control-label'])}}
                                                {{ Form::select('salary_range', $salary_ranges,null, ['class' =>
                                                'form-control
                                                select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required'])
                                                }}
                                                @error('salary_range')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="salary_range_div custom_type" style="display: none">

                                            <div class="form-group">
                                                {{Form::label('custom_amount', 'Specify
                                                Amount',['class'=>'control-label'])}}
                                                {{Form::text('custom_amount',null,['class'=>'form-control',
                                                'placeholder'=>'Enter the Amount'])}}
                                                @error('custom_amount')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="curreny_field">
                                            <div class="form-group">
                                                {{Form::label('payment_curency',
                                                'Currency?',['class'=>'control-label'])}}
                                                {{ Form::select('payment_curency', $currencies,null, ['class' =>
                                                'form-control
                                                select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required'])
                                                }}
                                                @error('payment_curency')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="mode_field">
                                            <div class="form-group">
                                                {{Form::label('payment_mode', 'Payment
                                                Plan?',['class'=>'control-label'])}}
                                                {{ Form::select('payment_mode', $payment_modes,null, ['class' =>
                                                'form-control
                                                select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required'])
                                                }}
                                                @error('payment_mode')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <hr />

                        <div class="row">

                            <div class="col-md-12">
                                <p>Post task as? </p>
                            </div>

                            <div class="col-md-5">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="individual" name="post_as" value="individual"
                                        class="post_as">
                                    <label for="individual">
                                        Individual
                                    </label>
                                </div>

                                <div class="icheck-primary d-inline" style="margin-left:20px">
                                    <input type="radio" id="business" name="post_as" value="business" class="post_as">
                                    <label for="business">
                                        Business/organization
                                    </label>
                                </div>

                            </div>

                            <div class="col-md-7">
                                <div class="post_as_div individual_div">
                                    <div class="form-group">
                                        {{Form::label('display_name', 'Display Name (Name to be
                                        displayed)',['class'=>'control-label'])}}
                                        {{Form::text('display_name',
                                        $user_details->first_name." ".$user_details->last_name,
                                        ['class'=>'form-control','placeholder'=>'the Name to be displayed']
                                        )}}
                                        @error('display_name')
                                        <span class="error_submission" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="post_as_div business_div">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                {{Form::label('business_name', 'Buisness/Organization
                                                Name',['class'=>'control-label'])}}
                                                {{Form::text('business_name',null,['class'=>'form-control',
                                                'placeholder'=>'Enter the Business or Org Name'])}}
                                                @error('business_name')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <div style="width: 100%">
                                                    {{Form::label('business_logo', 'Logo',['class'=>'control-label'])}}
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="business_logo" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        Logo</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="notification_email_div">
                                            <div class="form-group">
                                                {{Form::label('notification_email', 'Notifications Email (Email to send
                                                applications
                                                notifications)',['class'=>'control-label'])}}
                                                {{Form::email('notification_email',$user_details->email,['class'=>'form-control',
                                                'placeholder'=>'Enter the Business or Org Name'])}}
                                                @error('notification_email')
                                                <span class="error_submission" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

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
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">
<link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<style>
    .job_view {
        display: none
    }

    .dropzone {
        border: 2px dashed rgba(0, 0, 0, .3);
        border-radius: 5px;
    }

    .selected_skills ul {
        list-style-type: none;
        padding-left: 0px;
    }

    .selected_skills ul li {
        display: inline;
        margin-right: 10px
    }

    .mode_field,
    .curreny_field,
    .post_as_div,
    .notification_email_div {
        display: none;
    }
</style>

@endsection



@section('js-scripts')
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script src="/dist/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<script>
    Dropzone.autoDiscover = false;
    $(document).ready(function(){
        bsCustomFileInput.init();
        $('.post_type').change(function(){
            var selected_option=$(this).val();
            $('.job_view').hide();
            $('.job_view'+selected_option).show();
            
        });

        $('.post_as').change(function(){
            var selected_option=$(this).val();
            $('.post_as_div').hide();
            $('.'+selected_option+'_div').show();
            $('.notification_email_div').show();
            
            
        });


         $('.payment_type').change(function(){
            var selected_option=$(this).val();
            $('.salary_range_div').hide();
            $('.'+selected_option).show();
            $('.mode_field').show();
            $('.curreny_field').show();
        });

        $('.description_textbox').wysihtml5({
            toolbar: {
                "font-styles": false,
                "emphasis": true, 
                "lists": true, 
                "html": false, 
                "link": false, 
                "image": false,
                "color": false, 
                "blockquote": false, 
            }
        })


         $('.job_description_textbox').wysihtml5({
            toolbar: {
                "font-styles": false,
                "emphasis": true, 
                "lists": true, 
                "html": false, 
                "link": false, 
                "image": false,
                "color": false, 
                "blockquote": false, 
            }
        })

         uploaded_files=[];
        $("div#mydropzone").dropzone({ 
            url: "/job/upload_attachments",
            clickable:true,
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

                        $('.attachment_file').val(JSON.stringify(uploaded_files))

                    })
            },
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{ csrf_token() }}");
            }, 
        });

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

        var skills_object=[];

        $(".add_skill").click(function(e) {
            e.preventDefault();

            var skill_name=$('#skill').val();

            skills_object.push({
                skill_id:$('#selected_skill_id').val(),
                skill_name: skill_name
            })

        
            
            $('#selected_skill_id').val('')
            $('#skill').val('')

            $(".selected_skills ul").append('<li><span class="badge badge-primary">'+skill_name+'</li>');

            $('#job_skills').val(JSON.stringify(skills_object))
           
        });

       
    

         $('.date_selector').datepicker({
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            format: "dd-mm-yyyy",
            yearRange: "-90:+00"
        })


    
    })
   

</script>

@endsection