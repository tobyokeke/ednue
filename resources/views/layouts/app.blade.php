<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title') | EDNUE</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{url('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>
<body>
<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="http://www.facebook.com/ednue_inc"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/ednue_inc"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+234 808 356 7784"><span class="lnr lnr-phone-handset"></span> <span class="text">+234 807 475 5517</span></a>
                    <a href="mailto:ednue@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">ednue@gmail.com</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{url('img/logodark.png')}}" alt="Ednue Logo" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                    <li><a href="{{route('frontend.about')}}">About</a></li>
                    <li><a href="{{route('frontend.causes')}}">Causes</a></li>
                    <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                    <li><a href="#" class="join" data-toggle="modal" data-target="#exampleModal">Join Us!</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

@include('notification')
@yield('content')



<!-- start footer Area -->
<footer class="footer-area section-gap ">
    <div class="container ">
        <div class="row ">

            <div class="col-lg-4 col-md-4 col-sm-4 ">
                <div class="single-footer-widget">
                    <h4>Causes</h4>
                    <ul>
                        <li><a href="{{route('frontend.cause.details' ,['cause' => 'education'])}}">Education</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('frontend.about')}}">About</a></li>
                        <li><a href="{{route('frontend.contact')}}">Contact us</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-footer-widget">
                    <h4>Connect</h4>
                    <ul>
                        <li>ednue@gmail.com</li>
                        <li>+234 807 475 5517</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
            <p class="footer-text m-0 col-lg-6 col-md-12">
                Copyright by <a href="https://ednue.com" target="_blank">Ednue</a> &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="{{route('login')}}">Login</a></p>
            <div class="col-lg-6 col-sm-12 footer-social">
                <a href="http://www.facebook.com/ednue_inc"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/ednue_inc"><i class="fa fa-twitter"></i></a>

            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<!-- Join Us Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="comment-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <form method="post" action="{{route('join.post')}}">
                        @csrf
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-12 name">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 name">
                                <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{11,20}" placeholder="Enter Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" required>
                            </div>
                        </div>

                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-12 name">
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Date of Birth'" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 email">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            </div>

                        </div>
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-12 email">
                                <label style="font-size: 14px;">Are you politically inclined?</label>
                                <select class="form-control" required name="politically_inclined">
                                    <option value="" selected disabled >Choose</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12 email">
                                <label style="font-size: 14px;">Highest level of education?</label>
                                <select class="form-control" required name="highest_education">
                                    <option value="" selected disabled >Choose</option>
                                    <option>Primary</option>
                                    <option>Secondary</option>
                                    <option>Tertiary</option>
                                    <option>Masters</option>
                                    <option>PHD</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="address" placeholder="Enter Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;">Politics/ Economy or Popular Culture (pop culture ).<br>
                                If you had one wish, what would you change about Nigeria ?</label>
                            <textarea class="form-control mb-10" rows="5" name="wish" placeholder="Enter Answer" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Answer'" required=""></textarea>
                        </div>
                        <button class="mt-40 text-uppercase genric-btn primary text-center">Submit form</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="{{url('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{url('js/easing.min.js')}}"></script>
<script src="{{url('js/hoverIntent.js')}}"></script>
<script src="{{url('js/superfish.min.js')}}"></script>
<script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('js/jquery.tabs.min.js')}}"></script>
<script src="{{url('js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('js/owl.carousel.min.js')}}"></script>
<script src="{{url('js/mail-script.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>

<link rel="stylesheet" href="{{url('css/daterangepicker.css')}}">
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/moment.js')}}"></script>
<script src="{{url('js/daterangepicker.js')}}"></script>


<script>
    $(document).ready(function(){



        //Date range as a button
        $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        }, function(start, end) {
            $('#startDate').val(start.format('MM-DD-YY'));
            $('#endDate').val(end.format('MM-DD-YY'));
            $('#dateForm').submit();
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        });

        $('#daterange2-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        }, function(start, end) {
            $('#startDate').val(start.format('DD-MM-YYYY'));
            $('#endDate').val(end.format('DD-MM-YYYY'));
            // $('#dateForm').submit();
            $('#daterange2-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        });

        //Initialize Select2 Elements

        // $('.select2').select2();

    });
</script>

</body>
</html>