@extends('front.layouts.master')

@section('title', 'کتابخانه جزوه‌ها | ایکور')

@section('content')
<section class="breadcrumb-wrap br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>کتابخانه جزوه‌ها</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>کتابخانه</li>
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
                    <span>منابع آموزشی</span>
                    <h2>جزوه‌ها و فایل‌های تخصصی زبان</h2>
                    <p>دانلود رایگان جزوه‌ها، پاورپوینت‌ها و فایل‌های صوتی اساتید</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="filterType">
                        <option value="all">همه فایل‌ها</option>
                        <option value="PDF">PDF</option>
                        <option value="PowerPoint">پاورپوینت</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center" id="libraryItems">
            @php
                $libraryItems = [
                    ['id' => 1, 'img' => 'course-1.jpg', 'title' => 'جزوه جامع گرامر زبان انگلیسی', 'type' => 'PDF', 'size' => '2.4 MB', 'downloads' => 156, 'desc' => 'شامل تمام نکات گرامری سطح متوسط تا پیشرفته'],
                    ['id' => 2, 'img' => 'course-2.jpg', 'title' => 'پاورپوینت آموزش مکالمه', 'type' => 'PowerPoint', 'size' => '5.1 MB', 'downloads' => 98, 'desc' => 'اسلایدهای جذاب برای تقویت مکالمه'],
                    ['id' => 3, 'img' => 'course-3.jpg', 'title' => 'جزوه لغات ضروری تافل', 'type' => 'PDF', 'size' => '1.8 MB', 'downloads' => 203, 'desc' => '۵۰۰ لغت کلیدی به همراه مثال'],
                    ['id' => 4, 'img' => 'course-4.jpg', 'title' => 'پاورپوینت قواعد پیشرفته', 'type' => 'PowerPoint', 'size' => '3.2 MB', 'downloads' => 67, 'desc' => 'مناسب برای سطوح upper-intermediate'],
                    ['id' => 5, 'img' => 'course-5.jpg', 'title' => 'جزوه نمونه سوالات آیلتس', 'type' => 'PDF', 'size' => '4.0 MB', 'downloads' => 189, 'desc' => '۴ آزمون شبیه‌سازی شده با پاسخ تشریحی'],
                ];
            @endphp

            @foreach($libraryItems as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 library-item" data-type="{{ $item['type'] }}">
                <div class="course-card style1">
                    <div class="course-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/course/'.$item['img']) }}" alt="Image">
                        </a>
                        <div style="position: absolute; top: 15px; right: 15px; background: {{ $item['type'] == 'PDF' ? '#dc3545' : '#fd7e14' }}; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                            {{ $item['type'] }}
                        </div>
                    </div>
                    <div class="course-info">
                        <h3><a href="#">{{ $item['title'] }}</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li><i class="ri-file-text-line"></i> حجم: {{ $item['size'] }}</li>
                                <li><i class="ri-download-line"></i> {{ $item['downloads'] }} دانلود</li>
                            </ul>
                        </div>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                    <div class="course-metainfo">
                        <div class="course-metainfo-left">
                            <ul>
                                <li><p><i class="ri-file-copy-line"></i> {{ $item['type'] }}</p></li>
                            </ul>
                        </div>
                        <div class="course-metainfo-right">
                            <a href="#" class="btn v1" style="padding: 5px 15px;">
                                <i class="ri-download-line"></i> دانلود
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection