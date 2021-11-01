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
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
            <div class="row no-gutters justify-content-center bg-black-75">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx text-success font-w700 font-size-h1" href="index.html">
                                <span class="text-dark">B52</span><span class="text-success">Hotel</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form class="js-validation-signup" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror" id="name" name="name" placeholder="Username" value="{{ old('signup-username') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email"  class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="password-confirm" name="password_confirmation" placeholder="Password Confirm" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox custom-control-primary">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                <label class="custom-control-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-hero-lg btn-hero-success">
                                            <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{route('login')}}">
                                                <i class="fa fa-sign-in-alt text-muted mr-1"></i> Sign In
                                            </a>
                                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="#" data-toggle="modal" data-target="#modal-terms">
                                                <i class="fa fa-book text-muted mr-1"></i> Read Terms
                                            </a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <!-- END Main Section -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <span>
                        <p>1. Do not use the guest rooms for purposes other than intended without authorization.</p>
                        <p>2. Do not light fire in the passage or guest rooms for heating or cooking.</p>
                        <p>3. To prevent fire, refrain from smoking on bed, in non-smoking rooms, and in any other places prone to catch fire.</p>
                        <p>4. The equipment and articles in guest rooms are strictly meant for the guests staying in the Hotel. Hence, inside the guest rooms, use of such equipment and articles by outsiders is prohibited.</p>
                        <p>5. Be careful not to move the articles in the Hotel or guest rooms from their fixed places without permission.</p>
                        <p>6. Do not change the position of the gadgets and fixtures in the Hotel or guest rooms without permission.</p>
                        <p>
                            7. Do not bring the following inside the hotel premises: <br>
                            a. Animals, birds, etc.<br>
                            b. Things giving off foul smell<br>
                            c. Articles exceeding the normal amount that can be carried into a hotel<br>
                            d. Guns, swords, etc.<br>
                            e. Explosives, or articles containing volatile oils that may ignite or catch fire<br>
                            f. Any other articles that may pose a threat to the safety of other guests staying in the Hotel
                        </p>
                        <p>8. Do not scream, sing loudly, or create loud noises by any other actions inside the Hotel or guest rooms, as it may disturb or annoy other guests staying in the Hotel.</p>
                        <p>9. Refrain from engaging into gambling or acts that violate public order and morals inside the Hotel or guest rooms.</p>
                        <p>10. Do not distribute advertisement goods or sell articles to the other guests or collect donation or signatures from them inside the Hotel premises, without proper permission.</p>
                        <p>11. Note that we may refuse stay to patients suffering from an illness that may cause discomfort of any kind to the other guests inside the Hotel.</p>
                        <p>12. Do not leave your personal belongings in the passages or the lobby.</p>
                        <p>13. Any acts of photography that may bother the other guests in the Hotel are strictly prohibited inside the Hotel or guest rooms.</p>
                        <p>14. Any personal meetings should be held in the 1st floor lobby only.</p>
                        <p>15. In principle, the guest rooms accommodating same guests continuously for two or more nights shall not be cleaned during their period of stay. Such rooms, however, shall be cleaned once in six days to maintain cleanliness. Further, if cleaning of one or more of the guest rooms is deemed necessary by the hotel authorities, the guests occupying the room(s) shall not have a right to deny such room cleaning.</p>
                    </span>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->


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
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signup.min.js"></script>
</body>
</html>
