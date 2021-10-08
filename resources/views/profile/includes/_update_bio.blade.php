{!!
Form::open(['action'=>'UserProfileController@update_bio','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}


<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('title', 'Your Title',['class'=>'control-label'])}}
            {{Form::text('title',$user_details->title,['class'=>'form-control', 'placeholder'=>'Enter your title e.g Plumber, Footballer, Software Developer, Electrician, Mechanic etc'])}}
            @error('title')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('bio', 'Bio',['class'=>'control-label'])}}
            {{Form::textarea('bio',$user_details->bio,['class'=>'form-control', 'placeholder'=>'Tell us something about yourself','style'=>'height:80px'])}}
            @error('bio')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


</div>

<div class="row">
    <div class="col-md-12">
        <button type="submit" class="btn btn-block bg-gradient-secondary">
            <b>UPDATE TITLE &
                BIO</b></button>
    </div>
</div>

{!! Form::close() !!}