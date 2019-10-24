@extends('layouts.auth')

@section('content')



    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                    <div class="slide-content bg-1">
                    </div>
                </div>
                <div class="col-12 col-md-8 h-100 bg-white">
                    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                        <div class="nav-get-started">
                            <p>Don't have an account?</p>
                            <a class="btn get-started-btn" href="register">GET STARTED</a>
                        </div>
                        <form method="post" action="{{route('login')}}">
                            @include('notification')

                            @csrf

                            <h3 class="mr-auto">Welcome! Lets authorize you</h3>
                            <p class="mb-5 mr-auto">Enter your details below.</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                    </div>
                                    <input type="email" class="form-control"  name="email" placeholder="Email">
                                </div>
                                @if($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                    </div>
                                    <input type="password" class="form-control" v-model="password" v-validate="'required'" name="password" placeholder="Password">
                                </div>
                                @if($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }} </span>
                                @endif

                                {{--<span class="error">{{ errors.first('password') }}</span>--}}
                            </div>
                            <div class="form-group">
                                <button :disabled="errors.any()" class="btn btn-primary submit-btn">SIGN IN</button>
                            </div>
                            <div class="wrapper mt-5 text-gray">
                                <p class="footer-text">Copyright © <?php echo date('Y') ?> Ednue. All rights reserved.</p>
                                <ul class="auth-footer text-gray">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
