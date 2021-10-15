{!!
Form::open(['action'=>'EducationController@add_education','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}


<div class="row">

    <div class="col-lg-12">
        <div class="form-group">
            {{Form::label('school_name', 'School/Institute Name.',['class'=>'control-label'])}}
            {{Form::text('school_name',null,['class'=>'form-control', 'placeholder'=>'Enter your School/Institute Name
            '])}}
            @error('school_name')
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
            {{Form::label('qualification', 'Qualification',['class'=>'control-label'])}}
            {{ Form::select('qualification', $education_levels,null, ['class' =>
            'select2 form-control','placeholder'=>'--select--','required'=>'required']) }}
            @error('qualification')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="col-lg-6">
        <div class="form-group">
            {{Form::label('course_name', 'Course Name',['class'=>'control-label'])}}
            {{Form::text('course_name',null,['class'=>'form-control',
            'placeholder'=>'Enter the course name undertook'
            ])}}
            @error('course_name')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
        <div class="row">

            <div class="col-lg-12">{{Form::label('end_date', 'End Date (or expected)',['class'=>'control-label'])}}
            </div>
            <div class="col-lg-6">

                <div class="form-group">

                    {{ Form::select('end_month', $education_months,null, ['class' =>
                    'select2 form-control','placeholder'=>'--Select Month--','required'=>'required']) }}
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
                    'select2 form-control','placeholder'=>'--Select Year--','required'=>'required']) }}
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





<div class="row">

    <div class="col-lg-12">
        <div class="form-group">
            {{Form::label('description', 'Description(optional)',['class'=>'control-label'])}}
            {{Form::textarea('description',null,['class'=>'form-control',
            'placeholder'=>'Enter description','style'=>'height:80px'])}}
            @error('description')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>




<button type="submit" class="btn btn-block bg-gradient-secondary"><b>ADD EDUCATION</b></button>
{!! Form::close() !!}