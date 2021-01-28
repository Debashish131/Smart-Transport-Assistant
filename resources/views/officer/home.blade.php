@extends('officer_master')

@section('maincontent')

    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Total User</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\user::all()->count()}}</h4>
                    </div>
                    <div>
                        {{--                        <span class="badge badge-light text-info"> +11% </span> <span--}}
                        {{--                            class="ml-2">From previous period</span>--}}
                        <br>

                    </div>

                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                    </div>
                    {{--                    <p class="font-14 m-0">Last : 1447</p>--}}
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Total Complain</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\complain::all()->count()}}</h4>
                    </div>
                    <div>
                        {{--                        <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>--}}
                        <br></div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                    </div>
                    {{--                    <p class="font-14 m-0">Last : $47,596</p>--}}
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-pink mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">DL Application</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\RegistrationForRC::all()->count()}}</h4>
                    </div>
                    <div>
                        {{--                        <span class="badge badge-light text-primary"> 0% </span> <span--}}
                        {{--                            class="ml-2">From previous period</span>--}}<br>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                    </div>
                    {{--                    <p class="font-14 m-0">Last : 15.8</p>--}}
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Emergeny Report</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\emergency::all()->count()}}</h4>
                    </div>
                    <div>
                        {{--                        <span class="badge badge-light text-info"> +89% </span> <span--}}
                        {{--                            class="ml-2">From previous period</span>--}}<br>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                    </div>
                    {{--                    <p class="font-14 m-0">Last : 1776</p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Social Source</h4>
                    <div class="text-center">
                        <div class="social-source-icon lg-icon mb-3">
                            <div class="text-center">
                                <img src="{{"assets"}}/images/favicon.ico"
                                     class="rounded-circle img-thumbnail mx-auto d-block" alt="thumbnail" height=".5px" >
                            </div>
                        </div>
                        <h5 class="font-16"><a href="#" class="text-dark">SMART TRANSPORT ASSISTANT - <br><span
                                    class="text-muted">125 Engage</span> </a></h5>
                        <p class="text-muted"></p>
                        <a href="#" class="text-primary font-14">Learn more <i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-facebook h5 bg-primary"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">125 Engage</p>
                                <h6>Facebook</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-twitter h5 bg-info"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">112 Engage</p>
                                <h6>Twitter</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-instagram h5 bg-pink"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">104 Engage</p>
                                <h6>Instagram</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Last User</h4>
                <ol class="activity-feed mb-0">

                                            @foreach($user->take(5) as $cal)

                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span
                                                            class="date text-white-50"> {{$cal->created_at->diffForHumans(),'desc'}}</span>
                                                        <span class="activity-text"> Last User: {{$cal->name}}</span>
                                                    </div>
                                                </li>

                                            @endforeach
                </ol>

            </div>
        </div>
    </div>

    </div>
@endsection
