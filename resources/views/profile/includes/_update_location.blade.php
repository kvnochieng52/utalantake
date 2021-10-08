{!!
Form::open(['action'=>'UserProfileController@update_address','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{Form::label('country', 'Select Country',['class'=>'control-label'])}}
            {{ Form::select('country', $countries,$user_details->country_id, ['class' => 'form-control','required'=>'required']) }}
            @error('country')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{Form::label('county', 'County',['class'=>'control-label'])}}
            {{ Form::select('county', $counties,$user_details->county_id, ['class' => 'form-control select2','placeholder'=>'--Specify--','required'=>'required']) }}
            @error('county')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{Form::label('town_estate', 'Town/Estate',['class'=>'control-label'])}}
            {{ Form::select('town_estate', $towns,$user_details->town_id, ['class' => 'form-control select2','placeholder'=>'--Specify--','required'=>'required']) }}
            @error('town_estate')
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
            {{Form::label('address', 'Phyiscal Address',['class'=>'control-label'])}}
            {{Form::textarea('address',$user_details->address,['class'=>'form-control', 'placeholder'=>'Specify  your  physical address','style'=>'height:80px'])}}
            @error('address')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


<button type="submit" class="btn btn-block bg-gradient-secondary">
    <b>UPDATE ADDRESS DETAILS
    </b></button>

</div>

{!! Form::close() !!}