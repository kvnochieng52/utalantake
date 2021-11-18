<div class="card">
    <div class="card-body box-profile" style="padding-bottom: 5px">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                src="/{{$user_details->profile_photo !=null ? $user_details->profile_photo : 'images/no-image.png' }}"
                alt="{{$user_details->first_name}} {{$user_details->last_name}} profile picture">
        </div>

        <h3 class="profile-username text-center">{{$user_details->first_name}} {{$user_details->last_name}}</h3>

        <p class="text-muted text-center">

            @if($user_details->title!=null)
            {{$user_details->title}}
            @else
            <a href="#modal_update_bio" data-toggle="modal" data-target="#modal_update_bio" data-backdrop="static"
                data-keyboard="false" style="color:#f15c5c">
                <i class="fas fa-info-circle"></i>
                Update your Title <i class="fas fa-edit"></i>
            </a>
            @endif

        </p>


        <ul class="list-unstyled list-referrals">
            <li>
                <p style="margin-bottom:5px"><span class="value"><b>25%</b></span><span
                        class="text-muted float-right">Complete | <a href="" data-toggle="modal"
                            data-target=".profile-complete"><b>(Check here)</b></a>
                    </span></p>
                <div class="progress progress-xs progress-transparent custom-color-yellow">
                    <div class="progress-bar" data-transitiongoal="25" style="width: 25%;" aria-valuenow="25">
                    </div>
                </div>
                <p style="color: red ;margin-bottom:5px;margin-top:8px">
                    <b>
                        <i class="fas fa-info-circle"></i>
                        Complete
                        Profile to be listed
                    </b>
                </p>
            </li>
        </ul>
        {{-- <a href="/profile/edit" class="btn btn-block bg-gradient-secondary btn-sm">
            <i class="fas fa-user-edit"></i> EDIT PROFILE</a> --}}

        <ul class="list-group list-group-unbordered mb-3">


            <li class="list-group-item">
                <a href="/profile" style="color:#5f5f5f"><b> <i class="far fa-user-circle"></i> View Profile</b>
                </a>

                <a class="float-right"></a>
            </li>
            <li class="list-group-item">
                <a href="/job" style="color:#5f5f5f"><b> <i class="far fa-clipboard"></i> Tasks/Jobs</b>
                </a>
                <a href="/job/post" class="float-right btn btn-outline-secondary"><i class="fas fa-plus"></i> Post
                    New</a>
            </li>
            {{-- <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
            </li> --}}
        </ul>

        {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
    </div>
    <!-- /.card-body -->
</div>




<div class="small-box bg-warning">
    <div class="inner">
        <h3>44</h3>

        <p>Opportunties for you</p>
    </div>
    <div class="icon">
        <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">View Opportunties <i class="fas fa-arrow-circle-right"></i></a>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recently Added Opportunities</h3>

        {{-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <ul class="products-list product-list-in-card pl-2 pr-2">
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Software Developer
                        <span class="badge badge-warning float-right">open</span></a>
                    <span class="product-description">
                        By: Safaricom
                    </span>
                </div>
            </li>

            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Plumbing Job
                        <span class="badge badge-danger float-right">Closed</span></a>
                    <span class="product-description">
                        By: Roy Willis
                    </span>
                </div>
            </li>

            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Footballer Required
                        <span class="badge badge-warning float-right">open</span></a>
                    <span class="product-description">
                        By: Safaricom
                    </span>
                </div>
            </li>

            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">TV Set Electrician
                        <span class="badge badge-warning float-right">open</span></a>
                    <span class="product-description">
                        By: Pius Malala
                    </span>
                </div>
            </li>
            <!-- /.item -->

            <!-- /.item -->

        </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Opportunities</a>
    </div>
    <!-- /.card-footer -->
</div>