<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
{{--{{ asset('vendor/') }}--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('vendor/assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('vendor/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('vendor/assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('vendor/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('vendor/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('vendor/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- ========== Menu ========== -->
    @include('vendor.body.sidebar')

    <!-- ========== Left menu End ========== -->





    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- ========== Topbar Start ========== -->
        @include('vendor.body.nav')

        <!-- ========== Topbar End ========== -->

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                            <i class="fe-heart font-22 avatar-title text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                            <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                            <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                            <p class="text-muted mb-1 text-truncate">Conversion</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                            <i class="fe-eye font-22 avatar-title text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                            <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->



            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        @include('vendor.body.footer')

        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="{{ asset('vendor/assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('vendor/assets/js/app.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('vendor/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('vendor/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

<!-- Dashboar 1 init js-->
<script src="{{ asset('vendor/assets/js/pages/dashboard-1.init.js') }}"></script>
@stack('scripts')

</body>

</html>
