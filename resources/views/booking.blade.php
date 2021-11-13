@extends('layouts.frontend')
@section('content')
    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url('img/gallery/10.jpg')"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Booking</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="section padding-top-bottom-smaller background-dark-2 over-hide">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h5 class="color-grey">A new dimension of luxury.</h5>--}}
{{--                    <p class="color-white mt-3 mb-3"><em>our presentation, 0:48 min</em></p>--}}
{{--                    <a href="https://vimeo.com/54851233" class="video-button" data-fancybox><i class="fa fa-play"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Page Content -->
    <div class="content" style="background-image: url(https://images.pexels.com/photos/1580112/pexels-photo-1580112.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover">
        <!-- Info -->
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    <p>{{$err}}</p>
                @endforeach
            </div>
        @endif
        <div class="section padding-top z-bigger">
            <div class="container" >
                <div class="padding-bottom-smaller justify-content-center">
                    <div class="section" style="background-color: #161215d6">
                            <form class="form" method="POST" action="{{route('storeUser')}}">
                                @csrf
                                <h5 class="pb-3 text-center" style="color: white">Booking Form</h5>
                                <div class="form-group subscribe-box mt-3">
                                    <label for="dm-ecom-product-name" style="color: white">Name</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-name" name="customer_name" style="color: white">
                                </div>

                                <div class="form-group subscribe-box mt-3">
                                    <label for="dm-ecom-product-email" style="color: white">Email</label>
                                    <input type="email" class="form-control" id="dm-ecom-product-email" name="customer_email" style="color: white">
                                </div>

                                <div class="form-group subscribe-box mt-3">
                                    <label for="dm-ecom-product-name" style="color: white">Phone</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-name" name="customer_phone" style="color: white">
                                </div>

                                <div class="form-group subscribe-box mt-3">
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <label for="dm-ecom-product-category" style="color: white">Room's type</label>

                                    <select class="js-select2 wide col-12 form-control" id="dm-ecom-product-roomtype" name="dm-ecom-product-roomtype" style="width: 100%;" data-placeholder="Choose one..">
                                        <option value="">Choose Room's Type</option>
                                        @foreach($lsRoomType as $type)
                                            <option value="{{$type->id}}|{{$type->price}}" style="color: white">{{$type->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

{{--                                <div class="form-group subscribe-box mt-3">--}}
{{--                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->--}}
{{--                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->--}}
{{--                                    <label for="dm-ecom-product-category" style="color: white">Rooms</label>--}}

{{--                                    <select class="wide col-12 mb-4" id="dm-ecom-product-room" name="dm-ecom-product-room" style="width: 100%;">--}}
{{--                                        <option value="" selected data-placeholder="Choose one.."></option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <div class="input-daterange input-group" id="flight-datepicker">
                                    <div class="form-item row mt-5">
                                        <div class="col-md-6 form-item">
                                            <label class="form-label" for="dm-project-check-in" style="color: white">Check-in Date</label>
                                            <input type="text" class="js-datepicker form-control" id="dm-project-check-in" name="check-in-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$date}}" style="color: white">
                                        </div>
                                    </div>

                                    <div class="form-item row mt-3">
                                        <div class="col-md-6 form-item">
                                            <label class="form-label" for="dm-project-check-out" style="color: white">Check-out Date</label>
                                            <input type="text" class="js-datepicker form-control" id="dm-project-check-out" name="check-out-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="" style="color: white">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <label for="dm-ecom-product-category" style="color: white">Rooms</label>
                                    <select class="wide col-12 form-control" id="dm-ecom-product-room" name="dm-ecom-product-room" style="width: 100%;" data-placeholder="Choose one..">
{{--                                        @foreach($lsRoomType as $type)--}}
{{--                                            <option value="{{$type->id}}|{{$type->price}}" style="color: white">{{$type->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                </div>

                                <div class="form-group row subscribe-box mt-5">
                                    <div class="col-md-6">
                                        <label for="dm-ecom-product-price" style="color: white">Room Price in USD ($)</label>
                                        <input type="text" class="form-control" id="dm-ecom-product-price" name="dm-ecom-product-price"
                                               value="0" style="color: black" readonly>
                                    </div>
                                </div>

                                <div class="form-group d-flex subscribe-box mt-3" style="color: white">
                                    @foreach($service_list as $service)
                                        <ul class="list">
                                            <li class="list__item">
                                                <label class="label--checkbox mr-3" for="exampleCheck1">
                                                    <input type="checkbox" class="checkbox pr-1 pb-0" id="service{{$service->id}}" value="{{$service->id}}|{{$service->price}}" onchange="changeService(event, {{$service->id}})"
                                                           name="service[]" id-service="service{{$service->id}}" style="margin-right: 1rem;">
                                                    {{$service->name}}
                                                </label>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>

                                <div class="form-group row subscribe-box mt-3">
                                    <div class="col-md-6">
                                        <label for="dm-ecom-product-price" style="color: white">Service Price in USD ($)</label>
                                        <input type="text" class="form-control" id="dm-ecom-product-service-price" name="dm-ecom-product-service-price"
                                               value="0" style="color: black" readonly>
                                    </div>
                                </div>

                                <div class="form-group row subscribe-box mt-3">
                                    <div class="col-md-6">
                                        <label for="dm-ecom-product-total" style="color: white">Total ($)</label>
                                        <input readonly style="color: black" type="text" class="form-control" id="dm-ecom-product-total" name="dm-ecom-product-total" value="0">
                                    </div>
                                </div>
                                <div class="form-group mt-4 justify-content-center">
                                    <button type="submit" class="btn btn-primary col-3">Book now</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

    </div>
    <!-- END Page Content -->

    {{--    <script type="text/javascript">--}}
    {{--        var inputValueRoom = document.querySelector('#dm-ecom-product-price')--}}
    {{--        var roomTypePrice = Number(inputValueRoom.value);--}}
    {{--        var quantity = Number(document.querySelector('#dm-ecom-product-quantity').value);--}}
    {{--        var sum = quantity*roomTypePrice;--}}
    {{--        var total = document.querySelector('#dm-ecom-product-stock');--}}
    {{--        document.querySelector('#dm-ecom-product-stock').value = sum;--}}

    {{--        function roomtype(obj)--}}
    {{--        {--}}
    {{--            inputValueRoom.setAttribute('value', obj.value)--}}
    {{--            roomTypePrice = obj.value;--}}
    {{--            sum = quantity*roomTypePrice;--}}
    {{--            document.querySelector('#dm-ecom-product-stock').value = sum;--}}
    {{--        }--}}
    {{--        function quantityChange(e)--}}
    {{--        {--}}
    {{--            quantity = e.target.value;--}}
    {{--            sum = quantity*roomTypePrice;--}}
    {{--            document.querySelector('#dm-ecom-product-stock').value = sum;--}}
    {{--        }--}}
    {{--        function loadDataRoom()--}}
    {{--        {--}}
    {{--            --}}
    {{--        }--}}

    {{--    </script>--}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var total = document.querySelector('#dm-ecom-product-total');
        var priceService = document.querySelector('#dm-ecom-product-service-price');
        var inputValueRoom = document.querySelector('#dm-ecom-product-price');
        var checkIn = document.querySelector('#dm-project-check-in');
        var checkOut = document.querySelector('#dm-project-check-out');
        var checkInDate, checkOutDate, rooms_type_id, diff, getDateBook;
        var checkin;
        var checkout;

        $(function (){
            $.ajaxSetup
            ({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#dm-ecom-product-roomtype").change(function (event)
            {
                event.preventDefault();
                let route = '{{route('getRoomBooking')}}'
                let $this = $(this)
                let value = $this.val().split('|');
                rooms_type_id = value[0];
                let price = value[1];
                inputValueRoom.value = price;

                if(diff)
                {
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
                    // console.log(diff);
                }
                console.log($this.val());
                if(checkOut.value)
                {
                    $.ajax({
                        method: 'GET',
                        url: route,
                        data: {
                            id: rooms_type_id,
                            checkin : checkIn.value,
                            checkout : checkOut.value
                        }
                    })
                        .done(function (res){
                            if (res.data){
                                let html = '<option value=""></option>'
                                $.each(res.data, function (index,value){
                                    html += "<option value='"+value.id+"'>" + value.name + "</option>"
                                })
                                $('#dm-ecom-product-room').html('').append(html);
                                $('#dm-ecom-product-room').niceSelect('update');
                            }
                        })
                }
            });

            $("#dm-project-check-in").change(function (event)
            {

                var checkindate = new Date(checkIn.value);
                checkin = new Date(checkindate.getTime() - (checkindate.getTimezoneOffset() * 60000 ))
                    .toISOString()
                    .split("T")[0];

                checkIn.value = checkin;

                checkInDate = new Date(checkIn.value);
                checkOutDate = new Date(checkOut.value);
                console.log(checkin);
                // console.log(checkout);



                if(checkOut.value != null){
                    diff = Math.abs(checkOutDate - checkInDate);
                    getDateBook = Number(Math.ceil(diff / (1000 * 60 * 60 * 24)));
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
                }
                if(checkOut.value && rooms_type_id)
                {
                    event.preventDefault();
                    let route = '{{route('getRoomBooking')}}'
                    $.ajax({
                        method: 'GET',
                        url: route,
                        data: {
                            id: rooms_type_id,
                            checkin : checkIn.value,
                            checkout : checkOut.value
                        }
                    })
                        .done(function (res){
                            if (res.data){
                                let html = '<option value=""></option>'
                                $.each(res.data, function (index,value){
                                    html += "<option value='"+value.id+"'>" + value.name + "</option>"
                                })
                                $('#dm-ecom-product-room').html('').append(html);
                                $('#dm-ecom-product-room').niceSelect('update');
                            }
                        })
                }
            });

            $("#dm-project-check-out").change(function (event)
            {

                var checkoutdate = new Date(checkOut.value);
                checkout = new Date(checkoutdate.getTime() - (checkoutdate.getTimezoneOffset() * 60000 ))
                    .toISOString()
                    .split("T")[0];

                checkOut.value = checkout;
                checkInDate = new Date(checkIn.value);
                checkOutDate = new Date(checkOut.value);
                console.log(checkout);

                if(checkIn.value != null){
                    diff = Math.abs(checkOutDate - checkInDate);
                    getDateBook = Number(Math.ceil(diff / (1000 * 60 * 60 * 24)));
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
                    console.log(diff);
                }
                if(rooms_type_id)
                {
                    event.preventDefault();
                    let route = '{{route('getRoomBooking')}}'
                    $.ajax({
                        method: 'GET',
                        url: route,
                        data: {
                            id: rooms_type_id,
                            checkin : checkIn.value,
                            checkout : checkOut.value
                        }
                    })
                    .done(function (res){
                        console.log(res.data);

                        if (res.data){
                            let html = '<option value=""></option>'
                            $.each(res.data, function (index,value){
                                html += "<option value='"+value.id+"'>" + value.name + "</option>"
                            })
                            $('#dm-ecom-product-room').html('').append(html);
                            $('#dm-ecom-product-room').niceSelect('update');
                        }
                    })
                }
            });

        })


        function changeService(e, id){
            let idService = '#service' + id;
            var checkboxService = document.querySelector(idService)
            let value = e.target.value.split('|');
            if (checkboxService.checked)
            {
                priceService.value = Number(priceService.value) + Number(value[1]);
                total.value = Number(total.value) + Number(value[1]);
            }
            else {
                priceService.value = Number(priceService.value) - Number(value[1]);
                total.value = Number(total.value) - Number(value[1]);
            }
        }

    </script>

@endsection



