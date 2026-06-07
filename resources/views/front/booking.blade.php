@extends('front.layouts.master')

@section('title', 'رزرو کلاس | ایکور')

@section('content')
<section class="breadcrumb-wrap bg-f br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>رزرو کلاس</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>رزرو کلاس</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="bg-white rounded-4 p-4 p-lg-5 shadow-sm">
                    <div class="text-center mb-5">
                        <h2>📅 رزرو وقت کلاس</h2>
                        <p class="text-muted">تاریخ و ساعت مورد نظر خود را انتخاب کنید</p>
                    </div>

                    @auth
                        {{-- فقط کاربر لاگین شده می‌تونه تقویم رو ببینه --}}
                        <livewire:booking-calendar />
                    @else
                        <div class="alert alert-warning text-center">
                            <i class="ri-login-circle-line"></i>
                            برای رزرو کلاس، ابتدا <a href="{{ route('login') }}">وارد حساب خود شوید</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


