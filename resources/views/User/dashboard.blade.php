@extends('User.master')


@section('maincontent')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger mini-stat">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Complain</h6>
                        <h4 class="mb-3 mt-0 float-right">
                            {{$count = \App\complain::where([['creator', '=', Auth::user()->name]])->count()}}</h4>
                    </div>


                    {{--                    @forelse($complain as $val)--}}
                    {{--                        <div>--}}
                    {{--                            <span--}}
                    {{--                                class="badge badge-light text-info">{{$recent = \App\complain::where('created_at', $recent)->first()}}</span>--}}
                    {{--                            <span--}}
                    {{--                                class="ml-2">From previous period</span>--}}
                    {{--                        </div>--}}
                    {{--                    @empty--}}
                    {{--                        <span class="badge badge-light text-info">You don't complain against </span> <span--}}
                    {{--                            class="ml-2">From previous period</span>--}}
                    {{--                    @endforelse--}}
                    <span class="badge badge-light text-danger"> +29% </span> <span class="ml-2">From previous </span>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi mdi-timer  h5"></i></a>
                    </div>
                    @forelse($complain->slice(0, 1) as $cal)
                        <p class="font-14 m-0">Last update: {{$cal->created_at->diffForHumans(),'desc'}}</p>
                    @empty
                        No complain added yet!
                    @endforelse
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mini-stat">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Application</h6>
                        <h4 class="mb-3 mt-0 float-right">
                            {{$count = \App\RegistrationForRC::where([['creator', '=', Auth::user()->name]])->count()}}</h4>
                    </div>
                    {{--                    @foreach($application ?? '' as $app)--}}
                    {{--                        <h4 class="mb-3 mt-0 float-right">{{$app->count( )}}</h4>--}}
                    {{--                    @endforeach--}}
                    <div>
                        <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                    </div>
                    @forelse($application->slice(0, 1) as $val)
                        <p class="font-14 m-0">Last
                            update:{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</p>
                    @empty
                        <p class="font-14 m-0">Last update:You don't application yet</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-pink mini-stat">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Vehicle</h6>
                        @forelse($vehicle as $val)
                            <h4 class="mb-3 mt-0 float-right">{{$val->owner->Creator}}</h4>

                        @forelse($application as $app)
                        @if($app->Is_approved==0)
                            <span class="badge badge-light text-primary" style="color: #bd2130">Approve permission Pending</span>
                        @else
                                <div>

                                <span
                                    class="badge badge-light text-primary"> User vehicle Number {{$val->Vehicle_number}} </span>
                                </div>
                            @endif</p>
                    @empty
                        No data added

                    @endforelse
                                    @empty
                                        <br> No vehicle added yet!
                                    @endforelse

                    </div>

                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i
                                class="mdi mdi-tag-text-outline h5"></i></a>
                    </div>
                    @forelse($vehicle as $val)
                        <p class="font-14 m-0">Expire date
                            :{{\Carbon\Carbon::parse($val['Expire_date'])->diffForHumans() }}</p>
                    @empty
                        No data found
                    @endforelse
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mini-stat">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-100">Payment Due</h6>
                        <h4 class="mb-3 mt-0 float-right">
                            @forelse($userTest as $val)
                                {{$val->penalty}}
                            @empty
                                No data found
                            @endforelse
                            </h4>

                    </div>

                    <div>
                        <span class="badge badge-light text-info"> +89% </span> <span
                            class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-100"><i class="mdi mdi-briefcase-check h5"></i></a>
                    </div>
                    @forelse($userTest as $val)
                        <p class="font-14 m-0">Assign at
                            :{{\Carbon\Carbon::parse($val['update_at'])->diffForHumans() }}</p>
                    @empty
                        No data found
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Application Status</h4>
                    <div class="latest-massage">
                        <a href="#" class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-success text-center rounded-circle text-white mt-0">D</h5>
                                </div>
                                @forelse($application  as $app)
                                    <div class="message-time">
                                        <p class="m-0 text-muted">{{\Carbon\Carbon::parse($app['created_at'])->diffForHumans() }}</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">{{$app->Creator}}</h5>
                                        <p class="font-8 mt-0 text-dark">Father Name: {{$app->FatherName}}</p>
                                        <p class="font-8 mt-0 text-dark">Blood Group:{{$app->BloodGroup}}</p>
                                        <p class="font-8 mt-0 text-dark">Occupation:{{$app->Occupation}}</p>
                                        <p class="font-8 mt-0 text-dark">Address :{{$app->Address}}</p>
                                        <p class="font-8 mt-0 text-dark">Email :{{$app->Email}}</p>
                                        <p class="font-8 mt-0 text-dark">Approved : @if($app->Is_approved==0)
                                                <span style="color: #bd2130">Pending</span>
                                            @else
                                                <span style="color: #00b300">Approve</span>
                                            @endif</p>

                                    </div>
                                @empty
                                    No application Yet

                                @endforelse

                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                    <ol class="activity-feed mb-0">

                        {{--                        @foreach($app->take(5) as $cal)--}}

                        {{--                            <li class="feed-item">--}}
                        {{--                                <div class="feed-item-list">--}}
                        {{--                                    <span--}}
                        {{--                                        class="date text-white-50"> {{$cal->created_at->diffForHumans(),'desc'}}</span>--}}
                        {{--                                    <span class="activity-text"> Last Complain About: {{$cal->offence}}</span>--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}

                        {{--                        @endforeach--}}
                    </ol>

                </div>
            </div>
        </div>
        <!-- end col -->

    {{--        <div class="col-xl-4">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h4 class="mt-0 header-title mb-4">Social Source</h4>--}}
    {{--                    <div class="text-center">--}}
    {{--                        <div class="social-source-icon lg-icon mb-3">--}}
    {{--                            <i class="mdi mdi-facebook h2 bg-primary"></i>--}}
    {{--                        </div>--}}
    {{--                        <h5 class="font-16"><a href="#" class="text-dark">Facebook - <span--}}
    {{--                                    class="text-muted">125 sales</span> </a></h5>--}}
    {{--                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae--}}
    {{--                            sapien ut libero venenatis tincidunt.</p>--}}
    {{--                        <a href="#" class="text-primary font-14">Learn more <i--}}
    {{--                                class="mdi mdi-chevron-right"></i></a>--}}
    {{--                    </div>--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-4">--}}
    {{--                            <div class="social-source text-center mt-3">--}}
    {{--                                <div class="social-source-icon mb-2">--}}
    {{--                                    <i class="mdi mdi-facebook h5 bg-primary"></i>--}}
    {{--                                </div>--}}
    {{--                                <p class="font-14 text-muted mb-2">125 sales</p>--}}
    {{--                                <h6>Facebook</h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-4">--}}
    {{--                            <div class="social-source text-center mt-3">--}}
    {{--                                <div class="social-source-icon mb-2">--}}
    {{--                                    <i class="mdi mdi-twitter h5 bg-info"></i>--}}
    {{--                                </div>--}}
    {{--                                <p class="font-14 text-muted mb-2">112 sales</p>--}}
    {{--                                <h6>Twitter</h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-4">--}}
    {{--                            <div class="social-source text-center mt-3">--}}
    {{--                                <div class="social-source-icon mb-2">--}}
    {{--                                    <i class="mdi mdi-instagram h5 bg-pink"></i>--}}
    {{--                                </div>--}}
    {{--                                <p class="font-14 text-muted mb-2">104 sales</p>--}}
    {{--                                <h6>Instagram</h6>--}}

    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Document files</h4>
                    <table class="table table-striped  mb-0">
                        <tbody>
                        <tr>
                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                            <td>
                                <h6 class="mt-0">2020</h6>
                                <p class="text-muted mb-0">DL Form File</p></td>
                            <td>
                                <a href="{{url('/download')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                            <td>
                                <h6 class="mt-0">2020</h6>
                                <p class="text-muted mb-0">RC Form File</p></td>
                            <td>
                                <a href="{{url('/download2')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
