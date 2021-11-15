@extends('layouts.layoutAdmin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="item rounded-lg bg-xeco-lighter mx-auto mb-3">
                            <i class="fa fa-check text-xeco-dark"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            ORD.01852
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="item rounded-lg bg-xeco-lighter mx-auto mb-3">
                            <i class="fa fa-check text-xeco-dark"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Payment
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="item rounded-lg bg-xsmooth-lighter mx-auto mb-3">
                            <i class="fa fa-sync fa-spin text-xsmooth-dark"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Packaging
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="item rounded-lg bg-body mx-auto mb-3">
                            <i class="fa fa-times text-muted"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Delivery
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- Products -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Products</h3>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Room's Name</th>
                            <th class="text-center">Check-in Date</th>
                            <th class="text-center">Check-out Date</th>
                            <th class="text-right" style="width: 10%;">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.html"><strong>{{$Order->id}}</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.html"><strong>{{$Order->room->name}}</strong></a></td>
                            <td class="text-center">{{$Order->check_in_date}}</td>
                            <td class="text-center">{{$Order->check_out_date}}</td>
                            <td class="text-right">${{$Order->total}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Products -->

        <!-- Customer -->
        <div class="row">
            <div class="col-sm-6">
                <!-- Billing Address -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Billing Address</h3>
                    </div>
                    <div class="block-content">
                        <div class="font-size-h4 mb-1">{{$Order->customer->name}}</div>
                        <address class="font-size-sm">
{{--                            Sunset Str 598<br>--}}
{{--                            Melbourne<br>--}}
{{--                            Australia, 11-671<br><br>--}}
                            <i class="fa fa-phone mr-2"></i>{{$Order->customer->phone}}<br>
                            <i class="fa fa-envelope-o"></i> <a href="#">{{$Order->customer->email}}</a>
                        </address>
                    </div>
                </div>
                <!-- END Billing Address -->
            </div>
            <div class="col-sm-6">
                <!-- Shipping Address -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Service</h3>
                    </div>

                    <div class="block-content">
{{--                        <div class="font-size-h4 mb-1">All service book</div>--}}
{{--                        @foreach($Service as $service)--}}
{{--                        <p class="font-size-sm">--}}
{{--                            {{$service->service->name}}--}}
{{--                        </p>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
                <!-- END Shipping Address -->
            </div>
        </div>
        <!-- END Customer -->

{{--        <!-- Log Messages -->--}}
{{--        <div class="block block-rounded">--}}
{{--            <div class="block-header block-header-default">--}}
{{--                <h3 class="block-title">Log Messages</h3>--}}
{{--            </div>--}}
{{--            <div class="block-content">--}}
{{--                <table class="table table-borderless table-striped table-vcenter font-size-sm">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base" style="width: 80px;">--}}
{{--                            <span class="badge badge-primary">Order</span>--}}
{{--                        </td>--}}
{{--                        <td style="width: 220px;">--}}
{{--                            <span class="font-w600">January 17, 2020 - 18:00</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">Support</a>--}}
{{--                        </td>--}}
{{--                        <td class="text-success"><strong>Order Completed</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base">--}}
{{--                            <span class="badge badge-primary">Order</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class="font-w600">January 17, 2020 - 17:36</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">Support</a>--}}
{{--                        </td>--}}
{{--                        <td class="text-warning"><strong>Preparing Order</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base">--}}
{{--                            <span class="badge badge-success">Payment</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class="font-w600">January 16, 2020 - 18:10</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">John Parker</a>--}}
{{--                        </td>--}}
{{--                        <td class="text-success"><strong>Payment Completed</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base">--}}
{{--                            <span class="badge badge-danger">Email</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class="font-w600">January 16, 2020 - 10:35</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">Support</a>--}}
{{--                        </td>--}}
{{--                        <td class="text-danger"><strong>Missing payment details. Email was sent and awaiting for payment before processing</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base">--}}
{{--                            <span class="badge badge-primary">Order</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class="font-w600">January 15, 2020 - 14:59</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">Support</a>--}}
{{--                        </td>--}}
{{--                        <td>All products are available</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="font-size-base">--}}
{{--                            <span class="badge badge-primary">Order</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class="font-w600">January 15, 2020 - 14:29</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="javascript:void(0)">John Parker</a>--}}
{{--                        </td>--}}
{{--                        <td>Order Submitted</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- END Log Messages -->--}}
    </div>
    <!-- END Page Content -->
@endsection
