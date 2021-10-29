@extends('layouts.layoutAdmin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-primary mb-1">78</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Pending
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
                <h3 class="block-title">All Orders</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                            <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Pending..
                                <span class="badge badge-primary badge-pill">78</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Processing
                                <span class="badge badge-secondary badge-pill">12</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                For Delivery
                                <span class="badge badge-secondary badge-pill">20</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Canceled
                                <span class="badge badge-secondary badge-pill">5</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Delivered
                                <span class="badge badge-secondary badge-pill">280</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-secondary badge-pill">19k</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="{{route('booking.index')}}" method="GET" class="mb-4">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="search_name" placeholder="Search all orders..">
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
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th class="d-none d-sm-table-cell text-center">Check-out Date</th>
                            <th>Status</th>
                            <th class="d-none d-xl-table-cell">Customer</th>
                            <th class="d-none d-xl-table-cell text-center">Room</th>
                            <th class="d-none d-sm-table-cell text-right">Total</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lsOrder as $order)
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>{{$order->id}}</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">{{$order->check_out_date}}</td>
                                <td class="font-size-base">
                                    @if($order->status == 0)
                                        <span class="badge badge-pill badge-warning">OPEN</span>
                                    @elseif($order->status == 1)
                                        <span class="badge badge-pill badge-success">CLOSED</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">CANCEL</span>
                                    @endif
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="font-w600" href="be_pages_ecom_customer.html">{{$order->customer->name}}</a>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">{{$order->room->name}}</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    <strong>{{$order->total}}</strong>
                                </td>
                                {{--                            <td class="text-center font-size-base">--}}
                                {{--                                <a class="btn btn-sm btn-alt-secondary" href="{{route('detail')}}">--}}
                                {{--                                    <i class="fa fa-fw fa-eye"></i>--}}
                                {{--                                </a>--}}
                                {{--                                <a class="btn btn-sm btn-alt-secondary" href="{{route('booking.edit', $order->id)}}">--}}
                                {{--                                    <i class="fas fa-pencil-alt"></i>--}}
                                {{--                                </a>--}}
                                {{--                            </td>--}}
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="{{route('detail', $order->id)}}">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    @if($order->status == 0 || $order->status == 1)
                                        <button class="btn btn-sm btn-alt-secondary" data-toggle="modal" data-target="#exampleModal" data-orderid="{{$order->id}}" href="#">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                    {{$lsOrder->links("pagination::bootstrap-4")}}
                </div>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <input type="hidden" name="selected_orderid" id="selected_orderid">
                            <select name="new_status" class="form-control" id="new_status">
                                <option value="0">OPEN</option>
                                <option value="1">CLOSED</option>
                                <option value="2">CANCEL</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="Change">Change</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('orderid') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#selected_orderid').val(recipient)
            });

            $("#Change").click(function() {
                var data = {
                    'id' : $("#selected_orderid").val(),
                    'status' : $("#new_status").val(),
                    "_token": "{{ csrf_token() }}"
                }

                $.get({
                    url: '/api/admin/booking/changeStatus',
                    data: data,
                    success: function(response) {
                        alert(response.desc);
                        location.reload();
                    },
                    error: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
@endsection
