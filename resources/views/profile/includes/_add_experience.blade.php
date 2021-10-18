{!!
Form::open(['action'=>'WorkExperienceController@add_work_experience','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}


<div class="row">

    <div class="col-lg-12">
        <div class="form-group">
            {{Form::label('company_name', 'Company/Organization Name.',['class'=>'control-label'])}}
            {{Form::text('company_name',null,['class'=>'form-control',
            'placeholder'=>'Enter the Company/Organization Name*'])}}
            @error('company_name')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-6">
        <div class="form-group">
            {{Form::label('title', 'Title*',['class'=>'control-label'])}}
            {{Form::text('title',null,['class'=>'form-control',
            'placeholder'=>'Title e.g. Accountant, Software developer etc'
            ])}}
            @error('title')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {{Form::label('employment_type', 'Employment Type',['class'=>'control-label'])}}
            {{ Form::select('employment_type', $job_types,null, ['class' =>
            'select2 form-control','placeholder'=>'--select--','required'=>'required']) }}
            @error('employment_type')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



</div>

<div class="row">


    <div class="col-md-12" style="padding-bottom:15px; padding-top:15px">
        <div class="icheck-primary d-inline">
            <input type="checkbox" id="current_check" name="current_check" value="1">
            <label for="current_check">
                <p style="margin-bottom:0px"> I am currently working in this Company/organization and role</p>
                <p style="font-size: 14px; font-weight:normal !important; margin-bottom:0px"> Select if you are
                    currently
                    working on this role/company.
                </p>
            </label>
        </div>

    </div>

</div>

<div class="row">

    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">{{Form::label('start_date', 'Start Date',['class'=>'control-label'])}}</div>
        </div>
        <div class="row">
            <div class="col-lg-6">

                <div class="form-group">

                    {{ Form::select('start_month', $education_months,null, ['class' =>
                    'select2 form-control','placeholder'=>'--Select Month--','required'=>'required']) }}
                    @error('start_month')
                    <span class="error_submission" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6">

                <div class="form-group">

                    {{ Form::select('start_year', $education_years,null, ['class' =>
                    'select2 form-control','placeholder'=>'--Select Year--','required'=>'required']) }}
                    @error('start_year')
                    <span class="error_submission" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">

        <div class="exp_end_date_cover">
            <div class="row">


                <div class="col-lg-12">{{Form::label('end_date', 'End Date',['class'=>'control-label'])}}
                </div>
                <div class="col-lg-6">

                    <div class="form-group">

                        {{ Form::select('end_month', $education_months,null, ['class' =>
                        'select2 form-control','placeholder'=>'--Select Month--']) }}
                        @error('end_month')
                        <span class="error_submission" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="form-group">

                        {{ Form::select('end_year', $education_years,null, ['class' =>
                        'select2 form-control','placeholder'=>'--Select Year--']) }}
                        @error('end_year')
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





<div class="row">

    <div class="col-lg-12">
        <div class="form-group">
            {{Form::label('duties_responsibilities', 'Duties/ Responsibilities',['class'=>'control-label'])}}
            {{Form::textarea('duties_responsibilities',null,['class'=>'form-control',
            'placeholder'=>'Enter duties_responsibilities','style'=>'height:80px'])}}
            @error('duties_responsibilities')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>




<button type="submit" class="btn btn-block bg-gradient-secondary"><b>ADD WORK EXPERIENCE</b></button>
{!! Form::close() !!}