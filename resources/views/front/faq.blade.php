@extends('front.layouts.master')

@section('title', 'سوالات متداول | آموزشگاه زبان ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-3">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>سوالات متداول</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>سوالات متداول</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ecour-faq">
                    <div class="accordion" id="accordionExample">
                        @php
                            $faqs = [
                                ['title' => 'چگونه می توانم در دوره ثبت نام کنم؟', 
                                 'content' => 'برای ثبت نام در دوره‌ها کافی است ابتدا در سایت عضو شوید، سپس دوره مورد نظر خود را انتخاب کرده و روی دکمه "ثبت نام" کلیک کنید.'],
                                ['title' => 'آیا گواهی پایان دوره ارائه می شود؟', 
                                 'content' => 'بله، پس از گذراندن موفقیت‌آمیز دوره و قبولی در آزمون نهایی، گواهی معتبر پایان دوره برای شما صادر می‌شود.'],
                                ['title' => 'مدت زمان هر دوره چقدر است؟', 
                                 'content' => 'مدت زمان هر دوره بسته به سطح و محتوای آن متفاوت است و معمولاً بین 20 تا 40 ساعت آموزشی می‌باشد.'],
                                ['title' => 'آیا امکان شرکت در دوره به صورت حضوری也存在 دارد؟', 
                                 'content' => 'بله، دوره‌ها هم به صورت آنلاین و هم حضوری در تهران برگزار می‌شوند. شما می‌توانید هنگام ثبت نام روش مورد نظر خود را انتخاب کنید.'],
                                ['title' => 'هزینه دوره‌ها چقدر است؟', 
                                 'content' => 'هزینه هر دوره در صفحه جزئیات آن درج شده است. همچنین تخفیف‌های ویژه برای ثبت نام گروهی و زود هنگام در نظر گرفته شده است.'],
                                ['title' => 'چگونه با استاد ارتباط برقرار کنم؟', 
                                 'content' => 'پس از ثبت نام، می‌توانید از طریق پنل کاربری خود با استاد دوره در ارتباط باشید و سوالات خود را مطرح کنید.'],
                            ];
                        @endphp

                        @foreach($faqs as $index => $faq)
                        @php
                            $collapseId = 'collapse' . ($index + 1);
                            $headingId = 'heading' . ($index + 1);
                        @endphp
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="false" aria-controls="{{ $collapseId }}">
                                    {{ $faq['title'] }}
                                </button>
                            </h2>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse" aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="single-product-text">
                                        <p>{{ $faq['content'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection