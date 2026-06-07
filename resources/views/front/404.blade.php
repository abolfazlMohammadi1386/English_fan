@extends('front.layouts.master')

@section('title', 'خطای 404 | صفحه مورد نظر یافت نشد')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-5">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>خطای 404</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>خطای 404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="error-wrap ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-content">
                    <span class="trans_text v4">متاسفم!</span>
                    <h2>خطای 404</h2>
                    <p>صفحه مورد نظر شما در دسترس نیست</p>
                    <a href="{{ route('home') }}" class="btn v1"><i class="las la-arrow-right"></i> بازگشت به خانه</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection