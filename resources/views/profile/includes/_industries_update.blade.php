{!!
Form::open(['action'=>'IndustryController@update_industries','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label>Select Industries that match your skills and pontential on the Left pannel</label>
            <select class="duallistbox" multiple="multiple" name="industries[]">
                @foreach ($industries as $key=>$industry)
                <option value="{{$key}}" @if(in_array($key, $user_selected_industries_array)) selected @endif>
                    {{$industry}}
                </option>
                @endforeach
            </select>
        </div>
        <!-- /.form-group -->
    </div>
</div>

<div class="row">

    <div class="col-12">
        <button type="submit" class="btn btn-block bg-gradient-secondary">
            <b>SUBMIT </b></button>
    </div>
</div>

{!! Form::close() !!}