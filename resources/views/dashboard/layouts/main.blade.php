<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}">
    <!-- jquery.vectormap css -->
    <link href="{{ asset('dashboard/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboard/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
  </head>

  <body data-topbar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
      <!-- Topbar Start -->
      @include('dashboard.partials.topbar')     
      <!-- Left Sidebar Start -->
      @include('dashboard.partials.sidebar') 

      <!-- Start right Content here -->
      @yield('content')

      <!-- Right Sidebar -->
        <div class="right-bar">
          <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">        
                <h5 class="m-0 me-2">Налаштування</h5>
                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>
            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Вибір теми</h6>
            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ asset('dashboard/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="layout-1">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Світла тема</label>
                </div>
                <div class="mb-2">
                    <img src="{{ asset('dashboard/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('dashboard/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('dashboard/css/app-dark.min.css') }}">
                    <label class="form-check-label" for="dark-mode-switch">Темна тема</label>
                </div>
                <div class="mb-2">
                    <img src="{{ asset('dashboard/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="custom-mode-switch" data-appStyle="{{ asset('dashboard/css/app-rtl.min.css') }}">
                    <label class="form-check-label" for="rtl-mode-switch">Кастомна тема</label>
                </div>
            </div>
          </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('dashboard/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/node-waves/waves.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ asset('dashboard/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- jquery.vectormap map -->
        <script src="{{ asset('dashboard/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('dashboard/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>     
        <!-- Responsive examples -->
        <script src="{{ asset('dashboard/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('dashboard/js/app.js') }}"></script>
  </body>

</html>