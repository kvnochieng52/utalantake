{!!
Form::open(['action'=>'UserProfileController@update_basic_details','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}

<div class="row">

    <div class="col-lg-6">
        <div class="form-group">
            {{Form::label('first_name', 'First Name',['class'=>'control-label'])}}
            {{Form::text('first_name',$user_details->first_name,['class'=>'form-control', 'placeholder'=>'Enter your First Name', 'autofocus'=>'true'])}}
            @error('first_name')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>
    <div class="col-lg-6">

        <div class="form-group">
            {{Form::label('last_name', 'Last Name',['class'=>'control-label'])}}
            {{Form::text('last_name',$user_details->last_name,['class'=>'form-control', 'placeholder'=>'Enter your Last Name'])}}
            @error('last_name')
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
            {{Form::label('email', 'Email Address',['class'=>'control-label'])}}
            {{Form::text('email',$user_details->email,['class'=>'form-control', 'placeholder'=>'Enter your Email Address'])}}
            @error('email')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {{Form::label('telephone', 'Telephone No.',['class'=>'control-label'])}}
            {{Form::text('telephone',$user_details->primary_phone,['class'=>'form-control', 'placeholder'=>'Enter your telephone '])}}
            @error('telephone')
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
            {{Form::label('gender', 'Gender',['class'=>'control-label'])}}
            {{ Form::select('gender', $genders,$user_details->gender_id, ['class' => 'form-control','placeholder'=>'--Specify--','required'=>'required']) }}
            @error('gender')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group date">
            {{Form::label('date_of_birth', 'Date of Birth.',['class'=>'control-label'])}}


            {{-- <div class="input-group-addon">
                                                        <i class="fas fa-calendar"></i>
                                                    </div> --}}
            {{Form::text('date_of_birth',!empty($user_details->date_of_birth)?\Carbon\Carbon::parse($user_details->date_of_birth)->format('d-m-Y'):'',['class'=>'form-control pull-right', '','placeholder'=>'Enter your Date of Birth ','autocomplete'=>'off'])}}
            @error('date_of_birth')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<button type="submit" class="btn btn-block bg-gradient-secondary"><b>UPDATE
        BASIC
        DETAILS</b></button>
{!! Form::close() !!}