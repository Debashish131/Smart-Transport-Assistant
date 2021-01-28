<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Smart Transport Assistant</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="ThemeDesign" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{"assets"}}/images/favicon.ico">

    <!-- App css -->
    <link href="{{"assets"}}/css/bootstrapblack.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{"assets"}}/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="{{"assets"}}/css/styleblack.css" rel="stylesheet" type="text/css"/>

</head>


<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>
<style>
    /* Google Fonts */
    @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

    .line-1 {
        position: relative;
        top: 50%;
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(255, 255, 255, .75);
        font-size: 100%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        transform: translateY(-50%);
    }

    /* Animation */
    .anim-typewriter {
        animation: typewriter 4s steps(44) 1s 1 normal both,
        blinkTextCursor 500ms steps(44) infinite normal;
    }

    @keyframes typewriter {
        from {
            width: 0;
        }
        to {
            width: 24em;
        }
    }

    @keyframes blinkTextCursor {
        from {
            border-right-color: rgba(255, 255, 255, .75);
        }
        to {
            border-right-color: transparent;
        }
    }
</style>

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
    <a href="{{url('/home')}}" class="text-dark"><i class="mdi mdi-home h1"></i></a>
</div>

<div class="account-pages">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div>
                    <div>
                        <a href="{{url('/home')}}" class="logo logo-admin"><img src="{{"assets"}}/images/logo.png"
                                                                                height="45"
                                                                                alt="logo"></a>
                    </div>

                    <br>


                    <p class="text-muted mb-4">
                        Nowadays carrying a driving licence and registration paper of vehicles are too irritating.
                        Sometimes we forget to carry them with us. And for this reason, we face many
                        problems and pay a lot of penalty. Whenever we live in 2020 but people of Bangladesh
                        are not even sincere about the traffic rules and regulation. Sometimes a bunch of
                        people park their cars or bike on the road for no reason for a long time, and the
                        traditional traffic jam problem of our Dhaka city will arise. So break this kind of stereotype
                        problem we bring &nbsp;<span style="color:yellow"> Smart Transport Assistant</span> &nbsp;
                        that sovle your regular problem</p>

                    <h5 class="font-14 text-muted mb-4">What you get :</h5>
                    <div>
                        {{--                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> ডিজিটাল পোর্টেবল ড্রাইভিং লাইসেন্স</p>--}}
                        {{--                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> ব্যক্তিগত তথ্য সুরক্ষিত রাখা</p>--}}
                        {{--                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> অবৈধ্য যানবাহনের ভুল পার্কিং এর জন্য অভিযোগ করা</p>--}}
                        {{--                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> ট্রাফিক আইনের প্রতি গুরুত্ব বৃদ্ধিতে এগিয়ে আসতে পারেন </p>--}}
                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Portable Digital Driving License</p>
                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Secure your personal Data</p>
                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Complain against wrong parking vehicle
                        </p>
                        {{--                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Increase traffic rules awareness </p>--}}
                    </div>
                </div>
            </div>


            <div class="col-lg-5 offset-lg-1">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="p-2">
                            <div class="text-center">
                                <a href="{{url('/home')}}" class="logo logo-admin"><img
                                        src="{{"assets"}}/images/logo.png"
                                        height="28" alt="logo"></a>
                            </div>
                        </div>

                        <div class="p-2">

                            <div class="user-thumb text-center m-b-30">
                                <img src="{{"assets"}}/images/users/avatar-1.jpg"
                                     class="rounded-circle img-thumbnail mx-auto d-block" alt="thumbnail">
                            </div>

                            <div class=" text-center row m-t-20">
                                <p class="line-1 anim-typewriter mb-4">Wellcome to Smart Transport Assistant</p>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="button"
                                            onclick="window.location='{{ url('/login') }}'">Login
                                    </button>

                                </div>
                            </div>
                            <div class="text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="button"
                                            onclick="window.location='{{ url('/register') }}'">Register
                                    </button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="{{url('/404')}}" class="text-muted">Not you?</a>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="{{url('/FAQ')}}">FAQ</a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>


<!-- jQuery  -->
<script src="{{"assets"}}/js/jquery.min.js"></script>
<script src="{{"assets"}}/js/bootstrap.bundle.min.js"></script>
<script src="{{"assets"}}/js/modernizr.min.js"></script>
<script src="{{"assets"}}/js/waves.js"></script>
<script src="{{"assets"}}/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="{{"assets"}}/js/app.js"></script>

</body>
</html>
