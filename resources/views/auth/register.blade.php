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

    <link rel="shortcut icon" href="{{"assets"}}/images/favicon.ico">

    <link href="{{"assets"}}/css/bootstrapblack.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/iconsblack.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/styleblack.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

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

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
    <a href="{{url("/home")}}" class="text-dark"><i class="mdi mdi-home h1"></i></a>
</div>

<div class="account-pages">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div>
                    <div>
                        <a href="index.html" class="logo logo-admin"><img src="{{"assets"}}/images/logo.png"
                                                                          height="28" alt="logo"></a>
                    </div>
                    <h5 class="font-14  mb-4">Smart Transport Assistant</h5>
                    <i class="text-muted mb-4">
                        Nowadays carrying a driving licence and registration paper of vehicles are too irritating.
                        Sometimes we forget to carry them with us. And for this reason, we face many
                        problems and pay a lot of penalty. Whenever we live in 2020 but people of Bangladesh
                        are not even sincere about the traffic rules and regulation. Sometimes a bunch of
                        people park their cars or bike on the road for no reason for a long time, and the
                        traditional traffic jam problem of our Dhaka city will arise. So break this kind of stereotype
                        problem we bring &nbsp;<span style="color: #bd2130"> Smart Transport Assistant</span> &nbsp;
                        that sovle your regular problem</i>
                    <br>
                    <br>

                    <h5 class="font-14 text-muted mb-4">What you get :</h5>
                    <div>

                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Portable Digital Driving License</p>
                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Secure your personal Data</p>
                        <p><i class="mdi mdi-arrow-right text-primary mr-2"></i> Complain against wrong parking vehicle
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="p-2">
                            <h4 class="text-muted float-right font-18 mt-4">Register</h4>
                            <div>
                                <a href="{{url('/home')}}" class="logo logo-admin"><img
                                        src="{{"assets"}}/images/logo.png" height="28" alt="logo"></a>
                            </div>
                        </div>

                        <div class="p-2">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus
                                               placeholder="Enter Your Name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Enter your Email ID">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               placeholder="Enter Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Enter Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20 text-center">
                                <a href="{{url('/login')}}" class="text-muted">Already have account?</a>
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
<script src="{{"assets"}}/js/detect.js"></script>
<script src="{{"assets"}}/js/fastclick.js"></script>
<script src="{{"assets"}}/js/jquery.slimscroll.js"></script>
<script src="{{"assets"}}/js/jquery.blockUI.js"></script>
<script src="{{"assets"}}/js/waves.js"></script>
<script src="{{"assets"}}/js/jquery.nicescroll.js"></script>
<script src="{{"assets"}}/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="{{"assets"}}/js/app.js"></script>

</body>
</html>

