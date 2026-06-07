@extends('front.layouts.master')

@section('title', 'فراموشی رمز عبور | ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>بازیابی رمز عبور</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>فراموشی رمز عبور</li>
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
                    <h2 class="text-center mb-0">بازیابی رمز عبور</h2>
                </div>
                <div class="login-body">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>آدرس ایمیل</label>
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید" value="{{ old('email') }}" required>
                                </div>
                                <div class="mt-2 text-muted small">
                                    لینک بازیابی رمز عبور برای شما ارسال خواهد شد.
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn v1 w-100">ارسال لینک بازیابی</button>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-3">
                                <p class="mb-0"><a class="link" href="{{ route('login') }}">بازگشت به صفحه ورود</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection