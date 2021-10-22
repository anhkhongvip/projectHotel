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
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

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
                                Dash<span class="opacity-75">mix</span>
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
                        <a class="nav-main-link active" href="be_pages_dashboard.html">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">3</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Page Kits</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Generic</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_blank.html">
                                            <span class="nav-main-link-name">Blank</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                            <span class="nav-main-link-name">Blank (Block)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_search.html">
                                            <span class="nav-main-link-name">Search</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_profile.html">
                                            <span class="nav-main-link-name">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                                            <span class="nav-main-link-name">Profile Edit</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                            <span class="nav-main-link-name">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                            <span class="nav-main-link-name">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_faq.html">
                                            <span class="nav-main-link-name">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                            <span class="nav-main-link-name">Upgrade Plan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">e-Commerce</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_orders.html">
                                            <span class="nav-main-link-name">Orders</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_order.html">
                                            <span class="nav-main-link-name">Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_products.html">
                                            <span class="nav-main-link-name">Products</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                                            <span class="nav-main-link-name">Product Edit</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_ecom_customer.html">
                                            <span class="nav-main-link-name">Customer</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Projects</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_projects_dashboard.html">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_projects_tasks.html">
                                            <span class="nav-main-link-name">Project Tasks</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_projects_create.html">
                                            <span class="nav-main-link-name">Create</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_projects_edit.html">
                                            <span class="nav-main-link-name">Edit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Jobs</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_jobs_dashboard.html">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_jobs_listing.html">
                                            <span class="nav-main-link-name">Listing</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_jobs_apply.html">
                                            <span class="nav-main-link-name">Apply</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_jobs_post.html">
                                            <span class="nav-main-link-name">Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Education</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_education_dashboard.html">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_education_course.html">
                                            <span class="nav-main-link-name">Course</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_education_authors.html">
                                            <span class="nav-main-link-name">Authors</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Forum</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_forum_categories.html">
                                            <span class="nav-main-link-name">Categories</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_forum_topics.html">
                                            <span class="nav-main-link-name">Topics</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                            <span class="nav-main-link-name">Discussion</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Blog</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_classic.html">
                                            <span class="nav-main-link-name">Classic</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_list.html">
                                            <span class="nav-main-link-name">List</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_grid.html">
                                            <span class="nav-main-link-name">Grid</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_story.html">
                                            <span class="nav-main-link-name">Story</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                            <span class="nav-main-link-name">Story Cover</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_post_manage.html">
                                            <span class="nav-main-link-name">Manage Posts</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_post_add.html">
                                            <span class="nav-main-link-name">Add Post</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_pages_blog_post_edit.html">
                                            <span class="nav-main-link-name">Edit Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Boxed Backend</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_dashboard.html">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_search.html">
                                            <span class="nav-main-link-name">Search</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_simple_1.html">
                                            <span class="nav-main-link-name">Simple 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_simple_2.html">
                                            <span class="nav-main-link-name">Simple 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_image_1.html">
                                            <span class="nav-main-link-name">Image 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_image_2.html">
                                            <span class="nav-main-link-name">Image 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_video_1.html">
                                            <span class="nav-main-link-name">Video 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="bd_video_2.html">
                                            <span class="nav-main-link-name">Video 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Special</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="op_maintenance.html">
                                            <span class="nav-main-link-name">Maintenance</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="op_status.html">
                                            <span class="nav-main-link-name">Status</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="op_installation.html">
                                            <span class="nav-main-link-name">Installation</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="op_coming_soon.html">
                                            <span class="nav-main-link-name">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="op_coming_soon_2.html">
                                            <span class="nav-main-link-name">Coming Soon 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Base</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-border-all"></i>
                            <span class="nav-main-link-name">Blocks</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_blocks_styles.html">
                                    <span class="nav-main-link-name">Styles</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_blocks_options.html">
                                    <span class="nav-main-link-name">Options</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_blocks_forms.html">
                                    <span class="nav-main-link-name">Forms</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_blocks_themed.html">
                                    <span class="nav-main-link-name">Themed</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_blocks_api.html">
                                    <span class="nav-main-link-name">API</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-boxes"></i>
                            <span class="nav-main-link-name">Widgets</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_tiles.html">
                                    <span class="nav-main-link-name">Tiles</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_stats.html">
                                    <span class="nav-main-link-name">Statistics</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_media.html">
                                    <span class="nav-main-link-name">Media</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_users.html">
                                    <span class="nav-main-link-name">Users</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_blog.html">
                                    <span class="nav-main-link-name">Blog</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_widgets_various.html">
                                    <span class="nav-main-link-name">Various</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-vector-square"></i>
                            <span class="nav-main-link-name">Layout</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Page</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_page_default.html">
                                            <span class="nav-main-link-name">Default</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_page_flipped.html">
                                            <span class="nav-main-link-name">Flipped</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                            <span class="nav-main-link-name">Native Scrolling</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Main Content</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                            <span class="nav-main-link-name">Full Width</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                            <span class="nav-main-link-name">Narrow</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                            <span class="nav-main-link-name">Boxed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Side Content</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_content_side_left.html">
                                            <span class="nav-main-link-name">Left</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_content_side_right.html">
                                            <span class="nav-main-link-name">Right</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Hero</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Color</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_color_dark.html">
                                                    <span class="nav-main-link-name">Dark</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_color_light.html">
                                                    <span class="nav-main-link-name">Light</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Image</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_image_dark.html">
                                                    <span class="nav-main-link-name">Dark</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_image_light.html">
                                                    <span class="nav-main-link-name">Light</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Video</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_video_dark.html">
                                                    <span class="nav-main-link-name">Dark</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_hero_video_light.html">
                                                    <span class="nav-main-link-name">Light</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Header</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Fixed</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                                    <span class="nav-main-link-name">Light</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
                                                    <span class="nav-main-link-name">Light Glass</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                                    <span class="nav-main-link-name">Dark</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
                                                    <span class="nav-main-link-name">Dark Glass</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Static</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_static_light.html">
                                                    <span class="nav-main-link-name">Light</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_static_light_glass.html">
                                                    <span class="nav-main-link-name">Light Glass</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                                    <span class="nav-main-link-name">Dark</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
                                                    <span class="nav-main-link-name">Dark Glass</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Footer</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_footer_static.html">
                                            <span class="nav-main-link-name">Static</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_footer_fixed.html">
                                            <span class="nav-main-link-name">Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Sidebar</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                                            <span class="nav-main-link-name">Mini</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                            <span class="nav-main-link-name">Hidden</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Side Overlay</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                            <span class="nav-main-link-name">Visible</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                            <span class="nav-main-link-name">Hover Mode</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                                            <span class="nav-main-link-name">No Page Overlay</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_api.html">
                                    <span class="nav-main-link-name">API</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Interface</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-flask"></i>
                            <span class="nav-main-link-name">Elements</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_icons.html">
                                    <span class="nav-main-link-name">Icon Packs</span>
                                    <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_grid.html">
                                    <span class="nav-main-link-name">Flexbox Grid</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_typography.html">
                                    <span class="nav-main-link-name">Typography</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_navigation.html">
                                    <span class="nav-main-link-name">Navigation</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                                    <span class="nav-main-link-name">Horizontal Nav</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_tabs.html">
                                    <span class="nav-main-link-name">Tabs</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_buttons.html">
                                    <span class="nav-main-link-name">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_buttons_groups.html">
                                    <span class="nav-main-link-name">Button Groups</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_dropdowns.html">
                                    <span class="nav-main-link-name">Dropdowns</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_progress.html">
                                    <span class="nav-main-link-name">Progress</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_alerts.html">
                                    <span class="nav-main-link-name">Alerts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_tooltips.html">
                                    <span class="nav-main-link-name">Tooltips</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_popovers.html">
                                    <span class="nav-main-link-name">Popovers</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_accordion.html">
                                    <span class="nav-main-link-name">Accordion</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_modals.html">
                                    <span class="nav-main-link-name">Modals</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_images.html">
                                    <span class="nav-main-link-name">Images Overlay</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_timeline.html">
                                    <span class="nav-main-link-name">Timeline</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_ribbons.html">
                                    <span class="nav-main-link-name">Ribbons</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_animations.html">
                                    <span class="nav-main-link-name">Animations</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_backgrounds.html">
                                    <span class="nav-main-link-name">Backgrounds</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_ui_color_themes.html">
                                    <span class="nav-main-link-name">Color Themes</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                            <span class="nav-main-link-name">Tables</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_tables_styles.html">
                                    <span class="nav-main-link-name">Styles</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_tables_responsive.html">
                                    <span class="nav-main-link-name">Responsive</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_tables_helpers.html">
                                    <span class="nav-main-link-name">Helpers</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_tables_pricing.html">
                                    <span class="nav-main-link-name">Pricing</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_tables_datatables.html">
                                    <span class="nav-main-link-name">DataTables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-sticky-note"></i>
                            <span class="nav-main-link-name">Forms</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_elements.html">
                                    <span class="nav-main-link-name">Elements</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_custom_controls.html">
                                    <span class="nav-main-link-name">Custom Controls</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_layouts.html">
                                    <span class="nav-main-link-name">Layouts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_input_groups.html">
                                    <span class="nav-main-link-name">Input Groups</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_plugins.html">
                                    <span class="nav-main-link-name">Plugins</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_editors.html">
                                    <span class="nav-main-link-name">Editors</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">CKEditor 5</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                                            <span class="nav-main-link-name">Classic</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                                            <span class="nav-main-link-name">Inline</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_validation.html">
                                    <span class="nav-main-link-name">Validation</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_forms_wizard.html">
                                    <span class="nav-main-link-name">Wizard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Extend</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-wrench"></i>
                            <span class="nav-main-link-name">Components</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_chat.html">
                                    <span class="nav-main-link-name">Chat</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_onboarding.html">
                                    <span class="nav-main-link-name">Onboarding</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_tour.html">
                                    <span class="nav-main-link-name">Tour</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_nestable.html">
                                    <span class="nav-main-link-name">Nestable</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_dialogs.html">
                                    <span class="nav-main-link-name">Dialogs</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_notifications.html">
                                    <span class="nav-main-link-name">Notifications</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_loaders.html">
                                    <span class="nav-main-link-name">Loaders</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_charts.html">
                                    <span class="nav-main-link-name">Charts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_gallery.html">
                                    <span class="nav-main-link-name">Gallery</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_sliders.html">
                                    <span class="nav-main-link-name">Sliders</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_rating.html">
                                    <span class="nav-main-link-name">Rating</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_appear.html">
                                    <span class="nav-main-link-name">Appear</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_calendar.html">
                                    <span class="nav-main-link-name">Calendar</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_image_cropper.html">
                                    <span class="nav-main-link-name">Image Cropper</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_maps_google.html">
                                    <span class="nav-main-link-name">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_maps_vector.html">
                                    <span class="nav-main-link-name">Vector Maps</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                    <span class="nav-main-link-name">Syntax Highlighting</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-cog"></i>
                            <span class="nav-main-link-name">Main Menu</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon fa fa-inbox"></i>
                                    <span class="nav-main-link-name">1.1 Item</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon fa fa-fire"></i>
                                    <span class="nav-main-link-name">1.2 Item</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon fa fa-share-alt"></i>
                                    <span class="nav-main-link-name">1.3 Item</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Sub Level 2</span>
                                    <span class="nav-main-link-badge badge badge-pill badge-primary">3</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon fa fa-tag"></i>
                                            <span class="nav-main-link-name">2.1 Item</span>
                                            <span class="nav-main-link-badge badge badge-pill badge-info">2</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                            <span class="nav-main-link-name">2.2 Item</span>
                                            <span class="nav-main-link-badge badge badge-pill badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                            <span class="nav-main-link-name">2.3 Item</span>
                                            <span class="nav-main-link-badge badge badge-pill badge-warning">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Sub Level 3</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon fa fa-map"></i>
                                                    <span class="nav-main-link-name">3.1 Item</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon fa fa-coffee"></i>
                                                    <span class="nav-main-link-name">3.2 Item</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon fa fa-user-astronaut"></i>
                                                    <span class="nav-main-link-name">3.3 Item</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                    <span class="nav-main-link-name">Sub Level 4</span>
                                                </a>
                                                <ul class="nav-main-submenu">
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link" href="#">
                                                            <i class="nav-main-link-icon fa fa-heart"></i>
                                                            <span class="nav-main-link-name">4.1 Item</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link" href="#">
                                                            <i class="nav-main-link-icon fa fa-search"></i>
                                                            <span class="nav-main-link-name">4.2 Item</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link" href="#">
                                                            <i class="nav-main-link-icon fa fa-microphone"></i>
                                                            <span class="nav-main-link-name">4.3 Item</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Pages</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboards</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_pages_dashboard_all.html">
                                    <span class="nav-main-link-name">All</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                                    <span class="nav-main-link-name">Corporate v1</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_social.html">
                                    <span class="nav-main-link-name">Social</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_messages.html">
                                    <span class="nav-main-link-name">Messages</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_dark.html">
                                    <span class="nav-main-link-name">Dark</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_minimal.html">
                                    <span class="nav-main-link-name">Minimal</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_modern.html">
                                    <span class="nav-main-link-name">Modern</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_classic_boxed.html">
                                    <span class="nav-main-link-name">Classic Boxed</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_banking.html">
                                    <span class="nav-main-link-name">Banking</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_crypto.html">
                                    <span class="nav-main-link-name">Crypto</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_hosting.html">
                                    <span class="nav-main-link-name">Hosting</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_booking.html">
                                    <span class="nav-main-link-name">Booking</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_gaming.html">
                                    <span class="nav-main-link-name">Gaming</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_tasks.html">
                                    <span class="nav-main-link-name">Tasks</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_medical.html">
                                    <span class="nav-main-link-name">Medical</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_travel.html">
                                    <span class="nav-main-link-name">Travel</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_social_compact.html">
                                    <span class="nav-main-link-name">Social Compact</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_chat.html">
                                    <span class="nav-main-link-name">Chat</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_analytics.html">
                                    <span class="nav-main-link-name">Analytics</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_corporate_slim.html">
                                    <span class="nav-main-link-name">Corporate Slim</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_wp_post.html">
                                    <span class="nav-main-link-name">WP Post</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="db_file_hosting.html">
                                    <span class="nav-main-link-name">File Hosting</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-user-friends"></i>
                            <span class="nav-main-link-name">Auth</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_pages_auth_all.html">
                                    <span class="nav-main-link-name">All</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signin.html">
                                    <span class="nav-main-link-name">Sign In</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signin_box.html">
                                    <span class="nav-main-link-name">Sign In Box</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signin_box_alt.html">
                                    <span class="nav-main-link-name">Sign In Box Alt</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signup.html">
                                    <span class="nav-main-link-name">Sign Up</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signup_box.html">
                                    <span class="nav-main-link-name">Sign Up Box</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_signup_box_alt.html">
                                    <span class="nav-main-link-name">Sign Up Box Alt</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_lock.html">
                                    <span class="nav-main-link-name">Lock Screen</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_lock_box.html">
                                    <span class="nav-main-link-name">Lock Screen Box</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_lock_box_alt.html">
                                    <span class="nav-main-link-name">Lock Screen Box Alt</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_reminder.html">
                                    <span class="nav-main-link-name">Pass Reminder</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_reminder_box.html">
                                    <span class="nav-main-link-name">Pass Reminder Box</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_auth_reminder_box_alt.html">
                                    <span class="nav-main-link-name">Pass Reminder Box Alt</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-ghost"></i>
                            <span class="nav-main-link-name">Error</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_pages_error_all.html">
                                    <span class="nav-main-link-name">All</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_400.html">
                                    <span class="nav-main-link-name">400</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_401.html">
                                    <span class="nav-main-link-name">401</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_403.html">
                                    <span class="nav-main-link-name">403</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_404.html">
                                    <span class="nav-main-link-name">404</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_500.html">
                                    <span class="nav-main-link-name">500</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="op_error_503.html">
                                    <span class="nav-main-link-name">503</span>
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
                        <span class="d-none d-sm-inline-block">Admin</span>
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
        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                        Dashboard
                    </h1>
                    <p class="mb-0">
                        Welcome, admin! You have <a class="font-w500" href="javascript:void(0)">5 new notifications</a>.
                    </p>
                </div>
                <div class="mt-4 mt-md-0">
                    <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                        <i class="fa fa-cog"></i>
                    </a>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-primary px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                            <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <div class="row row-deck">
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                <i class="fa fa-users text-muted"></i>
                            </div>
                            <div class="text-black font-size-h1 font-w700">2,388</div>
                            <div class="text-muted mb-3">Registered Users</div>
                            <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                                <i class="fa fa-caret-up mr-1"></i>
                                19.2%
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                            <a class="font-w500" href="javascript:void(0)">
                                View all users
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                <i class="fa fa-level-up-alt text-muted"></i>
                            </div>
                            <div class="text-black font-size-h1 font-w700">14.6%</div>
                            <div class="text-muted mb-3">Bounce Rate</div>
                            <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                                <i class="fa fa-caret-down mr-1"></i>
                                2.3%
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                            <a class="font-w500" href="javascript:void(0)">
                                Explore analytics
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                <i class="fa fa-chart-line text-muted"></i>
                            </div>
                            <div class="text-black font-size-h1 font-w700">386</div>
                            <div class="text-muted mb-3">Confirmed Sales</div>
                            <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                                <i class="fa fa-caret-up mr-1"></i>
                                7.9%
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                            <a class="font-w500" href="javascript:void(0)">
                                View all sales
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column">
                        <div class="block-content block-content-full">
                            <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                <i class="fa fa-wallet text-muted"></i>
                            </div>
                            <div class="text-black font-size-h1 font-w700">$4,920</div>
                            <div class="text-muted mb-3">Total Earnings</div>
                            <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                                <i class="fa fa-caret-down mr-1"></i>
                                0.3%
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                            <a class="font-w500" href="javascript:void(0)">
                                Withdrawal options
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Overview -->

            <!-- Store Growth -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Store Growth
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                            <div class="p-md-2 p-lg-3">
                                <div class="py-3">
                                    <div class="text-black font-size-h1 font-w700">1,430</div>
                                    <div class="font-w600">Your new website Customers</div>
                                    <div class="py-3 d-flex align-items-center">
                                        <div class="bg-success-lighter p-2 rounded mr-3">
                                            <i class="fa fa-fw fa-arrow-up text-success"></i>
                                        </div>
                                        <p class="mb-0">
                                            You have a <span class="font-w600 text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                                        </p>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="text-black font-size-h1 font-w700">65</div>
                                    <div class="font-w600">New products added</div>
                                    <div class="py-3 d-flex align-items-center">
                                        <div class="bg-success-lighter p-2 rounded mr-3">
                                            <i class="fa fa-fw fa-arrow-up text-success"></i>
                                        </div>
                                        <p class="mb-0">
                                            You’ve managed to add <span class="font-w600 text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                            <div class="p-md-2 p-lg-3 w-100">
                                <!-- Bars Chart Container -->
                                <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas class="js-chartjs-analytics-bars"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Store Growth -->

            <!-- Latest Orders + Stats -->
            <div class="row">
                <div class="col-md-8">
                    <!--  Latest Orders -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                Latest Orders
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="si si-chemistry"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-dot-circle opacity-50 mr-1"></i> Pending
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle opacity-50 mr-1"></i> Canceled
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-check-circle opacity-50 mr-1"></i> Completed
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-eye opacity-50 mr-1"></i> View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th>Product</th>
                                    <th class="d-none d-xl-table-cell">Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell text-right" style="width: 120px;">Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone 11 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $1199,99
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">MacBook Pro 15"</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $2.299,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nvidia GTX 2080 Ti</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $1200,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Playstation 4 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $399,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nintendo Switch</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $349,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone 11</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $999,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Airpods Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $39,99
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Xbox One X</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $499,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
                            <a class="font-w500" href="javascript:void(0)">
                                View all orders
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                    <!-- END Latest Orders -->
                </div>
                <div class="col-md-4 d-flex flex-column">
                    <!-- Stats -->
                    <div class="block block-rounded">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                            <div class="mr-3">
                                <p class="font-size-h3 font-w700 mb-0">
                                    35,698
                                </p>
                                <p class="text-muted mb-0">
                                    Completed orders
                                </p>
                            </div>
                            <div class="item rounded-lg bg-body-dark">
                                <i class="fa fa-check text-muted"></i>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
                            <a class="font-w500" href="javascript:void(0)">
                                View Archive
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                    <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                        <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                            <div class="w-100">
                                <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                    <i class="fa fa-archive text-muted"></i>
                                </div>
                                <div class="text-black font-size-h1 font-w700">75</div>
                                <div class="text-muted mb-3">Products out of stock</div>
                                <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-warning bg-warning-lighter">
                                    5% of portfolio
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                            <a class="font-w500" href="javascript:void(0)">
                                Order supplies
                                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->
                </div>
            </div>
            <!-- END Latest Orders + Stats -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

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
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="assets/js/dashmix.core.min.js"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/dashmix.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_pages_dashboard.min.js"></script>
</body>
</html>

