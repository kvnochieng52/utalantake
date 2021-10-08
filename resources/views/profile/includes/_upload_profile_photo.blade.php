{!!
Form::open(['action'=>'UserProfileController@upload_profile_photo','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}
{{-- <p>Select photo then click submit</p> --}}
<label for="exampleInputFile">
    <img src="/{{$user_details->profile_photo !=null ? $user_details->profile_photo : 'images/no-image.png' }}"
        class="img-thumbnail">
    <div class="form-group">

        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="profile_photo" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose
                    file</label>
            </div>

        </div>
    </div>


</label>
<button type="submit" class="btn btn-block bg-gradient-secondary"><b>SUBMIT
        PHOTO</b></button>
{!! Form::close() !!}