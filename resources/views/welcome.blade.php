@extends('layouts.frontend')
@section('content')

    <!-- Primary Page Layout
	================================================== -->

    <div class="section hero-full-height over-hide">

        <div id="poster_background"></div>
        <div id="video-wrap" class="parallax-top">
            <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" poster="img/trans.png">
                <source src="video/video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="dark-over-video"></div>

        <div class="hero-center-section ver-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text-ver-2">For the Joy<br>of Life</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-dark z-too-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center home-translate">
                        <div class="col-xl-8">
                            <div class="row justify-content-center home-shadow">
                                <div class="col-md-6 px-sm-0">
                                    <div class="booking-sep-wrap">
                                        <div class="input-daterange input-group" id="flight-datepicker-1">
                                            <div class="form-item">
                                                <span class="fontawesome-calendar"></span>
                                                <input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="check-in" data-date-format="DD, MM d"/>
                                                <span class="date-text date-depart"></span>
                                            </div>
                                            <div class="form-item">
                                                <span class="fontawesome-calendar"></span>
                                                <input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out" data-date-format="DD, MM d"/>
                                                <span class="date-text date-return"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 px-sm-0">
                                    <div class="quantity">
                                        <input type="number" min="1" max="9999" step="1" value="1" >
                                    </div>
                                </div>
                                <div class="col-md-3 px-sm-0">
                                    <a class="booking-button-big" href="{{asset('search')}}">check<br>availability</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="subtitle text-center mb-4">hotel Thalia</div>
                            <h2 class="text-center">Here is a tribute to good life!</h2>
                            <p class="text-center mt-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="img-wrap">
                        <img src="img/rooms.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-grey over-hide">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-xl-6 px-0">
                    <div class="img-wrap" id="rev-1">
                        <img src="img/room1.jpg" alt="">
                        <div class="text-element-over">private pool suite</div>
                    </div>
                </div>
                <div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-xl-8 text-center">
                            <h3 class="text-center">Private pool suite</h3>
                            <p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-5 btn btn-primary" href="{{asset('search')}}">check availability</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-xl-6 px-0 mt-4 mt-xl-0 pb-5 pb-xl-0 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-xl-8 text-center">
                            <h3 class="text-center">Sea view suite</h3>
                            <p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-5 btn btn-primary" href="{{asset('search')}}">check availability</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 px-0 order-first order-xl-last mt-5 mt-xl-0">
                    <div class="img-wrap" id="rev-2">
                        <img src="img/room2.jpg" alt="">
                        <div class="text-element-over">sea view suite</div>
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
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
                    <div class="services-box text-center">
                        <img src="img/2.svg" alt="">
                        <h5 class="mt-2">king beds</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
                    <div class="services-box text-center">
                        <img src="img/3.svg" alt="">
                        <h5 class="mt-2">Yacht rental</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/4.svg" alt="">
                        <h5 class="mt-2">welcome drink</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/5.svg" alt="">
                        <h5 class="mt-2">swimming pool</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/6.svg" alt="">
                        <h5 class="mt-2">food included</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="{{asset('services')}}">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
