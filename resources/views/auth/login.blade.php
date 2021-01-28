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
                        <a href="{{url('/home')}}" class="logo logo-admin"><img src="{{"assets"}}/images/logo.png"
                                                                                height="45" alt="logo"></a>
                    </div>
                    {{--                    <p class="text-muted mb-4">--}}
                    {{--                        বর্তমান যুগে ড্রাইভিং লাইসেন্স এবং যানবাহনের রেজিস্ট্রেশন পেপার বহন করা খুব বিরক্তিকর।--}}
                    {{--                        কখনও কখনও আমরা তাদের আমাদের সাথে রাখতে ভুলে যাই এবং এই কারণেই, আমরা অনেকেই সমস্যার মুখোমুখি হই--}}
                    {{--                        এবং অনেক জরিমানা দিয়ে থাকি। আমরা যদিও ডিজিটাল জগতে বাস করি তবুও আমাদের মানুষ ট্র্যাফিক নিয়ম এবং--}}
                    {{--                        নিয়ন্ত্রণ সম্পর্কে এতটা গুরুত্বশীল নয়।--}}
                    {{--                        বিভিন্ন রাস্তায় অযথা এখানে সেখানে পার্কিং এর জন্য ঢাকার সেই চিরচারিত ট্রাফিক জ্যাম বেড়েই যাচ্ছে--}}
                    {{--                        ,তাই এইসব পুরোনো সমস্যার সমাধানের জন্য আমরা এনেছি &nbsp;<span style="color: #bd2130"> Smart Transport Assistant</span></p>--}}
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
                            <h4 class="text-muted float-right font-18 mt-4">Sign In</h4>
                            <div>
                                <a href="{{url('/home')}}" class="logo logo-admin"><img
                                        src="{{"assets"}}/images/logo.png" height="28" alt="logo"></a>
                            </div>
                        </div>

                        <div class="p-2">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
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
                                               name="password"
                                               required autocomplete="current-password"
                                               placeholder="Enter your Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" style="color: white"
                                               href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="{{'/register'}}" class="text-muted"><i class="mdi mdi-account-circle"></i>
                                        Create an account</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="{{'/FAQ'}}" class="text-muted"><i class="mdi mdi-account-circle"></i>
                                        FAQ</a>
                                </div>
                            </form>
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
