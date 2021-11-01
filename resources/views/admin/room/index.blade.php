@extends('layouts.layoutAdmin')
@section('content')
{{--    <!-- Page Content -->--}}
{{--    <div class="row no-gutters flex-lg-10-auto">--}}
{{--        <div class="col-lg-5 col-xl-3 h100-scroll">--}}
{{--            <div class="content">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="text-center d-lg-none push">--}}
{{--                    <a class="link-fx font-size-lg text-dark font-w600" href="index.html">--}}
{{--                        <span class="text-muted">x</span>Travel--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- END Logo -->--}}

{{--                <!-- Toggle Side Content -->--}}
{{--                <div class="row gutters-tiny d-lg-none push">--}}
{{--                    <div class="col-6">--}}
{{--                        <!-- Toggle Sidebar -->--}}
{{--                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->--}}
{{--                        <button type="button" class="btn btn-block btn-primary" data-toggle="layout" data-action="sidebar_toggle">--}}
{{--                            <i class="fa fa-bars mr-1"></i> Menu--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->--}}
{{--                        <button type="button" class="btn btn-block btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">--}}
{{--                            <i class="fa fa-flask mr-1"></i> Filters--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END Toggle Side Content -->--}}

{{--                <!-- Search Travel -->--}}
{{--                <form class="push" action="db_travel.html" method="POST" onsubmit="return false;">--}}
{{--                    <div class="form-group mb-2">--}}
{{--                        <input type="text" class="form-control form-control-lg py-4 font-size-base text-center" id="db-travel-location" name="db-travel-location" placeholder="Where are you going?">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="input-daterange input-group input-group-lg" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">--}}
{{--                            <input type="text" class="form-control border-right-0 py-4 font-size-base" id="db-travel-from" name="db-travel-from" placeholder="Arriving.." data-week-start="1" data-autoclose="true" data-today-highlight="true">--}}
{{--                            <div class="input-group-prepend input-group-append">--}}
{{--                                            <span class="input-group-text bg-white  border-left-0 border-right-0 font-w600">--}}
{{--                                                <i class="fa fa-fw fa-angle-double-right font-size-base text-muted"></i>--}}
{{--                                            </span>--}}
{{--                            </div>--}}
{{--                            <input type="text" class="form-control border-left-0 py-4 font-size-base" id="db-travel-to" name="db-travel-to" placeholder="Leaving.." data-week-start="1" data-autoclose="true" data-today-highlight="true">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <!-- END Search Travel -->--}}

{{--                <!-- Side Content -->--}}
{{--                <div id="side-content" class="d-none d-lg-block push">--}}
{{--                    <!-- House Type -->--}}
{{--                    <div class="block block-rounded">--}}
{{--                        <div class="block-header block-header-default">--}}
{{--                            <h3 class="block-title">--}}
{{--                                <i class="fa fa-fw fa-home opacity-25 mr-1"></i> House Type--}}
{{--                            </h3>--}}
{{--                            <div class="block-options">--}}
{{--                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block-content">--}}
{{--                            <div class="form-group row gutters-tiny items-push">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="custom-control custom-block custom-control-primary">--}}
{{--                                        <input type="radio" class="custom-control-input" id="db-travel-house-type-entire" name="db-travel-house-type">--}}
{{--                                        <label class="custom-control-label" for="db-travel-house-type-entire">--}}
{{--                                                        <span class="d-block text-center">--}}
{{--                                                            <span class="d-block">--}}
{{--                                                                Entire Place--}}
{{--                                                            </span>--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                        <span class="custom-block-indicator">--}}
{{--                                                        <i class="fa fa-check"></i>--}}
{{--                                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-block custom-control-primary">--}}
{{--                                        <input type="radio" class="custom-control-input" id="db-travel-house-type-private" name="db-travel-house-type">--}}
{{--                                        <label class="custom-control-label" for="db-travel-house-type-private">--}}
{{--                                                        <span class="d-block text-center">--}}
{{--                                                            Private Room--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                        <span class="custom-block-indicator">--}}
{{--                                                        <i class="fa fa-check"></i>--}}
{{--                                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-block custom-control-primary">--}}
{{--                                        <input type="radio" class="custom-control-input" id="db-travel-house-type-shared" name="db-travel-house-type">--}}
{{--                                        <label class="custom-control-label" for="db-travel-house-type-shared">--}}
{{--                                                        <span class="d-block text-center">--}}
{{--                                                            Shared Room--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                        <span class="custom-block-indicator">--}}
{{--                                                        <i class="fa fa-check"></i>--}}
{{--                                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END House Type -->--}}

{{--                    <!-- Trip -->--}}
{{--                    <div class="block block-rounded block-mode-hidden">--}}
{{--                        <div class="block-header block-header-default">--}}
{{--                            <h3 class="block-title">--}}
{{--                                <i class="fa fa-fw fa-plane opacity-25 mr-1"></i> Trip--}}
{{--                            </h3>--}}
{{--                            <div class="block-options">--}}
{{--                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block-content">--}}
{{--                            <div class="form-group row gutters-tiny items-push">--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-block custom-control-primary">--}}
{{--                                        <input type="radio" class="custom-control-input" id="db-travel-trip-work" name="db-travel-trip">--}}
{{--                                        <label class="custom-control-label" for="db-travel-trip-work">--}}
{{--                                                        <span class="d-block text-center">--}}
{{--                                                            Work--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                        <span class="custom-block-indicator">--}}
{{--                                                        <i class="fa fa-check"></i>--}}
{{--                                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-block custom-control-primary">--}}
{{--                                        <input type="radio" class="custom-control-input" id="db-travel-trip-leisure" name="db-travel-trip">--}}
{{--                                        <label class="custom-control-label" for="db-travel-trip-leisure">--}}
{{--                                                        <span class="d-block text-center">--}}
{{--                                                            Leisure--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                        <span class="custom-block-indicator">--}}
{{--                                                        <i class="fa fa-check"></i>--}}
{{--                                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END Trip -->--}}

{{--                    <!-- Price Range -->--}}
{{--                    <div class="block block-rounded">--}}
{{--                        <div class="block-header block-header-default">--}}
{{--                            <h3 class="block-title">--}}
{{--                                <i class="fa fa-fw fa-dollar-sign opacity-25 mr-1"></i> Price Range--}}
{{--                            </h3>--}}
{{--                            <div class="block-options">--}}
{{--                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block-content">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="js-rangeslider" id="db-travel-price" name="db-travel-price" data-type="double" data-min="0" data-max="1000" data-from="0" data-to="1000" data-prefix="$">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END Price Range -->--}}

{{--                    <!-- Amenities -->--}}
{{--                    <div class="block block-rounded">--}}
{{--                        <div class="block-header block-header-default">--}}
{{--                            <h3 class="block-title">--}}
{{--                                <i class="fa fa-fw fa-box-open opacity-25 mr-1"></i> Amenities--}}
{{--                            </h3>--}}
{{--                            <div class="block-options">--}}
{{--                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block-content">--}}
{{--                            <div class="form-group row gutters-tiny items-push">--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-kitchen" name="db-travel-amenities-kitchen">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-kitchen">Kitchen</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-shampoo" name="db-travel-amenities-shampoo">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-shampoo">Shampoo</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-heating" name="db-travel-amenities-heating">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-heating">Heating</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-airconditioning" name="db-travel-amenities-airconditioning">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-airconditioning">Air conditioning</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-washer" name="db-travel-amenities-washer">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-washer">Washer</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-dryer" name="db-travel-amenities-dryer">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-dryer">Dryer</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-wifi" name="db-travel-amenities-wifi">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-wifi">Wifi</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="db-travel-amenities-breakfast" name="db-travel-amenities-breakfast">--}}
{{--                                        <label class="custom-control-label font-w400" for="db-travel-amenities-breakfast">Breakfast</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END Amenities -->--}}
{{--                </div>--}}
{{--                <!-- END Side Content -->--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-lg-12 col-lg-12 h100-scroll bg-body-dark">
            <!-- Main Content -->
            <div class="content">
                <div class="row">
                    @foreach($roomtype as $room_item)
                    <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
                        <!-- House -->
                        <div class="block block-rounded">
                            <div class="block-content p-0 overflow-hidden">
                                <a class="img-link img-fluid-100" data-toggle="layout" data-action="side_overlay_open" href="javascript:void(0)">
                                    <img class="img-fluid rounded-top" src="assets/media/photos/photo27.jpg" alt="">
                                </a>
                            </div>
                            <div class="block-content">
                                <h4 class="h6 mb-2">{{$room_item->name}}</h4>
                                <h5 class="h2 font-w300 push">
                                    ${{$room_item->price}} <span class="font-size-h3 text-muted"> per night</span>
                                </h5>
                            </div>
                            <div class="block-content p-0">
                                <div class="row text-center m-0 border-top border-bottom bg-body-light">
                                    <div class="col-6 border-right">
                                        <p class="py-3 mb-0">
                                            <i class="fa fa-fw fa-bed text-muted mr-1"></i> <strong>{{$room_item->bedroom}}</strong> Bedrooms
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="py-3 mb-0">
                                            <i class="fa fa-fw fa-bath text-muted mr-1"></i> <strong>{{$room_item->bathroom}}</strong> Bathrooms
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                            Add
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-sm btn-alt-primary btn-block" href="{{route("roomAdmin", $room_item->id)}}">
                                            View
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END House -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END Main Content -->
        </div>
{{--    </div>--}}
    <!-- END Page Content -->
@endsection
