<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="/images/logo.png" alt="Utalanta Logo" class="brand-image">

        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav main_menu">
                <li class="nav-item">
                    <a href="/search/expert" class="nav-link">Find Experts</a>
                </li>

                <li class="nav-item">
                    <a href="/under_construction" class="nav-link">Search Tasks/Jobs</a>
                </li>

            </ul>

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">




            @if (Auth::check())
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/{{$user_details->profile_photo !=null ? $user_details->profile_photo : 'images/no-image.png' }}"
                        class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{$user_details->first_name}} {{$user_details->last_name}} <i
                            class="fas fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu  dropdown-menu-right" style="left: inherit; right: 0px;">
                    <!-- User image -->
                    {{-- <li class="user-header bg-primary">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                        </p>
                    </li> --}}
                    <!-- Menu Body -->
                    {{-- <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li> --}}


                    <li><a href="/profile" class="dropdown-item">View profile</a></li>
                    <li><a href="/profile" class="dropdown-item">Edit Profile</a></li>
                    <li><a href="/job" class="dropdown-item">Jobs/Tasks</a></li>


                    <li class="dropdown-divider"></li>

                    <!-- Level two dropdown-->









                    <!-- Menu Footer-->
                    <li>
                        <a href="{{ url('/logout') }}" class="dropdown-item">Logout </a>
                    </li>
                </ul>
            </li>
            @else
            <li><a href="/register" class="btn btn-block btn-warning"><b>REGISTER</b></a></li>
            @endif







        </ul>
    </div>
</nav>