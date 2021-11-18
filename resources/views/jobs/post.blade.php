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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Post Job/Task </h5>
                    </div>
                    <div class="card-body">
                        {!!
                        Form::open(['action'=>'JobController@save','method'=>'POST','class'=>'form',
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
                        <hr />


                        <div class="job_view job_view1">
                            @include('jobs.post._task')
                        </div>
                        <div class="job_view job_view2">
                            @include('jobs.post._job')
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
    .curreny_field {
        display: none;
    }
</style>

@endsection



@section('js-scripts')
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>


<script>
    Dropzone.autoDiscover = false;
    $(document).ready(function(){


        $('.post_type').change(function(){
            var selected_option=$(this).val();
            $('.job_view').hide();
            $('.job_view'+selected_option).show();
            
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

    
        $("div#mydropzone").dropzone({ 
            url: "/job/upload_attachments",
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
            
            

           
        });


        



        

    })
   

</script>

@endsection