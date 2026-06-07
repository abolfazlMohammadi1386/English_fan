@extends('front.layouts.master')

@section('title', 'دوره‌های آموزشی | آموزشگاه زبان ایکور')

@section('content')
<section class="breadcrumb-wrap br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>دوره‌های آموزشی</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>دوره‌های آموزشی</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>دسته بندی های برتر</span>
                    <h2>دسته بندی های برتر آنلاین ما</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @php
                $courses = [
                    ['id' => 1, 'img' => 'course-1.jpg', 'students' => 13, 'comments' => 17, 'price' => 25000, 'discount' => 29000],
                    ['id' => 2, 'img' => 'course-2.jpg', 'students' => 12, 'comments' => 11, 'price' => 20000, 'discount' => 40500],
                    ['id' => 3, 'img' => 'course-3.jpg', 'students' => 22, 'comments' => 19, 'price' => 30000, 'discount' => null],
                    ['id' => 4, 'img' => 'course-4.jpg', 'students' => 5, 'comments' => 9, 'price' => 20000, 'discount' => null],
                    ['id' => 5, 'img' => 'course-5.jpg', 'students' => 15, 'comments' => 2, 'price' => 35000, 'discount' => null],
                    ['id' => 6, 'img' => 'course-6.jpg', 'students' => 7, 'comments' => 11, 'price' => 20000, 'discount' => 30500],
                    ['id' => 7, 'img' => 'course-7.jpg', 'students' => 17, 'comments' => 19, 'price' => 70000, 'discount' => 90500],
                    ['id' => 8, 'img' => 'course-8.jpg', 'students' => 12, 'comments' => 5, 'price' => 70000, 'discount' => null],
                ];
            @endphp

            @foreach($courses as $course)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style1">
                    <div class="course-img">
                        <a href="{{ route('course.details', $course['id']) }}">
                            <img src="{{ asset('assets/img/course/'.$course['img']) }}" alt="Image">
                        </a>
                    </div>
                    <div class="course-info">
                        <h3><a href="{{ route('course.details', $course['id']) }}">بنیاد مثبت: روانشناسی</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                            <span>4 بازدید</span>
                        </div>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است!</p>
                    </div>
                    <div class="course-metainfo">
                        <div class="course-metainfo-left">
                            <ul>
                                <li><p><i class="ri-user-line"></i>ک:{{ $course['students'] }}</p></li>
                                <li><p><i class="ri-discuss-line"></i><a href="{{ route('course.details', $course['id']) }}">ن:{{ $course['comments'] }}</a></p></li>
                            </ul>
                        </div>
                        <div class="course-metainfo-right">
                            <div class="price-tag">
                                @if($course['discount'])
                                    <p><span class="discount">{{ $course['discount'] }} ت</span><span>{{ $course['price'] }} ت</span></p>
                                @else
                                    <p><span>{{ $course['price'] }} ت</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-20">
            <div class="col-lg-12 text-center">
                <a href="#" class="btn v1">بیشتر بدانید <i class="ri-loader-line"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="ds-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-wrap style2 ptb-100">
                    <h2>پیشنهاد تخفیف حداکثر 15٪ برای عضویت امروز</h2>
                    <p>کاربر می تواند در موارد و پیشنهادهای لیست پاراگراف متن محتوای ساختگی ایجاد کند. بسته به نیاز شما ، یک کاربر می تواند هر یک از این قالب ها را در پروژه خود جای دهد ، که راحتی بسیاری را به شما اضافه می کند.</p>
                    <a href="{{ route('register') }}" class="btn v1 mb-10"><i class="ri-logout-circle-r-line"></i> عضو شوید</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrap style1 right ptb-100">
                    <h2>زندگی خود را از طریق آموزش دگرگون کنید</h2>
                    <p>کاربر می تواند در موارد و پیشنهادهای لیست پاراگراف متن محتوای ساختگی ایجاد کند. بسته به نیاز شما ، یک کاربر می تواند هر یک از این قالب ها را در پروژه خود جای دهد ، که راحتی بسیاری را به شما اضافه می کند.</p>
                    <a href="{{ route('register') }}" class="btn v1 mb-10"><i class="ri-logout-circle-r-line"></i> عضو شوید</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>برقراری ارتباط</span>
                    <h2>عضو تیم ما</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 1; $i <= 4; $i++)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="{{ asset('assets/img/team/team-member-'.$i.'.jpg') }}" alt="Image">
                        <ul class="social-profile style1">
                            <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i></a></li>
                            <li><a target="_blank" href="https://linkedin.com"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com"><i class="ri-twitter-fill"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-member-info">
                        <h4>تونی استارک</h4>
                        <p>مدیر مالی</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<section class="testimonial-wrap bg-f testimonial-bg-1 ptb-100">
    <div class="overlay bg-midnight op-8"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style2 mb-40 text-center">
                    <span>بازخورد مشتریان</span>
                    <h2>آنچه آنها درباره ما می گویند</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider-one swiper-container">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="client-img">
                                    <img src="{{ asset('assets/img/testimonial/client-'.$i.'.jpg') }}" alt="Image">
                                </div>
                                <div class="client-name">
                                    <h5>آلیانو مارینو</h5>
                                    <ul class="rating">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                    </ul>
                                </div>
                                <div class="client-quote">
                                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                                </div>
                                <div class="quote-icon">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <div class="testimonial-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection