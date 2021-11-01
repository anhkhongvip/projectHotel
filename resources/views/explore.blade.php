@extends('layouts.frontend')
@section('content')


    <!-- Primary Page Layout
	================================================== -->

    <div class="section big-55-height over-hide">

        <div id="poster_background-explore"></div>
        <div id="video-wrap" class="parallax-top">
            <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" poster="img/trans.png">
                <source src="video/video-explore.mp4" type="video/mp4">
            </video>
        </div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Explore Thessaloniki</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section over-hide">
        <div class="img-wrap">
            <img src="img/explore1.jpg" alt="">
        </div>
    </div>

    <div class="section padding-top-bottom over-hide">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom over-hide">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrap">
                            <img src="img/explore2.jpg" alt="">
                        </div>
                        <p class="mb-0 mt-3 color-black text-center"><strong><em>night life</em></strong></p>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="img-wrap">
                            <img src="img/explore4.jpg" alt="">
                        </div>
                        <p class="mb-0 mt-3 color-black text-center"><strong><em>night life</em></strong></p>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="img-wrap">
                            <img src="img/explore3.jpg" alt="">
                        </div>
                        <p class="mb-0 mt-3 color-black text-center"><strong><em>city view</em></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom over-hide">
        <div class="section z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide background-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="subtitle with-line text-center mb-4">luxury</div>
                    <h3 class="text-center padding-bottom-small">Our rooms</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-lg-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <div class="room-box background-white">
                        <div class="room-name">suite tanya</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room3.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">pool suite</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="{{asset('roomgallery')}}">book from 130$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <a href="{{asset('roomgallery')}}">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
                    <div class="room-box background-white">
                        <div class="room-name">suite helen</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="img/room4.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">small room</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="{{asset('roomgallery')}}">book from 80$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/4.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <a href="{{asset('roomgallery')}}">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.6s">
                    <div class="room-box background-white">
                        <div class="room-name">suite andrea</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room5.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">Apartment</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="{{asset('roomgallery')}}">book from 110$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <a href="{{asset('roomgallery')}}">full info</a>
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

@endsection
