@extends('front.layouts.master')

@section('title', 'جزئیات دوره | آموزشگاه زبان ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-2">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>جزئیات دوره</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li><a href="{{ route('courses') }}">دوره‌ها</a></li>
                        <li>جزئیات دوره</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-details-wrap ptb-100">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="course-details">
                    <div class="course-details-img">
                        <img src="{{ asset('assets/img/course/single-course-1.jpg') }}" alt="Image">
                    </div>
                    <ul class="course-details-meta">
                        <li><i class="las la-clock"></i>4 ساعت</li>
                        <li><i class="las la-graduation-cap"></i>45 دانش آموز</li>
                        <li><i class="lar la-calendar"></i>26 دی 1399</li>
                    </ul>

                    <ul class="nav nav-tabs course-tablist" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">شرح</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">سخنرانی‌ها</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">مربی</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_4" type="button" role="tab">بازخورد</button>
                        </li>
                    </ul>

                    <div class="tab-content course-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <h5>دانش آموزان خیلی نمی آموزند که فقط در کلاس ها بنشینند و به معلمان گوش دهند.</h5>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                            <h5>چه خواهید آموخت؟</h5>
                            <ul class="course-details-list">
                                <li>مهارت‌های مکالمه پیشرفته زبان انگلیسی</li>
                                <li>دستور زبان کاربردی در موقعیت‌های واقعی</li>
                                <li>تکنیک‌های تقویت شنیداری و تلفظ صحیح</li>
                                <li>نکات کلیدی برای موفقیت در آزمون‌های بین‌المللی</li>
                            </ul>
                            <h5>الزامات</h5>
                            <ul class="course-details-list">
                                <li>آشنایی مقدماتی با زبان انگلیسی (سطح مبتدی)</li>
                                <li>دسترسی به اینترنت پایدار برای تماشای ویدیوها</li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="tab_2" role="tabpanel">
                            <div class="accordion" id="accordionExample">
                                @php
                                    $lectures = [
                                        ['title' => 'جلسه اول: مقدمه و آشنایی با دوره', 'duration' => '25 دقیقه'],
                                        ['title' => 'جلسه دوم: گرامر پایه', 'duration' => '30 دقیقه'],
                                        ['title' => 'جلسه سوم: مکالمه روزمره', 'duration' => '28 دقیقه'],
                                        ['title' => 'جلسه چهارم: تلفظ و لهجه', 'duration' => '35 دقیقه'],
                                        ['title' => 'جلسه پنجم: جمع‌بندی و تمرین', 'duration' => '22 دقیقه'],
                                    ];
                                @endphp

                                @foreach($lectures as $index => $lecture)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}">
                                            {{ $lecture['title'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse">
                                        <div class="accordion-body lecture-accordion">
                                            <div class="lecture-item">
                                                <div class="lecture-name">
                                                    <p><i class="las la-file-alt"></i> ویدیو جلسه</p>
                                                </div>
                                                <div class="lecture-time">
                                                    <span>{{ $lecture['duration'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_3" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="team-member">
                                        <div class="team-member-img">
                                            <img src="{{ asset('assets/img/team/team-member-1.jpg') }}" alt="Image">
                                            <ul class="social-profile style1">
                                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                                                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-member-info">
                                            <h4>احمد رضایی</h4>
                                            <p>مدرس ارشد زبان انگلیسی</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_4" role="tabpanel">
                            <div class="post-comment-wrap mb-0 review-box">
                                @for ($i = 1; $i <= 2; $i++)
                                <div class="comment-item">
                                    <div class="comment-author_img">
                                        <img src="{{ asset('assets/img/blog/avatar-'.$i.'.jpg') }}" alt="Image">
                                    </div>
                                    <div class="comment-author_text">
                                        <div class="comment-author_info">
                                            <h6>کاربر دوره</h6>
                                            <div class="course-rating">
                                                <ul>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-line"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>دوره بسیار مفید بود. تدریس استاد عالی و محتوای کاربردی.</p>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="course-details-widget sidebar-box">
                    <ul>
                        <li><p><i class="las la-user-graduate"></i>دانش آموز</p><p>45</p></li>
                        <li><p><i class="las la-file-alt"></i>سخنرانی‌ها</p><p>12</p></li>
                        <li><p><i class="las la-clock"></i>مدت زمان</p><p>4 ساعت</p></li>
                        <li><p><i class="las la-question-circle"></i>مسابقه</p><p>3</p></li>
                    </ul>
                </div>
                <div class="course-enroll-widget sidebar-box">
                    <div class="single-course-price">4500 تومان</div>
                    <a href="{{ route('login') }}" class="btn v3">ثبت نام کنید</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-course pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <span>دوره‌های محبوب</span>
                    <h2>دوره‌های آنلاین محبوب ما</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            @for ($i = 9; $i <= 11; $i++)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-card style2">
                    <div class="course-img">
                        <a href="{{ route('course.details', $i-8) }}"><img src="{{ asset('assets/img/course/course-'.$i.'.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <span class="course-price">3500 ت</span>
                        <h3><a href="{{ route('course.details', $i-8) }}">دیپلم مهارت‌های تدریس</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                            <span>4 امتیاز</span>
                        </div>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                    </div>
                    <div class="course-metainfo">
                        <p><i class="ri-user-line"></i> دانش آموزان: 14 </p>
                        <p><i class="ri-book-open-line"></i><a href="{{ route('course.details', $i-8) }}"> دروس: 4 </a></p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection

