<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzone/min/dropzone.min.css')}}">

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
            <div class="bg-primary-op">
                <div class="content-header">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="be_pages_generic_profile.html">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="text-white font-w600" href="be_pages_generic_profile.html">George Taylor</a>
                        <div class="text-white-75 font-size-sm">Full Stack Developer</div>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#so-settings">
                            <i class="fa fa-fw fa-cog"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-people">
                            <i class="far fa-fw fa-user-circle"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-profile">
                            <i class="far fa-fw fa-edit"></i>
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Settings Tab -->
                    <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel">
                        <div class="block mb-0">
                            <!-- Color Themes -->
                            <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny text-center">
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">
                                            Default
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                                            xWork
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                                            xModern
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                                            xEco
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                            xSmooth
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                                            xInspire
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                                            xDream
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                                            xPro
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                                            xPlay
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Color Themes -->

                            <!-- Sidebar -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sidebar -->

                            <!-- Header -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Header</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny text-center mb-2">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Header -->

                            <!-- Content -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Content</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Content -->

                            <!-- Layout API -->
                            <div class="block-content row justify-content-center border-top">
                                <div class="col-9">
                                    <a class="btn btn-block btn-hero-primary" href="be_layout_api.html">
                                        <i class="fa fa-fw fa-flask mr-1"></i> Layout API
                                    </a>
                                </div>
                            </div>
                            <!-- END Layout API -->
                        </div>
                    </div>
                    <!-- END Settings Tab -->

                    <!-- People -->
                    <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel">
                        <div class="block mb-0">
                            <!-- Online -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Online</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Lisa Jenkins</div>
                                                <div class="font-size-sm text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Thomas Riley</div>
                                                <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Laura Carr</div>
                                                <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Online -->

                            <!-- Busy -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Busy</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Andrea Gardner</div>
                                                <div class="font-w400 font-size-sm text-muted">UI Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Busy -->

                            <!-- Away -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Away</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">David Fuller</div>
                                                <div class="font-w400 font-size-sm text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Danielle Jones</div>
                                                <div class="font-w400 font-size-sm text-muted">Writer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Away -->

                            <!-- Offline -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Offline</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Justin Hunt</div>
                                                <div class="font-w400 font-size-sm text-muted">Teacher</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Amber Harvey</div>
                                                <div class="font-w400 font-size-sm text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Carol Ray</div>
                                                <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="be_pages_generic_profile.html">
                                            <div class="mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Justin Hunt</div>
                                                <div class="font-w400 font-size-sm text-muted">UX Specialist</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Offline -->

                            <!-- Add People -->
                            <div class="block-content row justify-content-center border-top">
                                <div class="col-9">
                                    <a class="btn btn-block btn-hero-primary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-plus mr-1"></i> Add People
                                    </a>
                                </div>
                            </div>
                            <!-- END Add People -->
                        </div>
                    </div>
                    <!-- END People -->

                    <!-- Profile -->
                    <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel">
                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                            <div class="block mb-0">
                                <!-- Personal -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Personal</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" readonly class="form-control" id="staticEmail" value="Admin">
                                    </div>
                                    <div class="form-group">
                                        <label for="so-profile-name">Name</label>
                                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                    </div>
                                    <div class="form-group">
                                        <label for="so-profile-email">Email</label>
                                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                    </div>
                                </div>
                                <!-- END Personal -->

                                <!-- Password Update -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Password Update</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="form-group">
                                        <label for="so-profile-password">Current Password</label>
                                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="so-profile-new-password">New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="so-profile-new-password-confirm">Confirm New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                    </div>
                                </div>
                                <!-- END Password Update -->

                                <!-- Options -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Options</span>
                                </div>
                                <div class="block-content">
                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                        <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                                        <label class="custom-control-label" for="so-settings-status">Online Status</label>
                                    </div>
                                    <p class="text-muted font-size-sm">
                                        Make your online status visible to other users of your app
                                    </p>
                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                        <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                                        <label class="custom-control-label" for="so-settings-notifications">Notifications</label>
                                    </div>
                                    <p class="text-muted font-size-sm">
                                        Receive desktop notifications regarding your projects and sales
                                    </p>
                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                        <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                                        <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>
                                    </div>
                                    <p class="text-muted font-size-sm">
                                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                    </p>
                                </div>
                                <!-- END Options -->

                                <!-- Submit -->
                                <div class="block-content row justify-content-center border-top">
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-block btn-hero-primary">
                                            <i class="fa fa-fw fa-save mr-1"></i> Save
                                        </button>
                                    </div>
                                </div>
                                <!-- END Submit -->
                            </div>
                        </form>
                    </div>
                    <!-- END Profile -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="font-w600 text-white tracking-wide" href="index.html">
                            <span class="smini-visible">
                                D<span class="opacity-75">x</span>
                            </span>
                    <span class="smini-hidden">
                                B52 <span class="opacity-75">Hotel</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');" href="javascript:void(0)">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </a>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('home')}}">
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" >
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Room</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('roomtype.index')}}">
                                    <span class="nav-main-link-name">View All Room</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('roomAdmin')}}">
                                    <span class="nav-main-link-name">Add Room Details</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('roomAdmin')}}">
                                    <span class="nav-main-link-name">Edit Room Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" >
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Booking</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('booking.index')}}">
                                    <span class="nav-main-link-name">View Booking</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('booking.create')}}">
                                    <span class="nav-main-link-name">New Booking</span>
                                </a>
                            </li>
                        </ul>
{{--                        <ul class="nav-main-submenu">--}}
{{--                            <li class="nav-main-item">--}}
{{--                                <a class="nav-main-link" href="#">--}}
{{--                                    <span class="nav-main-link-name">Edit Booking</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" >
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Blog</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('blog.index')}}">
                                    <span class="nav-main-link-name">Manage Blog</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('blog.create')}}">
                                    <span class="nav-main-link-name">New Blog</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" >
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Account</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('account.index')}}">
                                    <span class="nav-main-link-name">View Account</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <span class="nav-main-link-name">New Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                        <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="be_pages_generic_profile.html">
                                <i class="far fa-fw fa-user mr-1"></i> Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                                <span class="badge badge-primary badge-pill">3</span>
                            </a>
                            <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                            </a>
                            <div role="separator" class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="far fa-fw fa-building mr-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                                <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="badge badge-secondary badge-pill">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">App was updated to v5.6!</div>
                                        <div class="text-muted font-italic">3 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-info"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                        <div class="text-muted font-italic">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Server backup failed to complete!</div>
                                        <div class="text-muted font-italic">30 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                        <div class="text-muted font-italic">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">New Sale! + $30</div>
                                        <div class="text-muted font-italic">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="far fa-fw fa-list-alt"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix 3.2</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

</div>
<!--a END Page Continer -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    booking. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->

<script src="{{asset('assets/js/dashmix.core.min.js')}}"></script>
<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick-carousel/slick.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dropzone/min/dropzone.min.js')}}"></script>

<!-- Page JS Helpers (BS Datepicker + Ion Range Slider + Slick Slider plugins) -->
<script>jQuery(function(){Dashmix.helpers(['datepicker', 'rangeslider', 'slick']);});</script>
<script>jQuery(function(){Dashmix.helpers(['select2', 'maxlength', 'ckeditor']);});</script>

</body>
</html>
