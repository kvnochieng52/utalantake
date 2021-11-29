<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('title', 'Task Title/Name',['class'=>'control-label'])}}
            {{Form::text('title',null,['class'=>'form-control',
            'placeholder'=>'Enter your task title'])}}
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
            'placeholder'=>'Properly Describe your task, requirements and qualification if any'])}}
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
            <p style="font-size:12px">Select Industry that will help us in getting you the right expert based on your
                task</p>

            <div class="select2-blue">
                <select class="select2" multiple="multiple" data-placeholder="Select Industries"
                    data-dropdown-css-class="select2-blue" style="width: 100%;" autocomplete="off">

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
            <p style="font-size:12px">Type the Skills that will help us in getting you the right expert based on your
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
            <div class="selected_skills">
                <ul>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <label for="description" class="control-label">Attachments (optional) </label>
        <p style="font-size:12px">You may upload attachments/screenshots that will help understand your task</p>
        <div class="clsbox-1" runat="server">
            <div class="dropzone clsbox" id="mydropzone">

            </div>
        </div>
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
                    select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required']) }}
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
                    select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required']) }}
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
            <input type="radio" id="range" name="payment_type" value="range_type" class="payment_type">
            <label for="range">
                Select Range
            </label>
        </div>

        <div class="icheck-primary d-inline" style="margin-left:20px">
            <input type="radio" id="custom" name="payment_type" value="custom_type" class="payment_type">
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
                        {{Form::label('salary_range', 'Select Range',['class'=>'control-label'])}}
                        {{ Form::select('salary_range', $salary_ranges,null, ['class' => 'form-control
                        select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required']) }}
                        @error('salary_range')
                        <span class="error_submission" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="salary_range_div custom_type" style="display: none">

                    <div class="form-group">
                        {{Form::label('custom_amount', 'Specify Amount',['class'=>'control-label'])}}
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
                        {{Form::label('payment_curency', 'Currency?',['class'=>'control-label'])}}
                        {{ Form::select('payment_curency', $currencies,null, ['class' => 'form-control
                        select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required']) }}
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
                        {{Form::label('payment_mode', 'Payment Plan?',['class'=>'control-label'])}}
                        {{ Form::select('payment_mode', $payment_modes,null, ['class' => 'form-control
                        select2','style'=>'width:100%','placeholder'=>'--Specify--','required'=>'required']) }}
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
            <input type="radio" id="individual" name="post_as" value="individual" class="post_as">
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
                {{Form::label('display_name', 'Display Name (Name to be displayed)',['class'=>'control-label'])}}
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
                        {{Form::label('business_name', 'Buisness/Organization Name',['class'=>'control-label'])}}
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
                            <input type="file" name="business_logo" class="custom-file-input" id="exampleInputFile">
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
                        {{Form::label('notification_email', 'Notifications Email (Email to send applications
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
            <b>SUBMIT</b></button>
    </div>
</div>