@extends('layouts.master_frontend')
@section('title')
Welcome
@endsection

@section('content')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="../../index3.html" class="navbar-brand">
            <img src="/images/logo.png" alt="AdminLTE Logo" class="brand-image">

        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav main_menu">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Find Experts</a>
                </li>

                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Search Tasks/Jobs</a>
                </li>

            </ul>

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <li>

                <a href="" class="btn btn-block btn-warning"><b>REGISTER</b></a>
            </li>


        </ul>
    </div>
</nav>
{{-- <div class="content-wrapper"> --}}
<div class="start_up_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">


                <div class="header" style=" padding-right: 50px">
                    <br />

                    <h6>Utalanta links your Talent & Skills with Opportunities. Also
                        find Tasks & Jobs that best match your skills </h6>
                    <p class="lead">Login to Your Account</p>


                    <div class="form-group">
                        <label for="signup-email" class="control-label">Email or Telephone</label>
                        <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email"
                            autofocus="">
                    </div>

                    <div class="form-group">
                        <label for="signup-email" class="control-label">Password</label>
                        <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email"
                            autofocus="">
                    </div>

                    <button type="submit" class="btn btn-warning btn-block"><strong>LOGIN</strong></button>
                    <div class="bottom">
                        <br>
                        <span class="helper-text">Cant Remember Password? <a
                                href="http://127.0.0.1:8000/authentication/login">

                                <strong> Reset </strong></a></span>

                        <br />

                        <a class="btn btn-secondary btn-block" href="http://127.0.0.1:8000/register">Register
                            Account</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <br />



                <img src="/images/intro_video_artwork.jpg" class="img-fluid rounded">
                {{-- <h3 style="font-size:26px">Where your Talent &amp; Skills Pays Off</h3> --}}
            </div>
        </div>
        <br />

        {{-- <div class="container">
            <h1>Play YouTube or Vimeo Videos in Bootstrap 4 Modal</h1>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                Play Video 1 - autoplay
            </button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                data-src="https://www.youtube.com/embed/IP7uGKgJL8U" data-target="#myModal">
                Play Video 2
            </button>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                data-src="https://www.youtube.com/embed/A-twOC3W558" data-target="#myModal">
                Play Video 3
            </button>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myModal">
                Play Vimeo Video
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">


                        <div class="modal-body">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>


                        </div>

                    </div>
                </div>
            </div>



        </div> --}}
    </div>

</div>
{{-- </div> --}}


<!-- /.navbar -->

@endsection


@section('css-scripts')
<link href="dist/css/custom.css" rel="stylesheet">
<style>
    .modal-dialog {
        max-width: 800px;
        margin: 30px auto;
    }



    .modal-body {
        position: relative;
        padding: 0px;
    }

    .close {
        position: absolute;
        right: -30px;
        top: 0;
        z-index: 999;
        font-size: 2rem;
        font-weight: normal;
        color: #fff;
        opacity: 1;
    }
</style>

@endsection


@section('js-scripts')
{{-- <script src="{{ asset('js/jquery-ui.min.js')}}"></script> --}}

<script>
    $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});



</script>

@endsection