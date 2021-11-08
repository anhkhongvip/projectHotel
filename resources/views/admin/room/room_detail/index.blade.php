@extends('layouts.layoutAdmin')
@section('content')
    <aside id="side-overlay">
        <div class="content-header bg-dark">
            <div class="fw-semibold text-white" id="roomNameDetail"></div>
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times-circle"></i>
            </a>
        </div>
{{--        <div class="js-slider slick-nav-black slick-nav-hover slick-dotted-inner slick-dotted-white img-fluid-100" data-dots="true" data-arrows="true" data-autoplay="true" data-autoplay-speed="3000">--}}
{{--            <div>--}}
{{--                <img class="img-fluid" src="assets/media/photos/photo26@2x.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <img class="img-fluid" src="assets/media/photos/photo28@2x.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <img class="img-fluid" src="assets/media/photos/photo29@2x.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <img class="img-fluid" src="assets/media/photos/photo30@2x.jpg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="js-slider slick-nav-black slick-nav-hover slick-dotted-inner slick-dotted-white img-fluid-100"
             data-dots="true" data-arrows="true" data-autoplay="true" data-autoplay-speed="3000" id="roomSlideImage"></div>
        <div class="content-side content-side-full">
            <div class="text-warning text-center push">
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <i class="fa fa-fw fa-star"></i>
                <span class="text-muted">(19)</span>
            </div>
            <div class="row text-center border-top border-bottom bg-body-light pull-x push">
                <div class="col-6 border-bottom border-end">
                    <p class="py-3 mb-0">
                        <i class="fa fa-fw fa-bed text-muted me-1"></i> <strong>2</strong> Bedrooms
                    </p>
                </div>
                <div class="col-6 border-bottom">
                    <p class="py-3 mb-0">
                        <i class="fa fa-fw fa-bath text-muted me-1"></i> <strong>1</strong> Bathroom
                    </p>
                </div>
                <div class="col-6 border-end">
                    <p class="py-3 mb-0">
                        <i class="fa fa-fw fa-check text-success me-1"></i> Wifi
                    </p>
                </div>
                <div class="col-6">
                    <p class="py-3 mb-0">
                        <i class="fa fa-fw fa-check text-success me-1"></i> Breakfast
                    </p>
                </div>
            </div>
            <p class="fs-sm fw-medium" id="roomDescriptionDetail"></p>
        </div>
    </aside>
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="{{route('rooms.create')}}">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-success mb-1">
                            <i class="fa fa-plus"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">126</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Today
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">350</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Yesterday
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">89.752</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            This Month
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Rooms</h3>
                <div class="block-options">
{{--                    <div class="dropdown">--}}
{{--                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Filters--}}
{{--                            <i class="fa fa-angle-down ml-1"></i>--}}
{{--                        </button>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                Pending..--}}
{{--                                <span class="badge badge-primary badge-pill">78</span>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                Processing--}}
{{--                                <span class="badge badge-secondary badge-pill">12</span>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                For Delivery--}}
{{--                                <span class="badge badge-secondary badge-pill">20</span>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                Canceled--}}
{{--                                <span class="badge badge-secondary badge-pill">5</span>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                Delivered--}}
{{--                                <span class="badge badge-secondary badge-pill">280</span>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                                All--}}
{{--                                <span class="badge badge-secondary badge-pill">19k</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="{{route('booking.index')}}" method="GET" class="mb-4">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="search_name" placeholder="Search all rooms..">
                    </div>
                    <input type="submit" class="btn btn-alt-primary" value="Search">
                </form>

                <!-- END Search Form -->
            </div>
            <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                        <tr>
                            <th class="text-center d-none d-xl-table-cell">Room's type</th>
                            <th class="d-none d-sm-table-cell text-center">Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lsRoom as $room)
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>{{$room->rooms_type->name}}</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">{{$room->name}}</td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_open" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-eye" id="getRoom" OnClick = "getRoomDetail(event, {{$room->id}})" ></i>
                                    </a>
{{--                                    @if($order->status == 0 || $order->status == 1)--}}
{{--                                        <button class="btn btn-sm btn-alt-secondary" data-toggle="modal" data-target="#exampleModal" data-orderid="{{$order->id}}" href="#">--}}
{{--                                            <i class="fas fa-pencil-alt"></i>--}}
{{--                                        </button>--}}
{{--                                    @endif--}}
                                    <a class="btn btn-sm btn-alt-secondary" href="{{route('rooms.edit', $room->id)}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                <div class="shop_pagination_area wow fadeInUp d-flex justify-content-end" data-wow-delay="1.1s">

                </div>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function getRoomDetail(e, id) {
            $.ajaxSetup
            ({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.js-slider').slick('unslick');

            console.log(id);
            let route = '{{route('getRoomDetail')}}';
            $.ajax({
                method: 'GET',
                url: route,
                data: {
                    id: id,
                },
                success : function (res){
                    console.log(res);
                    $("#roomNameDetail").html(res.room.name);
                    $("#roomDescriptionDetail").html(res.room.description)
                    let list_img = "";
                    $.each(res.image_list, function(index, value){
                        // list_img += "<div><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/"+value.image+"\" alt=\"\"></div>"
                        list_img += "<div>\n" +
                            "                        <img class=\"img-fluid\" src=\"http://127.0.0.1:8000/"+value.image+"\" alt=\"\">\n" +
                            "                    </div>"

                    })
                    $('#roomSlideImage').html('').append(list_img);
                    $('#roomSlideImage').slick({
                        dots: true,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                    $('.slider').slick($('#roomSlideImage'));
                }
            })
        }
    </script>
@endsection
