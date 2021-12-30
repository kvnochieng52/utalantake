@extends('layouts.master_frontend')
@section('title')
Welcome
@endsection

@section('content')
<!-- Navbar -->
@include('includes._main_navigation')
{{-- <div class="content-wrapper"> --}}
    <div class="start_up_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">


                    <div class="header">
                        <br />

                        <h6>Utalanta links your Talent & Skills with Opportunities. Also
                            find Tasks & Jobs that best match your skills </h6>
                        <p class="lead">Login to Your Account</p>



                        @include('includes.auth._login_form')

                        <div class="bottom">
                            <a class="btn btn-secondary btn-block" href="/register">Register
                                Account</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" style=" padding-left: 50px">
                    <br />

                    <div style="padding-top: 20px">
                        <a href="#introVideoModal" class="video-btn" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/6YYfsu0PDOk" data-target="#introVideoModal">
                            <img src="/images/intro_video_artwork.jpg" class="img-fluid rounded">
                        </a>
                    </div>
                    {{-- <h3 style="font-size:26px">Where your Talent &amp; Skills Pays Off</h3> --}}
                </div>
            </div>


        </div>

        @include('includes._footer')


    </div>


    <div class=" modal fade" id="introVideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    {{--
</div> --}}


<!-- /.navbar -->

@endsection


@section('css-scripts')
<link href="dist/css/custom.css" rel="stylesheet">
<link rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
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
<script src="https://oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script>
    $(document).ready(function() {
        var $videoSrc;  
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });

        $('#introVideoModal').on('shown.bs.modal', function (e) {
             $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
        })
        
        $('#introVideoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src',$videoSrc); 
        }) 

           $('.details_form')
            .bootstrapValidator({
                // Only disabled elements are excluded
                // The invisible elements belonging to inactive tabs must be validated
                excluded: [':disabled'],
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
            })


    });

</script>

@endsection