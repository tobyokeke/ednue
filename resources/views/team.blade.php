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

            <div class="row" align="center" style="text-align: center">
                <div class="row col-md-4  align-items-center">
                    <div class="col-12  info-area-left p-1">
                        <img class="img-fluid" src="{{url('images/team/founder.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Ahmad Tubo</h1>
                        <p style="text-align: center">
                            Founder
                        </p>
                    </div>

                </div>

                <div class="row col-md-4 align-items-center">
                    <div class="col-12  info-area-left p-1">
                        <img class="img-fluid" src="{{url('images/team/socials.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Adams Godswill</h1>
                        <p style="text-align: center">
                            Corporate Service Manager
                        </p>
                    </div>

                </div>

                <div class="row col-md-4 align-items-center">
                    <div class="col-12 info-area-left p-1">
                        <img class="img-fluid" src="{{url('images/team/creative.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Mustapha sidi</h1>
                        <p style="text-align: center">
                            Creative Director
                        </p>
                    </div>

                </div>

            </div>
            <div class="row" align="center" style="text-align: center">
                <div class="row col-md-4 align-items-center">
                    <div class="col-12 info-area-left p-1">
                        <img class="img-fluid" src="{{url('images/team/socials.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Imam Jabir</h1>
                        <p style="text-align: center">
                            Director of social behavior and cultural norms
                        </p>
                    </div>

                </div>

                <div class="row col-md-4 align-items-center">
                    <div class="col-12 info-area-left p-1">
                        <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Muhammad bello</h1>
                        <p style="text-align: center">
                            Public relations manager
                        </p>
                    </div>

                </div>

                <div class="row col-md-4 align-items-center">
                    <div class="col-12 info-area-left p-1">
                        <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                    </div>
                    <div class="col-12 info-area-right p-0">
                        <h1>Nafisa Abdulazeez</h1>
                        <p style="text-align: center">
                            Legal Director
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End popular-courses Area -->


@endsection