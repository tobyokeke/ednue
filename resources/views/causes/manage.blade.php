@extends('layouts.app')

@section('title','Causes')

@section('content')


    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-black">
                        Causes
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
                    We are passionate about driving the conversations around the topics below to ensure we orient the public
                    mentality to the societal ideals.
                </p>
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
                    <a href="{{route('frontend.cause.details',['cause' => "education"])}}" class="genric-btn danger circle arrow">Learn More<span class="lnr lnr-arrow-right"></span></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End popular-courses Area -->


@endsection