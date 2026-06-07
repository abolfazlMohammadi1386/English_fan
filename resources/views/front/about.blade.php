@extends('front.layouts.master')

@section('title', 'درباره ما | آموزشگاه زبان ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-1">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>درباره ما</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>درباره ما</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-wrap style2 ptb-100">
    <div class="about-img">
        <img src="{{ asset('assets/img/about/about-10.png') }}" alt="Image">
    </div>
    <div class="about-content">
        <div class="section-title text-left style1">
            <span>درباره ما</span>
            <h2>به آموزشگاه زبان ایکور خوش آمدید</h2>
            <p>ما با بیش از 15 سال تجربه در زمینه آموزش زبان‌های خارجی، همواره به دنبال ارائه بهترین روش‌های آموزشی به زبان‌آموزان هستیم.</p>
            <div class="about-subpara">
                <h5><span><img src="{{ asset('assets/img/about/goal.svg') }}" alt="Image"></span> ایکور، مقصد شما برای یادگیری حرفه‌ای زبان</h5>
                <p>دوره‌های ما بر اساس استانداردهای روز دنیا طراحی شده و توسط برترین اساتید تدریس می‌شود. هدف ما ایجاد تجربه‌ای لذت‌بخش و موثر در یادگیری زبان است.</p>
            </div>
            <ul class="about-features-list style2">
                <li><i class="ri-login-circle-line"></i> 15 سال تجربه درخشان</li>
                <li><i class="ri-login-circle-line"></i> بیش از 5000 زبان‌آموز موفق</li>
                <li><i class="ri-login-circle-line"></i> به روزترین متدهای آموزشی</li>
                <li><i class="ri-login-circle-line"></i> اساتید مجرب و حرفه‌ای</li>
            </ul>
        </div>
    </div>
</section>

<div class="promo-banner-wrap style4 promo-bg-1 bg-f ptb-100">
    <div class="overlay bg-midnight op-8"></div>
    <div class="promo-circle-shape md-none">
        <img src="{{ asset('assets/img/promo/promo-circle-shape.svg') }}" alt="Image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="promo-content text-center">
                    <h2 class="text-white">مورد اعتماد بیش از 10,000 سازمان و زبان‌آموز</h2>
                    <p class="text-white">ما افتخار داریم که در طول سال‌های فعالیت، توانسته‌ایم رضایت هزاران زبان‌آموز و همکاری با سازمان‌های معتبر را جلب کنیم.</p>
                    <a href="{{ route('courses') }}" class="btn v1"><i class="ri-eye-line"></i> مشاهده دوره‌ها</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="team-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>اساتید ما</span>
                    <h2>اعضای تیم ما</h2>
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
                            <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-member-info">
                        <h4>استاد نمونه {{ $i }}</h4>
                        <p>مدرس زبان انگلیسی</p>
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
                    <span>بازخورد زبان‌آموزان</span>
                    <h2>آنچه آنها درباره ما می‌گویند</h2>
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
                                    <h5>زبان‌آموز نمونه</h5>
                                    <ul class="rating">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                    </ul>
                                </div>
                                <div class="client-quote">
                                    <p>تجربه فوق‌العاده‌ای بود. اساتید حرفه‌ای و پشتیبانی عالی. بعد از این دوره، توانستم در آزمون آیلتس نمره خوبی کسب کنم.</p>
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
                    <h2>آخرین مطالب آموزشی</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @for ($i = 1; $i <= 3; $i++)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="blog-card">
                    <a href="#" class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog-'.$i.'.jpg') }}" alt="Image">
                    </a>
                    <div class="blog-info">
                        <div class="blog-date">
                            <h6><span>25</span>دی 1402</h6>
                        </div>
                        <h3><a href="#">۱۰ نکته کلیدی برای یادگیری سریع زبان انگلیسی</a></h3>
                        <p>در این مقاله به بررسی موثرترین روش‌های یادگیری زبان می‌پردازیم...</p>
                        <div class="blog-author-wrap">
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="{{ asset('assets/img/blog/author-'.$i.'.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-author-name">
                                    <p>توسط <a href="#">محمدرضا کریمی</a></p>
                                </div>
                            </div>
                            <a href="#" class="read-more"><i class="las la-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection