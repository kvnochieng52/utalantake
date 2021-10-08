@extends('layouts.master_frontend')
@section('title')
Register Account
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


                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="/profile/edit">Basic Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                    aria-selected="false">Industry & SKills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-four-messages" role="tab"
                                    aria-controls="custom-tabs-four-messages" aria-selected="false">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                                    href="#custom-tabs-four-settings" role="tab"
                                    aria-controls="custom-tabs-four-settings" aria-selected="false">Work Experience &
                                    Education</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">

                                @include('notices')

                                <h5 style="margin-bottom: 15px"> Basic Details</h5>
                                <div class="row">

                                    <div class="col-md-3" style="margin-right: 50px">
                                        @include('profile.includes._upload_profile_photo')
                                    </div>
                                    <div class="col-md-8">

                                        @include('profile.includes._update_basic_details')

                                    </div>
                                </div>


                                <hr />

                                <h5 style="margin-bottom: 15px"> Title & Bio</h5>
                                @include('profile.includes._update_bio')

                            </div>

                            <hr />

                            <h5 style="margin-bottom: 15px"> Address Details</h5>
                            @include('profile.includes._update_location')

                        </div>
                    </div>

                    <div class="card-footer">

                    </div>
                    <!-- /.card -->


                </div>

            </div>

            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        Side bar 2
                    </div>
                </div>
            </div> --}}
        </div>


        <br />
        <br />
    </div>
</div>

@include('includes._footer')






@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">


@endsection


@section('js-scripts')
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script src="/dist/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
        $('#date_of_birth').datepicker({
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            dateFormat: "dd/mm/yy",
            yearRange: "-90:+00"
        })

        $('.select2').select2({
            theme: 'bootstrap4'
        })
    });
</script>


@endsection