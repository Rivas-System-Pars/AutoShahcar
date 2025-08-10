@php
    $variables          = get_widget($widget);
    $coworker_sliders   = $variables['coworker_sliders'];
@endphp


<!-- Start Partners -->
@if ($coworker_sliders->count())
{{-- <section class="slider-section dt-sl mb-3">
    <div class="row w-100">
        <div class="col-12">
            <div class="brand-slider carousel-sm owl-carousel owl-theme">
                @foreach ($coworker_sliders as $slider)
                    <div class="item">
                        <img data-src="{{ $slider->image }}" class="img-fluid" alt="{{ $slider->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
--}}
<div class="w-100 d-flex align-items-center justify-content-center flex-column my-3" data-aos="fade-up" data-aos-duration="1000">
    <div class="Option_Card_Title mt-3">
        <div class="Option_Card_Right_Line"></div>
        <h2 class="Option_Card_Center_Line">{{$widget->option('title')}}</h2>
        <div class="Option_Card_Left_Line"></div>
    </div>
    <!-- اسلایدر -->
    <div class="customers_slider w-100 swiper-container mt-4 mt-lg-5">
        <div class="swiper-wrapper">
            @foreach ($coworker_sliders as $slider)
            <div class="swiper-slide">
                <img src="{{ $slider->image }}" alt="{{ $slider->title }}">
            </div>
            @endforeach
        </div>

        <!-- دکمه‌های ناوبری -->
        <div class="swiper-button-next customers_next"></div>
        <div class="swiper-button-prev customers_prev"></div>
    </div>
</div>

@endif
<!-- End Partners -->
