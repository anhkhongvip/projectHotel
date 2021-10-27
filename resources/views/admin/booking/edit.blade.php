@extends('layouts.layoutAdmin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Edit Room Booking</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form class="form" method="POST" onsubmit="return false;" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="dm-ecom-product-name">Name</label>
                                <input type="text" class="form-control" id="dm-ecom-product-name" name="dm-ecom-product-name">
                            </div>
                            <div class="form-group">
                                <label for="dm-ecom-product-email">Email</label>
                                <input type="email" class="form-control" id="dm-ecom-product-email" name="dm-ecom-product-email">
                            </div>
                            <div class="form-group">
                                <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                                <!-- For more info and examples you can check out http://ckeditor.com -->
                                <label for="dm-ecom-product-description">Description</label>
                                <textarea id="js-ckeditor" name="dm-ecom-product-description"></textarea>
                            </div>
                            <div class="form-group">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label for="dm-ecom-product-category">Room's type</label>

                                <select class="js-select2 form-control" id="dm-ecom-product-roomtype" name="dm-ecom-product-roomtype" style="width: 100%;" data-placeholder="Choose one..">
                                    <option value=""></option>
                                    @foreach($roomtype as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label for="dm-ecom-product-category">Rooms</label>
                                <select class="js-select2 form-control" id="dm-ecom-product-room" name="dm-ecom-product-room" style="width: 100%;" data-placeholder="Choose one.." onchange="roomChange(event)">

                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-price">Price in USD ($)</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-price" name="dm-ecom-product-price"
                                           value="" onchange="priceChange(event)" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-quantity">Quantity</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-quantity" name="dm-ecom-product-quantity" value="1" onchange="quantityChange(event)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-total">Total ($)</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-total" name="dm-ecom-product-total" value="0" disabled>
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
                let rooms_type_id = $this.val()
                console.log(rooms_type_id);
                $.ajax({
                    method: 'GET',
                    url: route,
                    data: {
                        id: rooms_type_id
                    }
                })
                    .done(function (res){
                        if (res.data){
                            let html = '<option value=""></option>'
                            $.each(res.data, function (index,value){
                                html += "<option value='"+value.price+"'>" + value.name + "</option>"
                            })
                            $('#dm-ecom-product-room').html('').append(html);
                        }
                    })
            });
        })
        var inputValueRoom = document.querySelector('#dm-ecom-product-price');
        var total = document.querySelector('#dm-ecom-product-total');
        var quantity = document.querySelector('#dm-ecom-product-quantity');
        function roomChange(e){
            inputValueRoom.value = e.target.value;
            total.value = Number(quantity.value)*Number(e.target.value);
        }
        function quantityChange(e){
            total.value = Number(e.target.value)*Number(inputValueRoom.value);
        }

    </script>

@endsection


