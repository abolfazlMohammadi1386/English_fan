@extends('front.layouts.master')

@section('title', 'پشت صحنه | ایکور')

@section('content')
<section class="breadcrumb-wrap br-bg-6">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>پشت صحنه</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>پشت صحنه</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>مستندات آموزشی</span>
                    <h2>نحوه ضبط و تولید دوره‌ها</h2>
                    <p>با تیم حرفه‌ای ما آشنا شوید و از پشت صحنه‌ها دیدن کنید</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @for ($i = 1; $i <= 6; $i++)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                <div class="course-card style2">
                    <div class="course-img">
                        <img src="{{ asset('assets/img/course/course-'.$i.'.jpg') }}" alt="Video Thumb">
                        <div class="course-price" style="background: #0d6efd; top: auto; bottom: 15px;">
                            <i class="ri-play-circle-line"></i> ویدیو
                        </div>
                    </div>
                    <div class="course-info">
                        <h3><a href="#">جلسه ضبط دوره مکالمه {{ $i }}</a></h3>
                        <p>نحوه تعامل استاد با هنرجو، تکنیک‌های جذاب تدریس و فضای صمیمی کلاس.</p>
                        <div class="course-metainfo mt-2">
                            <span><i class="ri-time-line"></i> مدت: ۳:۲۵ دقیقه</span>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection