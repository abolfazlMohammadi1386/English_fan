@extends('front.layouts.master')

@section('title', 'تماس با ما | آموزشگاه زبان ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-1">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>تماس با ما</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>تماس با ما</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-wrap pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div class="contact-info">
                        <h5>آدرس</h5>
                        <p class="mb-0">تهران، میدان آزادی، خیابان 9، پلاک 12</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <div class="contact-info">
                        <h5>تلفن</h5>
                        <p class="mb-0"><a href="tel:02112345678">021-12345678</a></p>
                        <p class="mb-0"><a href="tel:09123456789">0912-345-6789</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-mail-send-line"></i>
                    </div>
                    <div class="contact-info">
                        <h5>آدرس ایمیل</h5>
                        <p class="mb-0"><a href="mailto:info@ecour.com">info@ecour.com</a></p>
                        <p class="mb-0"><a href="mailto:support@ecour.com">support@ecour.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="company-location">
    <div class="comp-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<section class="contact-form_wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-40 style1">
                    <span>تماس با ما</span>
                    <h2>پیام بدهید</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-form">
                    <form class="form-wrap" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" placeholder="نام کامل شما*" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="email" name="email" type="email" placeholder="آدرس ایمیل*" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="phone" name="phone" type="text" placeholder="شماره تلفن" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" placeholder="موضوع" value="{{ old('subject') }}">
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group v1">
                                    <textarea name="message" id="message" cols="30" rows="8" placeholder="پیام شما ...">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn v1 d-block w-100">ارسال پیام</button>
                            </div>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection