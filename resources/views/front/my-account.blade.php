@extends('front.layouts.master')

@section('title', 'پنل کاربری | ایکور')

@section('content')
<style>
    .dashboard-stats .stat-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 20px;
    }
    .dashboard-stats .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(13,110,253,0.1);
    }
    .user-sidebar .nav-link {
        transition: all 0.2s ease;
        padding: 12px 18px;
        margin-bottom: 8px;
        border-radius: 14px;
    }
    .user-sidebar .nav-link:hover {
        background: #f0f7ff;
        color: #0d6efd;
        transform: translateX(-5px);
    }
    .user-sidebar .nav-link.active {
        background: linear-gradient(90deg, #0d6efd, #0b5ed7);
        color: white;
        box-shadow: 0 5px 15px rgba(13,110,253,0.2);
    }
    .course-progress {
        height: 6px;
        border-radius: 10px;
    }
</style>

<section class="breadcrumb-wrap bg-f br-bg-4">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>پنل کاربری</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li>حساب کاربری</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="user-sidebar bg-white rounded-4 p-4 shadow-sm">
                    <div class="text-center mb-4 pb-2 border-bottom">
                        <div class="avatar-wrapper mb-3">
                            <div class="avatar-circle mx-auto" style="width: 90px; height: 90px; background: linear-gradient(135deg, #0d6efd, #0b5ed7); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="ri-user-3-line" style="font-size: 45px; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-1">{{ auth()->user()->name ?? 'احمد رضایی' }}</h4>
                        <p class="text-muted small mb-0">{{ auth()->user()->email ?? 'ahmad@example.com' }}</p>
                        <span class="badge bg-light text-dark mt-2">کاربر عادی</span>
                    </div>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center gap-2" href="#">
                                <i class="ri-dashboard-line fs-5"></i> پیشخوان
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <i class="ri-book-open-line fs-5"></i> دوره‌های من
                                <span class="badge bg-primary rounded-pill ms-auto">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <i class="ri-calendar-line fs-5"></i> رزروهای من
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <i class="ri-download-2-line fs-5"></i> کتابخانه من
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <i class="ri-user-settings-line fs-5"></i> تنظیمات حساب
                            </a>
                        </li>
                        <li class="nav-item mt-3 pt-2 border-top">
                            <a class="nav-link text-danger d-flex align-items-center gap-2" href="#">
                                <i class="ri-logout-box-r-line fs-5"></i> خروج از حساب
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8 col-md-12">
                <div class="bg-white rounded-4 p-4 p-lg-5 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                        <h3 class="mb-0">خوش آمدید 👋</h3>
                        <div class="date-badge bg-light px-3 py-2 rounded-pill">
                            <i class="ri-calendar-line ml-1"></i> {{ now()->format('Y/m/d') }}
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row dashboard-stats g-3 mb-5">
                        <div class="col-md-4">
                            <div class="stat-card bg-primary bg-opacity-10 p-3 rounded-4 text-center">
                                <i class="ri-book-open-line fs-1 text-primary"></i>
                                <h4 class="mt-2 mb-0">۳</h4>
                                <p class="small text-muted mb-0">دوره فعال</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card bg-success bg-opacity-10 p-3 rounded-4 text-center">
                                <i class="ri-calendar-check-line fs-1 text-success"></i>
                                <h4 class="mt-2 mb-0">۲</h4>
                                <p class="small text-muted mb-0">رزرو امروز</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card bg-warning bg-opacity-10 p-3 rounded-4 text-center">
                                <i class="ri-download-2-line fs-1 text-warning"></i>
                                <h4 class="mt-2 mb-0">۸</h4>
                                <p class="small text-muted mb-0">دانلود جزوه</p>
                            </div>
                        </div>
                    </div>

                    <!-- Active Courses -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">📚 دوره‌های فعال من</h5>
                            <a href="#" class="text-decoration-none small">مشاهده همه <i class="ri-arrow-left-line"></i></a>
                        </div>

                        <div class="course-item border rounded-3 p-3 mb-3">
                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                <div>
                                    <h6 class="mb-1">دوره مکالمه پیشرفته زبان انگلیسی</h6>
                                    <p class="small text-muted mb-2">استاد احمد رضایی | جلسه ۴ از ۱۲</p>
                                    <div class="progress course-progress w-100" style="max-width: 250px;">
                                        <div class="progress-bar bg-primary" style="width: 35%;"></div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary align-self-center rounded-pill px-3">ادامه یادگیری</a>
                            </div>
                        </div>

                        <div class="course-item border rounded-3 p-3">
                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                <div>
                                    <h6 class="mb-1">دوره تخصصی گرامر آیلتس</h6>
                                    <p class="small text-muted mb-2">استاد سارا محمدی | جلسه ۲ از ۸</p>
                                    <div class="progress course-progress w-100" style="max-width: 250px;">
                                        <div class="progress-bar bg-primary" style="width: 18%;"></div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary align-self-center rounded-pill px-3">ادامه یادگیری</a>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Downloads -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">📥 آخرین دانلودها</h5>
                            <a href="{{ route('library') }}" class="text-decoration-none small">رفتن به کتابخانه <i class="ri-arrow-left-line"></i></a>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item d-flex justify-content-between align-items-center border-0 bg-light rounded-3 mb-2 p-3">
                                <span><i class="ri-file-pdf-line text-danger ml-2"></i> جزوه گرامر پیشرفته</span>
                                <small class="text-muted">۲ روز پیش</small>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center border-0 bg-light rounded-3 mb-2 p-3">
                                <span><i class="ri-file-ppt-line text-warning ml-2"></i> اسلایدهای کلاس مکالمه</span>
                                <small class="text-muted">۵ روز پیش</small>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center border-0 bg-light rounded-3 p-3">
                                <span><i class="ri-file-pdf-line text-danger ml-2"></i> جزوه لغات ضروری تافل</span>
                                <small class="text-muted">هفته گذشته</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection