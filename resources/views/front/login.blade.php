@extends('front.layouts.master')

@section('title', 'ورود | ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>ورود به حساب</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>ورود</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Login-wrap pt-100 pb-100">
    <div class="container">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="login-form">
                <div class="login-header bg-blue">
                    <h2 class="text-center mb-0">ورود</h2>
                </div>
                <div class="login-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>ایمیل یا نام کاربری</label>
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" name="password" class="form-control" placeholder="رمز عبور" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form_group mb-20">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">مرا به خاطر بسپار</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6 text-end mb-20">
                                <a href="{{ route('password.request') }}" class="link">فراموشی رمز عبور؟</a>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn v1 w-100">ورود به حساب</button>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-3">
                                <p class="mb-0">حساب کاربری ندارید؟ <a class="link" href="{{ route('register') }}">ثبت‌نام کنید</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection