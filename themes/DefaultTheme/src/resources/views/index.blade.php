@extends('front::layouts.master')

@push('meta')
<meta name="description" content="{{ option('info_short_description') }}">
<meta name="keywords" content="{{ option('info_tags') }}">
<meta name="user-data" content='@json($date_time)'>

<link rel="canonical" href="{{ url('/') }}" />

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "{{ route('front.index') }}",
        "name": "{{ option('site_title') }}",
        "logo": "{{ option('info_logo') ? asset(option('info_logo')) : asset(config('front.asset_path') . 'img/logo.png') }}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ route('front.products.search') }}/?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>
@endpush

@section('content')
<!-- Start main-content -->
@push('styles')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
<link rel="stylesheet" href="{{ theme_asset('css/counterCards.css') }}">
@endpush

<div class="w-100 h-100 d-flex align-items-center justify-content-start flex-column">
    <section class="hero_partial">

        <div class="hero_partial-inner-first">

            <div class="hero_partial-inner-first-box">
                <h1 class="hero_partial-inner-first-box-title " id="hero-section-title">
                    فروش خودروی شما
                    تنها در چند ساعت
                </h1>
                <section class="hero_partial-inner-first-box-subtitle">
                    <span>
                        با بیش از
                    </span>
                    <span class="text_orange">
                        55 شعبه
                    </span>
                    <span>
                        در سراسر کشور
                    </span>
                </section>
                <div class="hero_partial-inner-first-box-description">
                    <div class="box-description">
                        <i class="fa-solid fa-shuttle-space"></i>
                        <p>سریع‌ترین راه فروش</p>
                    </div>
                    <div class="box-description">
                        <i class="fa-solid fa-file-shield"></i>
                        <p>تضمین امنیت معامله</p>
                    </div>
                    <div class="box-description">
                        <i class="fa-solid fa-clock"></i>
                        <p>تنها با یک بار مراجعه</p>
                    </div>
                </div>
            </div>

            <div class="hero_partial-inner-first-case-desktop">
                <div class="hero_partial-inner-first-case-desktop-inner">
                    <h2 class="hero_partial-inner-first-case-desktop-inner-title">انتخاب برند خودرو</h2>
                    <ul class="hero_partial-inner-first-case-desktop-inner-grid">
                        <li class="hero_partial-inner-first-case-desktop-inner-grid-item">
                            <a href="https://autoshahcar.ir/products/category-products/%D9%BE%DA%98%D9%88">
                                <img alt="" src="https://autoshahcar.ir/public/Peugeot.png">
                            </a>
                            <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">پژو</h3>
                        </li>
						<li class="hero_partial-inner-first-case-desktop-inner-grid-item">
                            <a href="https://autoshahcar.ir/products/category-products/%D8%A7%D9%85-%D9%88%DB%8C-%D8%A7%D9%85">
                                <img alt="" src="https://autoshahcar.ir/public/mvm.png">
                            </a>
                            <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">ام وی ام</h3>
                        </li>
						<li class="hero_partial-inner-first-case-desktop-inner-grid-item">
                            <a href="https://autoshahcar.ir/products/category-products/%D8%AC%DA%A9">
                                <img alt="" src="https://autoshahcar.ir/public/jack.png">
                            </a>
                            <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">جک</h3>
                        </li>
						<li class="hero_partial-inner-first-case-desktop-inner-grid-item">
                            <a href="https://autoshahcar.ir/products/category-products/%D8%AF%D9%86%D8%A7">
                                <img alt="" src="https://autoshahcar.ir/public/dena.png">
                            </a>
                            <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">دنا</h3>
                        </li>
						<li class="hero_partial-inner-first-case-desktop-inner-grid-item">
                            <a href="https://autoshahcar.ir/products/category-products/%D9%87%DB%8C%D9%88%D9%86%D8%AF%D8%A7%DB%8C">
                                <img alt="" src="https://autoshahcar.ir/public/hundai.png">
                            </a>
                            <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">هیوندای</h3>
                        </li>

                        <a class="hero_partial-inner-first-case-desktop-inner-grid-item show_more" href="https://autoshahcar.ir/products" >
                            <i class="ri-grid-fill"></i>
                            <p>سایر برندها</p>
                        </a>
                    </ul>
                    <button type="button" class="hero_partial-inner-first-case-desktop-inner-grid-button">
                        درخواست فروش خودرو
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                </div>
            </div>

            <div class="first_car">
                <img class="first_car-desktop" src="https://autoshahcar.ir/public/orange-car-indirect-mobile.webp">
                <img class=" first_car-mobile" src="https://autoshahcar.ir/public/orange-car-indirect-mobile.webp">
            </div>

            <div class="second_car-desktop ">
                <img src="https://autoshahcar.ir/public/white-car-indirect-desktop.webp">
            </div>

            <div class="second_car-mobile ">
                <img src="https://autoshahcar.ir/public/white-car-indirect-desktop.webp">
            </div>

            <div class="confetti">
                <img class=" confetti-desktop" src="https://autoshahcar.ir/public/confetti-desktop.webp">
                <img class=" confetti-mobile" src="https://autoshahcar.ir/public/confetti-mobile.webp">
            </div>

        </div>

        <div class="hero_partial-inner-first-case-mobile">
            <div class="hero_partial-inner-first-case-mobile-inner">
                <h2 class="hero_partial-inner-first-case-mobile-inner-title">انتخاب برند خودرو</h2>
                <ul class="hero_partial-inner-first-case-mobile-inner-grid">
                    <li class="hero_partial-inner-first-case-mobile-inner-grid-item">
                        <a href="https://autoshahcar.ir/products/category-products/%D9%BE%DA%98%D9%88">
                            <img alt="" src="https://autoshahcar.ir/public/Peugeot.png">
                        </a>
                        <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">پژو</h3>
                    </li>
					<li class="hero_partial-inner-first-case-mobile-inner-grid-item">
                        <a href="https://autoshahcar.ir/products/category-products/%D8%A7%D9%85-%D9%88%DB%8C-%D8%A7%D9%85">
                            <img alt="" src="https://autoshahcar.ir/public/mvm.png">
                        </a>
                        <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">ام وی ام</h3>
                    </li>
					<li class="hero_partial-inner-first-case-mobile-inner-grid-item">
                        <a href="https://autoshahcar.ir/products/category-products/%D8%AC%DA%A9">
                            <img alt="" src="https://autoshahcar.ir/public/jack.png">
                        </a>
                        <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">جک</h3>
                    </li>
					<li class="hero_partial-inner-first-case-mobile-inner-grid-item">
                        <a href="https://autoshahcar.ir/products/category-products/%D8%AF%D9%86%D8%A7">
                            <img alt="" src="https://autoshahcar.ir/public/dena.png">
                        </a>
                        <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">دنا</h3>
                    </li>
					<li class="hero_partial-inner-first-case-mobile-inner-grid-item">
                        <a href="https://autoshahcar.ir/products/category-products/%D9%87%DB%8C%D9%88%D9%86%D8%AF%D8%A7%DB%8C">
                            <img alt="" src="https://autoshahcar.ir/public/hundai.png">
                        </a>
                        <h3 class="text-secondary-1000 whitespace-pre-line text-base font-medium">هیوندای</h3>
                    </li>

                    <a class="hero_partial-inner-first-case-mobile-inner-grid-item show_more" href="https://autoshahcar.ir/products" >
                        <i class="ri-grid-fill"></i>
                        <p>سایر برندها</p>
                    </a>
                </ul>
                <button type="button" class="hero_partial-inner-first-case-mobile-inner-grid-button">
                    درخواست فروش خودرو
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
            </div>
        </div>

    </section>
    @foreach ($widgets as $widget)
    @switch($widget->key)
    @case('products-column')
    @include('front::widgets.products-column')
    @break
    @case('four-banner')
    @include('front::widgets.four-banner')
    @break
    @case('three-banner')
    @include('front::widgets.three-banner')
    @break
    @case('category-squared')
    @include('front::widgets.category-squared')
    @break
    @case('product-list-show')
    @include('front::widgets.product-list-show')
    @break
    @case('categories-column')
    @include('front::widgets.categories-column')
    @break

    @case('products-slider-block')
    @include('front::widgets.products-slider-block')
    @break

    @case('main-slider-fullpage')
    @include('front::widgets.main-slider-fullpage')
    @break

    @case('performance')
    @include('front::widgets.performance')
    @break

    @case('products-timer-card')
    @include('front::widgets.products-timer-card')
    @break

    @case('banner-get-demo')
    @include('front::widgets.banner-get-demo')
    @break

    @case('product-info')
    @include('front::widgets.product-info')
    @break

    @case('counseling')
    @include('front::widgets.counseling')
    @break

    @case('services-slider')
    @include('front::widgets.services-slider')
    @break

    @case('coworker-sliders-new')
    @include('front::widgets.coworker-sliders-new')
    @break

    @case('about-company')
    @include('front::widgets.about-company')
    @break

    @case('why-us')
    @include('front::widgets.why-us')
    @break

    @case('question-sort')
    @include('front::widgets.question-sort')
    @break

    @case('main-slider')
    @include('front::widgets.main-slider')
    @break

    @case('products-default-block')
    @include('front::widgets.products-default-block')
    @break

    @case('products-colorful-block')
    @include('front::widgets.products-colorful-block')
    @break

    @case('middle-banners')
    @include('front::widgets.middle-banners')
    @break

    @case('coworker-sliders')
    @include('front::widgets.coworker-sliders')
    @break

    @case('sevices-sliders')
    @include('front::widgets.sevices-sliders')
    @break

    @case('categories')
    @include('front::widgets.categories')
    @break

    @case('posts')
    @include('front::widgets.posts')
    @break
    @endswitch
    @endforeach
</div>
{{-- <main class="main-content dt-sl mb-3">
        <div class="container main-container">
            @foreach ($widgets as $widget)
                @switch($widget->key)
                    @case('main-slider')
                        @include('front::widgets.main-slider')
                    @break

                    @case('products-default-block')
                        @include('front::widgets.products-default-block')
                    @break

                    @case('products-colorful-block')
                        @include('front::widgets.products-colorful-block')
                    @break

                    @case('middle-banners')
                        @include('front::widgets.middle-banners')
                    @break

                    @case('coworker-sliders')
                        @include('front::widgets.coworker-sliders')
                    @break

                    @case('sevices-sliders')
                        @include('front::widgets.sevices-sliders')
                    @break

                    @case('categories')
                        @include('front::widgets.categories')
                    @break

                    @case('posts')
                        @include('front::widgets.posts')
                    @break
                @endswitch
            @endforeach
            @include('front::partials.products', [
                'products' => $syncedProducts,
                'title' => 'پیشنهاد برای شما',
            ])
            @include('front::partials.basket-list', ['items' => $basketList, 'title' => 'سبدهای خرید'])

        </div>

    </main> --}}
<!-- End main-content -->
@endsection
@push('scripts')
<script src="{{theme_asset('js/pages/products-slider-block.js')}}"></script>
@endpush
