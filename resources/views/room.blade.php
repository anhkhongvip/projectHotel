@extends('layouts.frontend')
@section('content')

    <!-- Primary Page Layout
	================================================== -->

    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url({{asset('img/1.jpg')}})"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Search</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom z-bigger">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mt-4 mt-lg-0">
                        <div class="row" id="loadRoomSearch">
                            @foreach($lsRoom as $room)
                                @csrf
                                <div class="col-lg-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                                    <div class="room-box background-grey">
                                        <div class="room-name">{{$room->name}}</div>
                                        <div class="room-per">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <img src="{{asset($room->image)}}" style="height: 185.15px" alt="">   {{-- img/room5.jpg--}}
                                        <div class="room-box-in">
                                            <p class="mt-3">{!! $room->excerpt !!}</p>
                                            <a class="mt-1 btn btn-primary" href="{{route('roomdetail', $room->id)}}">See more</a>
                                            <div class="room-icons mt-4 pt-4">
                                                <img src="img/5.svg" alt="">
                                                <img src="img/2.svg" alt="">
                                                <img src="img/3.svg" alt="">
                                                <a href="#">full info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--                            <div class="col-lg-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">--}}
                            {{--                                <div class="room-box background-grey">--}}
                            {{--                                    <div class="room-name">suite diana</div>--}}
                            {{--                                    <div class="room-per">--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                    </div>--}}
                            {{--                                    <img src="img/room6.jpg" alt="">--}}
                            {{--                                    <div class="room-box-in">--}}
                            {{--                                        <h5 class="">big Apartment</h5>--}}
                            {{--                                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>--}}
                            {{--                                        <a class="mt-1 btn btn-primary" href="#">book from 160$</a>--}}
                            {{--                                        <div class="room-icons mt-4 pt-4">--}}
                            {{--                                            <img src="img/5.svg" alt="">--}}
                            {{--                                            <img src="img/2.svg" alt="">--}}
                            {{--                                            <img src="img/3.svg" alt="">--}}
                            {{--                                            <a href="#">full info</a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-lg-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">--}}
                            {{--                                <div class="room-box background-grey">--}}
                            {{--                                    <div class="room-name">suite andrea</div>--}}
                            {{--                                    <div class="room-per">--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                    </div>--}}
                            {{--                                    <img src="img/room5.jpg" alt="">--}}
                            {{--                                    <div class="room-box-in">--}}
                            {{--                                        <h5 class="">Apartment</h5>--}}
                            {{--                                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>--}}
                            {{--                                        <a class="mt-1 btn btn-primary" href="#">book from 110$</a>--}}
                            {{--                                        <div class="room-icons mt-4 pt-4">--}}
                            {{--                                            <img src="img/5.svg" alt="">--}}
                            {{--                                            <img src="img/2.svg" alt="">--}}
                            {{--                                            <img src="img/3.svg" alt="">--}}
                            {{--                                            <a href="#">full info</a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-lg-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">--}}
                            {{--                                <div class="room-box background-grey">--}}
                            {{--                                    <div class="room-name">suite diana</div>--}}
                            {{--                                    <div class="room-per">--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                        <i class="fa fa-star"></i>--}}
                            {{--                                    </div>--}}
                            {{--                                    <img src="img/room6.jpg" alt="">--}}
                            {{--                                    <div class="room-box-in">--}}
                            {{--                                        <h5 class="">big Apartment</h5>--}}
                            {{--                                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>--}}
                            {{--                                        <a class="mt-1 btn btn-primary" href="#">book from 160$</a>--}}
                            {{--                                        <div class="room-icons mt-4 pt-4">--}}
                            {{--                                            <img src="img/5.svg" alt="">--}}
                            {{--                                            <img src="img/2.svg" alt="">--}}
                            {{--                                            <img src="img/3.svg" alt="">--}}
                            {{--                                            <a href="#">full info</a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-4 order-first order-lg-last">
                        <div class="section background-dark p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-daterange input-group" id="flight-datepicker">
                                        <div class="row">
                                            {{--                                                <div class="col-12">--}}
                                            {{--                                                    <div class="form-item">--}}
                                            {{--                                                        <span class="fontawesome-calendar"></span>--}}
                                            {{--                                                        <input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>--}}
                                            {{--                                                        <span class="date-text date-depart"></span>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="col-12 pt-4">--}}
                                            {{--                                                    <div class="form-item">--}}
                                            {{--                                                        <span class="fontawesome-calendar"></span>--}}
                                            {{--                                                        <input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>--}}
                                            {{--                                                        <span class="date-text date-return"></span>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            <div class="col-12 mb-3">
                                                <div class="form-item">
                                                    <label class="form-label" for="dm-project-check-in">Check-in Date</label>
                                                    <input type="text" class="js-datepicker " id="dm-project-check-in" name="check-in-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$lsDate}}">
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <div class="form-item">
                                                    <label class="form-label" for="dm-project-check-out">Check-out Date</label>
                                                    <input type="text" class="js-datepicker" id="dm-project-check-out" name="check-out-date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <label for="dm-ecom-product-category" style="color: white">Room's type</label>

                                    <select class="wide col-12 mb-4" id="dm-ecom-product-roomtype" name="dm-ecom-product-roomtype" style="width: 100%;">
                                        <option value="" selected data-placeholder="Choose one.."></option>
                                        @foreach($lsRoomType as $type)
                                            <option value="{{$type->id}}|{{$type->price}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="btn btn-primary col-12 " onclick="getSearchRoom(event)">Search</button>
                                </div>
                                {{--                                    <div class="col-12">--}}
                                {{--                                        <div class="row">--}}
                                {{--                                            <div class="col-12 pt-4">--}}
                                {{--                                                <select name="adults" class="wide">--}}
                                {{--                                                    <option data-display="adults">adults</option>--}}
                                {{--                                                    <option value="1">1</option>--}}
                                {{--                                                    <option value="2">2</option>--}}
                                {{--                                                    <option value="3">3</option>--}}
                                {{--                                                    <option value="4">4</option>--}}
                                {{--                                                    <option value="5">5</option>--}}
                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-12 pt-4">--}}
                                {{--                                                <select name="children" class="wide">--}}
                                {{--                                                    <option data-display="children">children</option>--}}
                                {{--                                                    <option value="1">1</option>--}}
                                {{--                                                    <option value="2">2</option>--}}
                                {{--                                                    <option value="3">3</option>--}}
                                {{--                                                    <option value="4">4</option>--}}
                                {{--                                                    <option value="5">5</option>--}}
                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-12 pt-5">--}}
                                {{--                                        <h6 class="color-white mb-3">Max night price:</h6>--}}
                                {{--                                        <div class="selecteurPrix">--}}
                                {{--                                            <div class="range-slider">--}}
                                {{--                                                <input class="input-range" type="range" value="100" min="1" max="500">--}}
                                {{--                                                <div class="valeurPrix">--}}
                                {{--                                                    <span class="range-value"></span>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <div class="col-12 col-md-6 col-lg-12 mt-2">
                                    <h6 class="color-white mb-3">Services:</h6>
                                    @foreach($lsService as $service)
                                        <ul class="list">
                                            <li class="list__item mb-3">
                                                <label class="label--checkbox" for="exampleCheck1">
                                                    <input type="checkbox" class="checkbox" id="service{{$service->id}}" value="{{$service->id}}|{{$service->price}}" onchange="changeService(event, {{$service->id}})"
                                                           name="service[]" id-service="service{{$service->id}}">
                                                    {{$service->name}}
                                                </label>
                                            </li>
                                        </ul>
                                    @endforeach

                                    {{--                                        <ul class="list">--}}
                                    {{--                                            <li class="list__item">--}}
                                    {{--                                                <label class="label--checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="checkbox">--}}
                                    {{--                                                    welcome drink--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class="list__item">--}}
                                    {{--                                                <label class="label--checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="checkbox">--}}
                                    {{--                                                    television--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class="list__item">--}}
                                    {{--                                                <label class="label--checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="checkbox">--}}
                                    {{--                                                    king beds--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class="list__item">--}}
                                    {{--                                                <label class="label--checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="checkbox">--}}
                                    {{--                                                    bike rental--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class="list__item">--}}
                                    {{--                                                <label class="label--checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="checkbox">--}}
                                    {{--                                                    no smoking--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </li>--}}
                                    {{--                                        </ul>--}}
                                </div>




                                {{--                                    <div class="col-12 col-md-6 col-lg-12 pt-5">--}}
                                {{--                                        <h6 class="color-white mb-3">Extra services:</h6>--}}
                                {{--                                        <ul class="list">--}}
                                {{--                                            <li class="list__item">--}}
                                {{--                                                <label class="label--checkbox">--}}
                                {{--                                                    <input type="checkbox" class="checkbox">--}}
                                {{--                                                    breakfast--}}
                                {{--                                                </label>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="list__item">--}}
                                {{--                                                <label class="label--checkbox">--}}
                                {{--                                                    <input type="checkbox" class="checkbox">--}}
                                {{--                                                    swimming pool--}}
                                {{--                                                </label>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="list__item">--}}
                                {{--                                                <label class="label--checkbox">--}}
                                {{--                                                    <input type="checkbox" class="checkbox">--}}
                                {{--                                                    car rental--}}
                                {{--                                                </label>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="list__item">--}}
                                {{--                                                <label class="label--checkbox">--}}
                                {{--                                                    <input type="checkbox" class="checkbox">--}}
                                {{--                                                    sea view--}}
                                {{--                                                </label>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="list__item">--}}
                                {{--                                                <label class="label--checkbox">--}}
                                {{--                                                    <input type="checkbox" class="checkbox">--}}
                                {{--                                                    laundry--}}
                                {{--                                                </label>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-dark over-hide">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="{{asset('services')}}">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-1.jpg" alt="">
                            <div class="services-text-over">spa salon</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                    <a href="{{asset('services')}}">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-2.jpg" alt="">
                            <div class="services-text-over">restaurant</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="{{asset('services')}}">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-3.jpg" alt="">
                            <div class="services-text-over">pool</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="{{asset('services')}}">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-4.jpg" alt="">
                            <div class="services-text-over">activities</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var checkIn = document.querySelector('#dm-project-check-in');
        var checkOut = document.querySelector('#dm-project-check-out');
        var room_type_id = document.querySelector('#dm-ecom-product-roomtype');


        function getSearchRoom (event){
            event.preventDefault();
            $.ajaxSetup
            ({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log(room_type_id);

            let route = '{{route('SearchRoom')}}';
            var value = room_type_id.value.split('|');



            var checkindate = new Date(checkIn.value);
            var checkin = new Date(checkindate.getTime() - (checkindate.getTimezoneOffset() * 60000 ))
                .toISOString()
                .split("T")[0];
            var checkoutdate = new Date(checkOut.value);
            var checkout = new Date(checkoutdate.getTime() - (checkoutdate.getTimezoneOffset() * 60000 ))
                .toISOString()
                .split("T")[0];

            console.log(checkin);


            $.ajax({
                method: 'GET',
                url: route,
                data: {
                    checkin : checkin,
                    checkout : checkout,
                    id : value[0]

                },
                success : function (res){
                    {{--if (res.data){--}}
                    {{--    let html = "";--}}
                    {{--    $.each(res.data, function (index,value){--}}
                    {{--    --}}{{--    html += "<div class=\"col-lg-6 mt-4\" data-scroll-reveal=\"enter bottom move 50px over 0.7s after 0.2s\">\n" +--}}
                    {{--    --}}{{--        "                            <div class=\"room-box background-grey\">\n" +--}}
                    {{--    --}}{{--        "                                <div class=\"room-name\">"+value.name+"</div>\n" +--}}
                    {{--    --}}{{--        "                            <div class=\"room-per\">\n" +--}}
                    {{--    --}}{{--        "                                <i class=\"fa fa-star\"></i>\n" +--}}
                    {{--    --}}{{--        "                                <i class=\"fa fa-star\"></i>\n" +--}}
                    {{--    --}}{{--        "                                <i class=\"fa fa-star\"></i>\n" +--}}
                    {{--    --}}{{--        "                                <i class=\"fa fa-star\"></i>\n" +--}}
                    {{--    --}}{{--        "                                <i class=\"fa fa-star\"></i>\n" +--}}
                    {{--    --}}{{--        "                            </div>\n" +--}}
                    {{--    --}}{{--        "                            <img src=\"{{asset($roomType->image)}}\" style=\"height: 185.15px\" alt=\"\">   --}}{{----}}{{-- img/room5.jpg--}}{{----}}{{--\n" +--}}
                    {{--    --}}{{--        "                            <div class=\"room-box-in\">\n" +--}}
                    {{--    --}}{{--        "                            <p class=\"mt-3\">"+value.excerpt+"</p>\n" +--}}
                    {{--    --}}{{--        "                            <a class=\"mt-1 btn btn-primary\" href=\"{{route('roomdetail', $roomType->id)}}\">See more</a>\n" +--}}
                    {{--    --}}{{--        "                            <div class=\"room-icons mt-4 pt-4\">\n" +--}}
                    {{--    --}}{{--        "                                <img src=\"img/5.svg\" alt=\"\">\n" +--}}
                    {{--    --}}{{--        "                                    <img src=\"img/2.svg\" alt=\"\">\n" +--}}
                    {{--    --}}{{--        "                                        <img src=\"img/3.svg\" alt=\"\">\n" +--}}
                    {{--    --}}{{--        "                                            <a href=\"#\">full info</a>\n" +--}}
                    {{--    --}}{{--        "  </div>\n" +--}}
                    {{--    --}}{{--        "  </div>\n" +--}}
                    {{--    --}}{{--        "  </div>\n" +--}}
                    {{--    --}}{{--        "  </div>"--}}
                    {{--    --}}{{--})--}}
                    {{--    $('#dm-ecom-product-room').html('').append(html);--}}
                    {{--}--}}
                }

            })
        }
    </script>

@endsection
