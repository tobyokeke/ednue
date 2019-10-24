@extends('layouts.app')


@section('title','Education | Causes')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-black">
                        EDUCATION
                    </h1>
                    <p class="text-white link-nav"><a href="services.html">Services </a>  <span class="lnr lnr-arrow-right"></span>  <a href="vocational.html"> Vocational Skill</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start course-details Area -->
    <section class="course-details-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-contents">
                    <div class="main-image">
                        <img class="img-fluid" src="{{url('img/education.png')}}" alt="">
                    </div>
                    <div class="jq-tab-wrapper" id="horizontalTab">
                        <div class="jq-tab-menu">
                            <div class="jq-tab-title active" data-tab="1">Vocational skills</div>
                            <div class="jq-tab-title" data-tab="2">Internship services</div>
                            <div class="jq-tab-title" data-tab="3">Tutoring services</div>
                            <div class="jq-tab-title" data-tab="4">Guidance & counseling</div>
                        </div>
                        <div class="jq-tab-content-wrapper">
                            <div class="jq-tab-content active" data-tab="1">

                                <!-- vocational skills -->
                                We offer a wide range of vocational Skills that would help in equipping the abundant human capital in our communities to foster a better socio economic development platform  for a flourishing Society

                                <div>
                                    <b>Interested  in the service?</b> <br>
                                    <a class="primary-btn wh join-button"  data-toggle="modal" data-target="#exampleModal" href="#">APPLY NOW</a>
                                </div>

                                <br>
                                <br>
                            </div>
                            <div class="jq-tab-content" data-tab="2">
                                <!-- internship services -->

                                Through our strategic partnership with numerous organisations we offer young people an opportunity to gain a practical Experience in the process of the corporate world ,gaining  relevant  knowledge and inspiration to make better decisions and create better solutions for the emerging problems in our communities .

                                <div>
                                    <b>Interested?</b> <br>
                                    <a class="primary-btn wh join-button"  data-toggle="modal" data-target="#exampleModal" href="#">APPLY NOW</a>
                                </div>
                                <br>
                                <br>
                            </div>
                            <div class="jq-tab-content" data-tab="3">
                                With our vast network of Skilled and Experienced Teachers ,we offer opportunities for young students to perfect on their weaknesses in their programs and be better in solving issues in key subjects for a more confident and  informed  human capital in our society .

                                <div>
                                    <b>Interested?</b> <br>
                                    <a class="primary-btn wh join-button"  data-toggle="modal" data-target="#exampleModal" href="#">APPLY NOW</a>
                                </div>

                            </div>
                            <div class="jq-tab-content comment-wrap" data-tab="4">
                                Our robust team of psychologist help young students in understanding career structures in a real time process to be able to make make better career decisions in life and foster Economic Development In our society.

                                Apply here.
                                <div>
                                    <b>Interested?</b> <br>
                                    <a class="primary-btn wh join-button"  data-toggle="modal" data-target="#exampleModal" href="#">APPLY NOW</a>
                                </div>

                            </div>
                            <div class="jq-tab-content" data-tab="5">
                                <div class="review-top row pt-40">
                                    <div class="col-lg-3">
                                        <div class="avg-review">
                                            Average <br>
                                            <span>5.0</span> <br>
                                            (3 Ratings)
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <h4 class="mb-20">Provide Your Rating</h4>
                                        <div class="d-flex flex-row reviews">
                                            <span>Quality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                        <div class="d-flex flex-row reviews">
                                            <span>Puncuality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                        <div class="d-flex flex-row reviews">
                                            <span>Quality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedeback">
                                    <h4 class="pb-20">Your Feedback</h4>
                                    <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                                    <a href="#" class="mt-20 primary-btn text-right text-uppercase">Submit</a>
                                </div>
                                <div class="comments-area mb-30">
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a>
                                                        <div class="star">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Elsie Cunningham</a>
                                                        <div class="star">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Maria Luna</a>
                                                        <div class="star">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Maria Luna</a>
                                                        <div class="star">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or">George Mathews</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>$230</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Seats </p>
                                <span>15</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Schedule </p>
                                <span>2.00 pm to 4.00 pm</span>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn text-uppercase">Enroll the course</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End course-details Area -->


    <!-- Start popular-courses Area -->
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
        </div>
    </section>
    <!-- End popular-courses Area -->


@endsection