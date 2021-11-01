@extends('layouts.layoutAdmin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    <p>{{$err}}</p>
                @endforeach
            </div>
        @endif
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Room Booking</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form class="form" method="POST" action="{{route('booking.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="dm-ecom-product-name">Name</label>
                                <input type="text" class="form-control" id="dm-ecom-product-name" name="customer_name">
                            </div>

                            <div class="form-group">
                                <label for="dm-ecom-product-email">Email</label>
                                <input type="email" class="form-control" id="dm-ecom-product-email" name="customer_email">
                            </div>

                            <div class="form-group">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label for="dm-ecom-product-category">Room's type</label>

                                <select class="js-select2 form-control" id="dm-ecom-product-roomtype" name="dm-ecom-product-roomtype" style="width: 100%;" data-placeholder="Choose one..">
                                    <option value=""></option>
                                    @foreach($roomtype as $type)
                                        <option value="{{$type->id}}|{{$type->price}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-label" for="dm-project-check-in">Check-in Date</label>
                                    <input type="text" class="js-datepicker form-control" id="dm-project-check-in" name="check-in-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$date}}"
                                           >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-label" for="dm-project-check-out">Check-out Date</label>
                                    <input type="text" class="js-datepicker form-control" id="dm-project-check-out" name="check-out-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value=""
                                           >
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label for="dm-ecom-product-category">Rooms</label>
                                <select class="js-select2 form-control" id="dm-ecom-product-room" name="dm-ecom-product-room" style="width: 100%;" data-placeholder="Choose one..">

                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-price">Room Price in USD ($)</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-price" name="dm-ecom-product-price"
                                           value="0" readonly>
                                </div>
                            </div>

                            <div class="form-group d-flex" >
                                @foreach($service_list as $service)
                                    <div class="form-check mr-5">
                                        <input type="checkbox" class="form-check-input" id="service{{$service->id}}" value="{{$service->id}}|{{$service->price}}" onchange="changeService(event, {{$service->id}})"
                                               name="service[]" id-service="service{{$service->id}}">
                                        <label class="form-check-label" for="exampleCheck1">{{$service->name}}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-price">Service Price in USD ($)</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-service-price" name="dm-ecom-product-service-price"
                                           value="0" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-total">Total ($)</label>
                                    <input readonly type="text" class="form-control" id="dm-ecom-product-total" name="dm-ecom-product-total" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">Save</button>
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
                let route = '{{route('getRoom')}}'
                let $this = $(this)
                let value = $this.val().split('|');
                rooms_type_id = value[0];
                let price = value[1];
                inputValueRoom.value = price;
                if(diff)
                {
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
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
                            console.log(res.data);
                            if (res.data){
                                let html = '<option value=""></option>'
                                $.each(res.data, function (index,value){
                                    html += "<option value='"+value.id+"'>" + value.name + "</option>"
                                })
                                $('#dm-ecom-product-room').html('').append(html);
                            }
                        })
                }
            });

            $("#dm-project-check-in").change(function (event)
            {
                checkInDate = new Date(checkIn.value);
                checkOutDate = new Date(checkOut.value);
                if(checkOut.value != null){
                    diff = Math.abs(checkOutDate - checkInDate);
                    getDateBook = Number(Math.ceil(diff / (1000 * 60 * 60 * 24)));
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
                }
                if(checkOut.value && rooms_type_id)
                {
                    event.preventDefault();
                    let route = '{{route('getRoom')}}'
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
                            }
                        })
                }
            });

            $("#dm-project-check-out").change(function (event)
            {
                checkOutDate = new Date(checkOut.value);
                checkInDate = new Date(checkIn.value);
                if(checkIn.value != null){
                    diff = Math.abs(checkOutDate - checkInDate);
                    getDateBook = Number(Math.ceil(diff / (1000 * 60 * 60 * 24)));
                    total.value = Number(inputValueRoom.value)*getDateBook + Number(priceService.value);
                }
                if(rooms_type_id)
                {
                    event.preventDefault();
                    let route = '{{route('getRoom')}}'
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


