@extends('front.layouts.master')

@section('title', 'خانه | آموزشگاه زبان ایکور')

@section('content')
<!-- hero section -->
<div class="hero-wrap style1 bg-f hero-bg-1">
    <div class="hr-line"></div>
    <div class="hr-line"></div>
    <div class="hr-line"></div>
    <div class="hr-line"></div>
    <div class="overlay bg-black op-7"></div>
    <div class="container">
        <div class="hero-circle-shape md-none">
            <img src="{{ asset('assets/img/hero/circle-shape.png') }}" alt="Image">
        </div>
        <div class="hero-dot-shape md-none">
            <img src="{{ asset('assets/img/hero/dot-shape.png') }}" alt="Image">
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-8">
                <div class="hero-content">
                    <h1>خلاقیت خود را کاوش کنید
                        با بهترین دوره های آنلاین</h1>
                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                    <div class="hero-btn">
                        <a href="{{ route('courses') }}" class="btn v1"> <i class="ri-eye-line"></i> مشاهده دوره ها</a>
                        <a href="{{ route('register') }}" class="btn v2"> <i class="ri-user-line"></i> عضویت رایگان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-img-wrap">
        <div class="hero-ellipse-img">
            <img src="{{ asset('assets/img/hero/ellipse-img.jpg') }}" alt="Image">
        </div>
    </div>
</div>

<section class="about-wrap  style1 ptb-100">
    <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="about-img bg-f about-bg-1">
                    <div class="about-circle-shape md-none">
                        <img src="{{ asset('assets/img/about/about-circle-shape-1.svg') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title text-left style1">
                        <span>درباره ما</span>
                        <h2>به آموزش ایکور خوش آمدید</h2>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                        <ul class="about-features-list">
                            <li> <i class="ri-login-circle-line"></i> با پرونده اداره کنید</li>
                            <li> <i class="ri-login-circle-line"></i> با اتوماسیون صرفه جویی کنید</li>
                            <li> <i class="ri-login-circle-line"></i> 5000 دوره آنلاین</li>
                        </ul>
                        <h5>*ما <span>15 سال</span> تجربه کافی داریم</h5>
                        <a href="{{ route('courses') }}" class="btn v1"> <i class="ri-eye-line"></i> مشاهده دوره ها</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="promo-banner-wrap style1">
    <div class="promo-content  ptb-100 ">
        <h2 class="text-white">قابل اعتماد توسط 10،000+ سازمان</h2>
        <p class="text-white">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
        <a href="{{ route('courses') }}" class="btn v1"> <i class="ri-eye-line"></i> مشاهده دوره ها</a>
    </div>
    <div class="promo-img-wrap">
        <div class="promo-img bg-f promo-bg-1">
            <div class="promo-circle-shape md-none">
                <img src="{{ asset('assets/img/promo/promo-circle-shape.svg') }}" alt="Image">
            </div>
        </div>
    </div>
</section>

<section class="course-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title style1 text-center mb-40">
                    <span>دسته بندی های برتر</span>
                    <h2>دسته بندی های برتر آنلاین ما</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @for ($i = 1; $i <= 4; $i++)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style1">
                    <div class="course-img">
                        <a href="{{ route('course.details', 1) }}"><img src="{{ asset('assets/img/course/course-'.$i.'.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <h3><a href="{{ route('course.details', 1) }}">بنیاد مثبت: روانشناسی</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-line"></i> </li>
                            </ul>
                            <span>4 بازدید</span>
                        </div>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است! </p>
                    </div>
                    <div class="course-metainfo">
                        <div class="course-metainfo-left">
                            <ul>
                                <li><p><i class="ri-user-line"></i>ک:13</p></li>
                                <li><p><i class="ri-discuss-line"></i><a href="{{ route('course.details', 1) }}">ن:17</a></p></li>
                            </ul>
                        </div>
                        <div class="course-metainfo-right">
                            <div class="price-tag">
                                <p><span class="discount">29000 ت</span><span>25000 ت</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<section class="promo-banner-wrap style2">
    <div class="promo-img-wrap">
        <div class="promo-img bg-f promo-bg-1">
            <a class="video-play circle style1" href="https://www.youtube.com/watch?v=xHegpKx61eE"> <i class="ri-play-fill"></i> </a>
            <div class="promo-circle-shape md-none">
                <img src="{{ asset('assets/img/promo/promo-circle-shape.svg') }}" alt="Image">
            </div>
        </div>
    </div>
    <div class="promo-content  ptb-100 ">
        <h2 class="text-white">زندگی خود را از طریق آموزش دگرگون کنید</h2>
        <p class="text-white">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
    </div>
</section>

<section class="team-wrap pb-70">
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
                            <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                            <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                            <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
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
                                        <li> <i class="ri-star-fill"></i> </li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                </div>
                                <div class="client-quote">
                                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. </p>
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

<section class="blog-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>وبلاگ ما</span>
                    <h2>آخرین اخبار وبلاگ</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @for ($i = 1; $i <= 3; $i++)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="blog-card">
                    <a href="{{ route('course.details', 1) }}" class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog-'.$i.'.jpg') }}" alt="Image">
                    </a>
                    <div class="blog-info">
                        <div class="blog-date">
                            <h6><span>25</span>دی 1399</h6>
                        </div>
                        <h3><a href="{{ route('course.details', 1) }}">دوره های برتر آنلاین برای دانشجویان و معلمان خارجی</a></h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="blog-author-wrap">
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="{{ asset('assets/img/blog/author-'.$i.'.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-author-name">
                                    <p>توسط <a href="{{ route('course.details', 1) }}">مارک جان</a></p>
                                </div>
                            </div>
                            <a href="{{ route('course.details', 1) }}" class="read-more"><i class="las la-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection