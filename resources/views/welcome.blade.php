@extends('layouts.app')

@section('title','Home')
@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row  d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-4 col-md-12">
                    <h1 class="text-uppercase">
                        Starting Conversations <br>
                        That matter
                    </h1>
                    <p class="pt-10 pb-10">
                        Ednue foundation is an initiative committed to Creating Solutions <br> that foster development in the society
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{url('img/homeimg.jpg')}}" style="width:100%">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Our mission</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                To make a positive impact by creating sustainable social development solutions that would ignite the minds of the society through education into being part of an ideal community of productive citizens who are ready to collectively contribute to the Excellence of the socio economic structure Of a nation.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Our Vision</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                To become an avenue that connects the society to able ideal system of order , to become a key partner of an ideal african community with significance contributions ,Relevant influence and Excellent practical Solutions for social Education and Development .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Our Values</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Educating the society on core social issues , Training the human capital for Resourceful Economic contribution through skills acquisition and innovation , impacting the mind of the society through ideal initiatives and programs with mental analysis for development.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End feature Area -->
    <section class="popular-course-area section-gap philosophy-section">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Our Philosophy</h1>
                    <p>
                        Our philosophy is to create solutions that foster development in the society by educating the community and positively shaping the mindset and perspectives thereby
                        ensuring a better future.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Start popular-courses Area -->
    <section class="info-area section-gap">
        <div class="container">
            <div class="title text-center">
                <h1 class="mb-10">Projects</h1>
                <p>We are passionate about driving the conversations around the topics below to ensure we orient the public mentality to the societal ideals.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('img/education.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>Education</h1>
                    <p>
                        Ednue foundation is an initiative committed to Creating Solutions that foster development in the society by Educating the community and positively shaping the mindset and perspectives through carefully designed programs , with a robust team of Passionate Creatives, highly experienced Economist and psychologists,
                        social Issues are analysed and carefully presented to the team for a special approach to tackling human capital deficit , ideal citizen participation and productivity , contribution to Sustainable social stability in the community, and  ideal service delivery in governance all through Key programs in free social Education  ,
                        through our Excelleny volunteer network we also offer free ideal opportunities to positively impact on the human capital through vocational skills acquisition, Internship services, and Tutoring services.
                    </p>
                    <br>
                    <a href="{{route('frontend.cause.details',['cause' => 'education'])}}" class="genric-btn danger circle arrow">Learn More<span class="lnr lnr-arrow-right"></span></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End popular-courses Area -->


    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap contact-section">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row justify-content-center">
                <div class="wrap">
                    <h1 class="text-white">WANT TO HAVE A BETTER FUTURE?</h1>
                    <p>
                        Lets start conversations that matter.
                    </p>
                    <p>For a better Nigeria.</p>
                    <a class="primary-btn wh"  data-toggle="modal" data-target="#exampleModal" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-one Area -->



@endsection