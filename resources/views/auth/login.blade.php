@extends('frontend.main_master')
@section('main')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Sign In</li>
            </ul>
            <h3>Sign In</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Sign In Area -->
<div class="sign-in-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-all-form">
                    <div class="contact-form">
                        <div class="section-title text-center">
                            <span class="sp-color">Sign In</span>
                            <h2>Đăng nhập vào tài khoản của bạn!</h2>
                        </div>

                        
                     
                <form  method="POST" action="{{ route('login') }}">
                 @csrf
        <div class="row">
        <div class="col-lg-12 ">
            <div class="form-group">
                <input type="text" name="login" id="login" class="form-control" required data-error="Please enter your Username or Email" placeholder="Username or Email">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
            </div>
        </div>

                    <div class="col-lg-6 col-sm-6 form-condition">
                        <div class="agree-label">
                            <input type="checkbox" id="chb1">
                            <label for="chb1">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <a class="forget" href="{{route('password.request')}}">Quên mật khẩu?</a>
                    </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                           Đăng nhập ngay
                        </button>
                    </div>

                    <div class="col-12">
                        <p class="account-desc">
                            Bạn không phải là thành viên?
                            <a href="{{route('register')}}">Đăng ký</a>
                        </p>
                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Area End -->


@endsection