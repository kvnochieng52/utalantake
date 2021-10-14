{!!
Form::open(['action'=>'UserProfileController@add_skill','method'=>'POST','class'=>'form
candidate_form',
'enctype'=>'multipart/form-data'])
!!}
<div class="row">

    <div class="col-12">
        <p>Please add your skills one at a time then press Add Skill button</p>
        <div class="form-group">
            <label>Enter Skill</label>
            <input type="text" name="skill" id="skill" class="control-label" style="width:100%"
                placeholder="Enter your skills one by one">
        </div>
        <!-- /.form-group -->
    </div>
</div>


<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label>Skill Description(optional)</label>
            <textarea name="description" class="form-control"
                placeholder="you may clearly describe your skill here"></textarea>
        </div>
        <!-- /.form-group -->
    </div>
</div>

<div class="row">

    <div class="col-12">
        <input type="hidden" name="selected_skill_id" id="selected_skill_id">
        <button type="submit" class="btn btn-block bg-gradient-secondary">
            <b>ADD SKILL </b></button>
    </div>
</div>



{!! Form::close() !!}