@extends('layouts.app')

@section('title','Projects')

@section('content')
    <link href="{{url('css/photoswipe.css')}}" rel="stylesheet">
    <link href="{{url('css/default-skin/default-skin.css')}}" rel="stylesheet">

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-black">
                        Projects
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
                    <img class="img-fluid" src="{{url('images/pvc/1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>Ednue pvc campaign </h1>
                    <p>

                        The Ednue foundation Team toured around different registration points around Abuja to Educate the spectators on The importance of all votes and help out the officials in controlling  the crowd to carry out an organized registration while also selflessly providing essentials for some processes .
                    </p>
                    <br>
                    <a  id="openGallery1" href="#" class="mb-2 genric-btn danger circle arrow">View Gallery<span class="lnr lnr-arrow-right"></span></a>
                </div>

            </div>
            <div class="row align-items-center">
                <div class="d-lg-none col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/conference/1.jpg')}}" alt="">
                </div>

                <div class="col-lg-6 info-area-right pl-3">
                    <h1>Ednue Annual Conference : voting for socio economic development</h1>
                    <p>
                        The Ednue foundations Annual conference Aimed at educating young people on the effects of voting right and its importance to the socio economic development for an inspired future that would foster ideal social Excellence for growth .
                    </p>
                    <br>
                    <a href="#" id="openGallery2" class="mb-2 genric-btn danger circle arrow">View Gallery<span class="lnr lnr-arrow-right"></span></a>
                </div>

                <div class="d-none d-md-none d-lg-block col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/conference/1.jpg')}}" alt="">
                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/water/1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>A bottle of water because your vote counts</h1>
                    <p>
                        The Ednue foundation at the Fbs ole football tournament educated young spectators on why they had to be interested in getting a pvc by offering a bottle of water to stay hydrated at the venue if you were interested in getting registered or just had your card ready , Ednue foundation also provided spectators with important information to aid all efforts of future registration ,and kept over 250 people hydrated and informed.
                    </p>
                    <br>
                    <a href="#" id="openGallery3" class="mb-2 genric-btn danger circle arrow">View Gallery<span class="lnr lnr-arrow-right"></span></a>
                </div>

            </div>
            <div class="row align-items-center">
                <div class="d-lg-none col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/health/1.jpg')}}" alt="">
                </div>

                <div class="col-lg-6 info-area-right pl-3">
                    <h1>Mental Health Awareness </h1>
                    <p>
                        The Ednue foundation orgaanized an art and photography gala  that was aimed at inspiring hope for depressed people and also a free opportunity to get educated on how to manage, cure and help people in depression by our robust team of professional psychologists and guidance and counseling personnel .
                    </p>
                    <br>
                    <a href="#" id="openGallery4" class="mb-2 genric-btn danger circle arrow">View Gallery<span class="lnr lnr-arrow-right"></span></a>
                </div>

                <div class="d-none d-md-none d-lg-block col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/health/1.jpg')}}" alt="">
                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="{{url('images/sdg/14.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>UN Sdg story presentation</h1>
                    <p>
                        The Ednue team was invited by the Sdg story to present their beautiful work and share how they have been making an impact with all their initiatives and programs over the year ,to inspire a new generation of young people with the interest of fostering development and making an impact in the society.
                    </p>
                    <br>
                    <a href="#" id="openGallery5" class="mb-2 genric-btn danger circle arrow">View Gallery<span class="lnr lnr-arrow-right"></span></a>
                </div>

            </div>

        </div>
    </section>
    <!-- End popular-courses Area -->




    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <script>

        $(document).ready(function(){
            var data1 = '{!! $requiredImages1 !!}';
            var data2 = '{!! $requiredImages2 !!}';
            var data3 = '{!! $requiredImages3 !!}';
            var data4 = '{!! $requiredImages4 !!}';
            var data5 = '{!! $requiredImages5 !!}';

            var imageItems1 = JSON.parse(data1);
            var imageItems2 = JSON.parse(data2);
            var imageItems3 = JSON.parse(data3);
            var imageItems4 = JSON.parse(data4);
            var imageItems5 = JSON.parse(data5);

            $('.carousel').carousel();


            function openGallery(items) {


                var pswpElement = document.querySelectorAll('.pswp')[0];

                // define options (if needed)
                var options = {
                    // optionName: 'option value'
                    // for example:
                    index: 0 // start at first slide
                };

                // Initializes and opens PhotoSwipe
                var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();

            }


            $('#openGallery1').on('click',function(){
                openGallery(imageItems1);
            });
            $('#openGallery2').on('click',function(){
                openGallery(imageItems2);
            });
            $('#openGallery3').on('click',function(){
                openGallery(imageItems3);
            });
            $('#openGallery4').on('click',function(){
                openGallery(imageItems4);
            });
            $('#openGallery5').on('click',function(){
                openGallery(imageItems5);
            });


        });

    </script>



@endsection