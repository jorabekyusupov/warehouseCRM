<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="{{--company--}}">
    <meta name="keywords" content="{{--keywords--}}">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title_page') | CRM</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/icon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    @yield('vendor_css')
    <!-- END: Vendor CSS-->
    <style>


    </style>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

    <style>

    </style>
    @yield('theme_css')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-wizard.css')}}">
    @yield('page_css')

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    @yield('custom_css')
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav  navbar-shadow ">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="#">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons ">

            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            {{--            <li class="nav-item dropdown dropdown-language">--}}
            {{--                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"--}}
            {{--                   aria-haspopup="true" aria-expanded="false">--}}
            {{--                    <i class="flag-icon flag-icon-us"></i>--}}
            {{--                    <span class="selected-language">English</span>--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">--}}
            {{--                    <a class="dropdown-item" href="#" data-language="en">--}}
            {{--                        <i class="flag-icon flag-icon-us"></i>--}}
            {{--                        English--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            {{--            </li>--}}
            <li class="nav-item d-none d-lg-block" id="change-theme-type">
                <a class="nav-link nav-link-style">
                    <i class="ficon" data-feather="sun"></i>
                </a>
            </li>

            <li class="nav-item dropdown dropdown-notification me-25">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="bell"></i>
                    {{--                    <span class="badge rounded-pill bg-danger badge-up">5</span>--}}
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                            {{--                            <div class="badge rounded-pill badge-light-primary">6 New</div>--}}
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                    </li>
                    <li class="dropdown-menu-footer">
                        <a class="btn btn-primary w-100" href="#">Read all notifications</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">

                        </span>
                        <span class="user-status">

                        </span>
                    </div>
                    <span class="avatar">
                        <img class="round" src="{{asset('assets/img/icon.png')}}"
                             alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    {{--                    <a class="dropdown-item" href="page-profile.html">--}}
                    {{--                        <i class="me-50" data-feather="user"></i>--}}
                    {{--                        Profile--}}
                    {{--                    </a>--}}
                    {{--                    <div class="dropdown-divider"></div>--}}


                    <button class="dropdown-item w-100" id="logout_btn">
                        <i class="" data-feather="power"></i>
                        {{__('buttons.logout')}}
                    </button>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('layouts.menu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper  p-0">

        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="content-header">
            @yield('content-header')
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">

        <span class="float-md-start d-block d-md-inline-block mt-25">
            <div id="carousel-interval" class="carousel top-to-bottom d-inline-block" data-bs-ride="carousel"
                 data-bs-interval="5000">

                    <div class="carousel-inner" role="listbox">

                        @if(!empty($rates) && !empty($rates['banks'])  && !empty($rates['currencyRates']))
                            @foreach($rates['banks'] as $key=>$bank)
                                <div class="carousel-item  {{$key==0 ? 'active' : ''}}" style="font-size: 18px">
                                    <b> {{$bank}}</b>:
                                    <i class="fa-solid fa-arrow-up-right fa-rotate-180"></i>   <b
                                            class="font-semibold"> {{number_format($rates['currencyRates']['buy'][$bank]['rate'],0,'.',' ')}}</b>

                                    <i class="fa-solid fa-arrow-up-right "></i>  <b
                                            class="font-semibold"> {{number_format($rates['currencyRates']['sell'][$bank]['rate'],0,'.',' ')}}</b>

                                </div>
                            @endforeach

                        @endif
                    </div>

                </div>
        </span>
    <span class="float-md-end d-none d-md-block">
            Bismillahir Rohmanir Rohim
            <i data-feather="heart"></i>
        </span>

</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
<div class="modal fade" id="systemModal" tabindex="-1" role="dialog" aria-labelledby="systemModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " style="min-width: fit-content">
        <div class="modal-content">
            <ul class="list-unstyled modal-errors" style="display: none">
                <li class="list-group-item-danger list-group-item"></li>
            </ul>
            <div id="modal-content">

            </div>
        </div>
    </div>
</div>
<div class="modal fade " style="z-index: 1051!important;" id="settingOrderModal" tabindex="-1"
     aria-labelledby="settingOrderModalTitle"
     aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header setting-order-header">
                <h4 class="modal-title" id="settingOrderModalTitle">{{__('all.setting_order')}}</h4>
                <div class="form-group" style="margin-left: 20px !important;">
                    <select name="" id="setting-order-search" class="select2"></select>
                </div>
                <div class="form-group ml-1" style="margin-left: 5px ; ">
                    <button class="btn btn-success " id="OrderSearchBTN">
                        <i class="fa-solid fa-circle-check"></i>
                    </button>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="settingOrderForm">
                <div class="modal-body" id="settingOrderModalBody">

                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{__('buttons.close')}}</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="getBillModal" tabindex="-1" aria-labelledby="getBillModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header bill-header">
                <h4 class="modal-title" id="getBillModalLabel">Выставить счет</h4>
                <div class="form-group" style="margin-left: 20px !important;">
                    <select name="" id="get-bill-order" class="select2"></select>
                </div>
                <div class="form-group ml-1" style="margin-left: 5px ; ">
                    <button class="btn btn-success " id="billOrderSearchBTN">
                        <i class="fa-solid fa-circle-check"></i>
                    </button>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="bill-modal-body">

                </div>

                <div id="bill-graph">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="billModalSave">
                    {{__('buttons.save')}}
                </button>
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    {{__('buttons.close')}}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="getGraphDetailsModal" tabindex="-1" aria-labelledby="getGraphDetailsModalLabel"
     aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-4" id="getGraphDetailsModalBody">

            </div>
        </div>
    </div>
</div>

<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@yield('vendor_js')
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('app-assets/fonts/font-awesome/js/all.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

<script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.uz.js')}}"></script>
@yield('page_vendor_js')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>
@yield('theme_js')
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/extensions/ext-component-toastr.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-select2.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
<script src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/components/components-navs.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-wizard.js')}}"></script>

<script src="{{asset('assets/js/crud.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
@yield('page_js')
<!-- END: Page JS-->

<script>

    $(window).on('load', function () {


        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })


</script>
</body>
<!-- END: Body-->

</html>
