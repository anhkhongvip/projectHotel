@extends('layouts.frontend')
@section('content')

    <!-- Primary Page Layout
	================================================== -->

    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url('img/3.jpg')"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Services</div>
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

    <div class="section padding-top-bottom over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="subtitle with-line text-center mb-4">elegant suites</div>
                    <h3 class="text-center padding-bottom-small">Unpretentious luxury</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-sm-6 col-lg-4">
                    <div class="services-box text-center">
                        <img src="img/1.svg" alt="">
                        <h5 class="mt-2">smoking free</h5>
                        <p class="mt-3">B52 is committed to providing its guests and associates with a smoke-free environment, and is proud to boast one of the most comprehensive smoke-free hotel policies in the industry.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
                    <div class="services-box text-center">
                        <img src="img/2.svg" alt="">
                        <h5 class="mt-2">king rooms</h5>
                        <p class="mt-3">Our king guest rooms and suites at our Spokane hotel are equipped with 55-inch LED 4k Smart TVs, Keurigs® serving Starbucks® coffee, and offer guests beautiful views of city.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
                    <div class="services-box text-center">
                        <img src="img/3.svg" alt="">
                        <h5 class="mt-2">Yacht rental</h5>
                        <p class="mt-3">Browse to find bareboat, crewed or by the cabin charters or speak to our specialist team about our high maintenance standards, exciting custom itineraries and hidden gem recommends.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/4.svg" alt="">
                        <h5 class="mt-2">welcome drink</h5>
                        <p class="mt-3">Welcome drink is prepared at the Bar and distributed by the Bartender or waiter in charge with its designated form.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/5.svg" alt="">
                        <h5 class="mt-2">swimming pool</h5>
                        <p class="mt-3">Vacation in style this summer at the city, where the rooftop pool and sun terrace are an enviable spot from which to admire the city.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/6.svg" alt="">
                        <h5 class="mt-2">food included</h5>
                        <p class="mt-3">With our unusual Design and Exceptional Service you can dive into a exceptional Themeworld between The Rhein, Mosel and Lahn.</p>
{{--                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-dark padding-top-bottom-smaller over-hide">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">

                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
                        <div class="amenities">
                            <img src="img/icons/1.svg" alt="">
                            <p>no smoking</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
                        <div class="amenities">
                            <img src="img/icons/2.svg" alt="">
                            <p>big beds</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-md-0">
                        <div class="amenities">
                            <img src="img/icons/3.svg" alt="">
                            <p>yacht riding</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
                        <div class="amenities">
                            <img src="img/icons/4.svg" alt="">
                            <p>free drinks</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
                        <div class="amenities">
                            <img src="img/icons/5.svg" alt="">
                            <p>swimming pool</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
                        <div class="amenities">
                            <img src="img/icons/6.svg" alt="">
                            <p>room breakfast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom background-grey over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="subtitle with-line text-center mb-4">Excellent services</div>
                    <h3 class="text-center padding-bottom-small">what we offer</h3>
                </div>
                <div class="section clearfix"></div>
            </div>
            @for ($i = 0; $i<count($lsServices);$i++)
                @if($i % 2 == 0)
                <div class="row background-white p-0 m-0">
                    <div class="col-xl-6 p-0">
                        <div class="img-wrap" id="rev-1">
                            <img src="{{asset($lsServices[$i]->image)}}" alt="" style="height: 350px; width: 555px">
                        </div>
                    </div>
                    <div class="col-xl-6 p-0 align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
                                <h5 class="">{{$lsServices[$i]->name}}</h5>
                                <p class="mt-3">{{$lsServices[$i]->description}}</p>
{{--                                <a class="mt-1 btn btn-primary" href="{{asset('post')}}">explore</a>--}}
{{--                                <a class="mt-1 btn btn-primary" href="#">explore</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($i % 2 == 1)
                <div class="row background-white p-0 m-0">
                    <div class="col-xl-6 p-0 align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
                                <h5 class="">{{$lsServices[$i]->name}}</h5>
                                <p class="mt-3">{{$lsServices[$i]->description}}</p>
{{--                                <a class="mt-1 btn btn-primary" href="{{asset('post')}}">explore</a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-first order-xl-last p-0">
                        <div class="img-wrap" id="rev-2">
                            <img src="{{asset($lsServices[$i]->image)}}" alt="" style="height: 350px; width: 555px">
                        </div>
                    </div>
                </div>
                @endif
            @endfor

        </div>
    </div>



@endsection
