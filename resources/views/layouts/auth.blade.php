<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Trading Bots')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



    <!-- VENDORS -->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/ladda/dist/ladda-themeless.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/ionrangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/datatables/media/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/c3/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/chartist/dist/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/nprogress/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/jquery-steps/demo/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/dropify/dist/css/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/font-linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/font-icomoon/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/cleanhtmlaudioplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/cleanhtmlvideoplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/vendors/cleanhtmlvideoplayer/src/player.css')}}">
    <script src="{{asset('clean-ui-theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/popper.js/dist/umd/popper.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/spin.js/spin.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/ladda/dist/ladda.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/html5-form-validation/dist/jquery.validation.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-typeahead/dist/jquery.typeahead.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/bootstrap-show-password/bootstrap-show-password.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/ionrangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/datatables/media/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/c3/c3.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-countTo/jquery.countTo.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/d3-dsv/dist/d3-dsv.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/d3-time-format/dist/d3-time-format.js')}}"></script>
    <script src="{{asset('clean-ui-theme/vendors/techan/dist/techan.min.js')}}"></script>

    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/core/common/core.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/core/widgets/widgets.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/vendors/common/vendors.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/settings/common/settings.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/settings/themes/themes.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/menu-left/common/menu-left.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/menu-right/common/menu-right.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/top-bar/common/top-bar.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/footer/common/footer.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/pages/common/pages.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/ecommerce/common/ecommerce.cleanui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('clean-ui-theme/components/apps/common/apps.cleanui.css')}}">
    <script src="{{asset('clean-ui-theme/components/menu-left/common/menu-left.cleanui.js')}}"></script>
    <script src="{{asset('clean-ui-theme/components/menu-right/common/menu-right.cleanui.js')}}"></script>

    <!-- Theme Overrides -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme-overrides/css/auth.css')}}">

    @yield('styles')
</head>
<body class="config--vertical config--borderLess menu-left--colorful menu-left--visible theme--light menu-left--shadow">
    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-robot me-2"></i>Trading Bots
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="login login--fullscreen" style="background-image: url({{asset('clean-ui-theme/components/pages/common/img/login/1.jpg')}})">

        <div class="login__header">
            <div class="row">
                <div class="col-lg-8">
                    <div class="login__header__logo">
                        <a href="javascript: history.back();">
                            <img src="{{asset('clean-ui-theme/components/pages/common/img/logo-inverse.png')}}" alt="Clean UI Admin Template" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="login__header__menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="javascript: history.back();">&larr; Back</a></li>
                            <li class="list-inline-item active"><a href="javascript: void(0);">Login</a></li>
                            <li class="list-inline-item"><a href="javascript: void(0);">About</a></li>
                            <li class="list-inline-item"><a href="javascript: void(0);">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>


        <div class="login__footer text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a href="javascript: void(0);">Terms of Use</a></li>
                <li class="active list-inline-item"><a href="javascript: void(0);">Compliance</a></li>
                <li class="list-inline-item"><a href="javascript: void(0);">Confidential Information</a></li>
                <li class="list-inline-item"><a href="javascript: void(0);">Support</a></li>
                <li class="list-inline-item"><a href="javascript: void(0);">Contacts</a></li>
            </ul>
        </div>

    </div>

    <script>
        (function($) {
            "use strict";
            $(function () {

            // Form Validation
            $('#form-validation').validate({
                submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
                }
            });

            // Show/Hide Password
            $('.password').password({
                eyeClass: '',
                eyeOpenClass: 'icmn-eye',
                eyeCloseClass: 'icmn-eye-blocked'
            });

            // Switch to fullscreen
            $('.switch-to-fullscreen').on('click', function () {
                $('.login').toggleClass('login--fullscreen');
            })

            // Change BG
            $('.random-bg-image').on('click', function () {
                var min = 1, max = 5,
                next = Math.floor($('.random-bg-image').data('img')) + 1,
                final = next > max ? min : next;

                $('.random-bg-image').data('img', final);
                $('.login').data('img', final).css('backgroundImage', 'url(../../components/pages/common/img/login/' + final + '.jpg)');
            })

            });
        })(jQuery)
        </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>