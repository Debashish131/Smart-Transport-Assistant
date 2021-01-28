<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Smart Transport Assistant</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="shortcut icon" href="{{"assets"}}/images/favicon.ico">
    <link href="{{"assets"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/style.css" rel="stylesheet" type="text/css">

    {{--    Only for Approve button--}}
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}

    <link href="{{"assets"}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{"assets"}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{"assets"}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <link href="{{"assets"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/style.css" rel="stylesheet" type="text/css">

    {{--Moris CHart--}}
    <link rel="stylesheet" href="{{"assets"}}/plugins/morris/morris.css">

    <link href="{{"assets"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets"}}/css/style.css" rel="stylesheet" type="text/css">

    {{--    Sweet aleart--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    {{--    Toastr css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

use Illuminate\Support\Facades\DB;
$user = DB::table('Users')
->latest('name')
->first();

<body class="fixed-left">

<style>

    .approve {

        position: absolute;
        right: 0;
        width: 100px;

    }
</style>

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
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">
                <a href="{{url('/home')}}" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="{{url('/admin')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/userdetails')}}" class="waves-effect"><i
                                class="far fa-id-card "></i><span>User Application Details</span>
                        </a>

                    </li>

                    <li>
                        <a href="{{url('/uservehicledetails')}}" class="waves-effect"><i
                                class="fas fa-car"></i><span> Vehicle Details </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/allcomplain')}}" class="waves-effect"><i
                                class="far fa-sticky-note"></i><span> Complain Details </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/allpayment')}}" class="waves-effect"><i
                                class="fab fa-paypal"></i><span> Payment Details </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/alluser')}}" class="waves-effect"><i
                                class="fas fa-user-tie "></i><span> Register User Details </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/VehicleSearch')}}" class="waves-effect"><i
                                class="dripicons-search"></i><span> Vehicle Search</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/feedbackUser')}}" class="waves-effect"><i
                                class="far fa-envelope-open"></i><span> User Feedback </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/userRenew')}}" class="waves-effect"><i
                                class="fas fa-address-card"></i><span> User Vehicle Renew </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/userEmergency')}}" class="waves-effect"><i
                                class="fas fa-user-injured"></i><span> Emergency Help </span>
                        </a>
                    </li>


                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <div class="topbar-left	d-none d-lg-block">
                    <div class="text-center">
                        <a href="{{url('/dashboard')}}" class="logo"><img src="assets/images/logo.png" height="22"
                                                                          alt="logo"></a>
                    </div>
                </div>

                <nav class="navbar-custom">

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search"/>
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Notification (5)</h5>
                                </div>

                                <div class="slimscroll-noti">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                        </div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i>
                                        </div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                        </p>
                                    </a>

                                </div>


                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>


                        <li class="list-inline-item dropdown notification-list nav-user">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1">{{ Auth::user()->name }}<i
                                        class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span
                                        class="badge badge-success float-right m-t-5">5</span><i
                                        class="dripicons-gear text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                {{--                                <a class="dropdown-item" href="{{ route('logout') }}"><i--}}
                                {{--                                        class="dripicons-exit text-muted"></i> Logout</a>--}}

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>


                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title m-0">Wellcome Sir</h4>
                                    </div>
                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="float-right d-none d-md-block">--}}
                                {{--                                            <div class="dropdown">--}}
                                {{--                                                <button class="btn btn-primary dropdown-toggle" type="button"--}}
                                {{--                                                        data-toggle="dropdown" aria-haspopup="true"--}}
                                {{--                                                        aria-expanded="false">--}}
                                {{--                                                    <i class="ti-settings mr-1"></i> Settings--}}
                                {{--                                                </button>--}}
                                {{--                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">--}}
                                {{--                                                    <a class="dropdown-item" href="#">Action</a>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Another action</a>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Something else here</a>--}}
                                {{--                                                    <div class="dropdown-divider"></div>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Separated link</a>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end page-title-box -->
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    @yield('maincontent')

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        © 2020 Smart Transport Assistant <span class="d-none d-md-inline-block"> - Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Designer Canvas.</span>
    </footer>

</div>
<!-- End Right content here -->

<!-- END wrapper -->

{{--Toastr--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Alertify js -->
<script src="assets/plugins/alertify/js/alertify.js"></script>
<script src="assets/pages/alertify-init.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{"assets"}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{"assets"}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{"assets"}}/pages/datatables.init.js"></script>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
{{--<script language="javascript" type="text/javascript">--}}
{{--    function approvePost(id) {--}}
{{--        // $("approval").submit();--}}
{{--        document.getElementById('approval').submit();--}}
{{--    }--}}
{{--</script>--}}


{{--Sweet aleart--}}

<script>
    $(document).ready(function () {
        $(document).on('click', '#approve', function () {
            var actionTo = $(this).attr('herf');
            var token = $(this).attr('data-token');
            var id = $(this).attr('data-id');
            swal({
                    title: "Are you sure approve?",
                    // text: "Please ensure and then confirm!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-primary',
                    confirmButtonText: "Yes, Approve it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: !0
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({

                            url: actionTo,
                            type: 'POST',
                            data: {id: id, _token: token},

                            success: function (data) {

                                swal(
                                    {
                                        title: "Approved",
                                        type: "Success"
                                    },
                                    function (isConfirm) {
                                        if (isConfirm) {
                                            $('.' + id).fadeOut();
                                        }
                                    });
                            }

                        });
                    } else {
                        swal("Cancel", "", "error");
                    }

                });
            return false;
        });
    });


</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<
/body>
< /html>
