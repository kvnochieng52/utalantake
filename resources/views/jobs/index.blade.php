@extends('layouts.master_frontend')
@section('title')
Post a Job
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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Taks & Jobs </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Aplications</th>
                                    <th>Posted</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($user_posted_jobs as $job)

                                <tr>
                                    <td><a href=""><b><i class="far fa-clipboard"></i>
                                                {{$job->job_title}}</b></a><br />Task
                                    </td>
                                    <td><span class="badge bg-info">5</span></td>
                                    <td>7th June 2012</td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>

                                    <td>

                                        <a href="" title="View" class="btn btn-xs btn-success"><i
                                                class="fas fa-search"></i></a> &nbsp;
                                        <a href="" title="Edit Details" class="btn btn-xs btn-secondary"><strong> <i
                                                    class="fas fa-edit"></i></strong> </a>&nbsp;
                                        <a href="" title="Edit Details" class="btn btn-xs btn-secondary"><strong> <i
                                                    class="fas fa-trash"></i></strong> </a>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('css-scripts')
<link href="/dist/css/custom.css" rel="stylesheet">
<link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">
<link href="/dist/css/jquery-ui.min.css" rel="stylesheet">
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet">
<link href="/plugins/select2/css/select2.min.css" rel="stylesheet">
<link href="/dist/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<style></style>
@endsection



@section('js-scripts')
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script src="/dist/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<script>
    $(document).ready(function(){
      
    })
   

</script>

@endsection