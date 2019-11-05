@extends('layouts.app')

@section('title','Our Team')

@section('content')


    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-black">
                        Our Team
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-courses Area -->
    <section class="info-area section-gap">
        <div class="container">
            <div class="title text-center" style="margin-top:-50px;">
                <p style="font-size: 24px">
                    Meet our team members.
                </p>
            </div>

            <div class="row">
                <div class="row col-4 align-items-center">
                    <div class="col-12 no-padding info-area-left p-0">
                        <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>AHMED</h1>
                        <p>
                            Bio goes here
                        </p>
                        <br>
{{--                        <a href="{{route('frontend.cause.details',['cause' => "education"])}}" class="genric-btn danger circle arrow">Learn More<span class="lnr lnr-arrow-right"></span></a>--}}
                    </div>

                </div>

                <div class="row col-4 align-items-center">
                    <div class="col-12 no-padding info-area-left p-0">
                        <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>ADAMS</h1>
                        <p>
                            Bio goes here
                        </p>
                        <br>
{{--                        <a href="{{route('frontend.cause.details',['cause' => "education"])}}" class="genric-btn danger circle arrow">Learn More<span class="lnr lnr-arrow-right"></span></a>--}}
                    </div>

                </div>

                <div class="row col-4 align-items-center">
                    <div class="col-12 no-padding info-area-left p-0">
                        <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>AHMED</h1>
                        <p>
                            Bio goes here
                        </p>
                        <br>
{{--                        <a href="{{route('frontend.cause.details',['cause' => "education"])}}" class="genric-btn danger circle arrow">Learn More<span class="lnr lnr-arrow-right"></span></a>--}}
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End popular-courses Area -->


@endsection