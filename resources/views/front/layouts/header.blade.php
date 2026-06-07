<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-left">
                        <div class="close-header-top xl-none">
                            <button type="button"><i class="las la-times"></i></button>
                        </div>
                        <div class="header-contact">
                            <p><i class="ri-map-pin-fill"></i> تهران، میدان آزادی، خیابان 9</p>
                        </div>
                        <div class="header-contact">
                            <a href="mailto:info@ecour.com"><i class="ri-mail-send-line"></i> info@ecour.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <div class="lang_selctor style1">
                            <i class="ri-global-line"></i>
                            <select>
                                <option value="1">فارسی</option>
                                <option value="2">English</option>
                            </select>
                        </div>
                        <div class="header-social">
                            <span>دنبال کنید :</span>
                            <ul class="social-profile style3">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            </ul>
                        </div>
                        <a href="{{ route('login') }}" class="link style3">ورود / عضویت</a>
                    </div>
                </div>
                <div class="col-lg-6 xl-none">
                    <div class="header-search">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="جستجو ...">
                                <button type="submit"><i class="ri-search-eye-line"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 order-lg-1 order-md-1 order-1">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6 order-lg-2 order-md-3 order-3">
                    <div class="main-menu-wrap style1">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu">
                            <ul class="main-menu">
                                <li><a href="{{ route('home') }}">خانه</a></li>
                                <li><a href="{{ route('courses') }}">دوره‌ها</a></li>

                                <!-- زیرمنوی منابع -->
                                <li class="has-children">
                                    <a href="#">منابع</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('library') }}">کتابخانه</a></li>
                                        <li><a href="{{ route('behind.scene') }}">پشت صحنه</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('booking') }}">رزرو کلاس</a></li>
                                <li><a href="{{ route('about') }}">درباره ما</a></li>
                                <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                                <li><a href="{{ route('faq') }}">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar-wrap">
                        <div class="sidebar-menu xl-none"><i class="ri-equalizer-line"></i></div>
                        <div class="mobile-top-bar xl-none"><i class="ri-settings-3-line"></i></div>
                        <div class="mobile-menu xl-none"><a href='javascript:void(0)'><i class="ri-menu-line"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 order-lg-3 order-md-2">
                    <div class="header-menu-wrap">
                        <div class="header-search md-none">
                            <form action="#">
                                <div class="form-group">
                                    <input type="search" placeholder="جستجو کنید ...">
                                    <button type="submit"><i class="ri-search-eye-line"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-menu md-none"><i class="ri-equalizer-line"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>