@php
    $variables              = get_widget($widget);
    $index_middle_banners   = $variables['index_middle_banners'];
@endphp

{{--
<!-- Start Banner -->
@if ($index_middle_banners->count())
<div class="row py-2 d-flex align-items-center justify-content-center g-0">
    @foreach ($index_middle_banners as $banner)
        <div class="col-sm-6 col-12 mb-2 d-flex align-items-center justify-content-center p-2 ">
            <div class="widget-banner">
                <a href="{{ $banner->link }}">
                    <img data-src="{{ $banner->image }}" alt="{{ $banner->title }}">
                </a>
            </div>
        </div>
    @endforeach
</div>
@endif
<!-- End Banner -->
--}}
{{--
 <div class="mx-auto banners_container my-5">
	 
        <div class="d-flex align-items-center justify-content-between flex-wrap banners_container_inner">
			    @foreach ($index_middle_banners as $banner)

            <div class="the_banner">
                <a href="{{ $banner->link }}" class="d-flex align-items-center justify-content-center w-100 h-100">
                    <img class="the_banner-img w-100 h-100"
                        src="{{ $banner->image }}" alt="{{ $banner->title }}">
                </a>
            </div>
			@endforeach
        </div>
    </div>

--}}

{{---
@if ($index_middle_banners->count())
<div class="mx-auto banners_container-dual my-5">
        <div class="d-flex align-items-center justify-content-center flex-wrap banners_container-dual_inner">
			@foreach ($index_middle_banners as $banner)
            <div class="the_banner">
                <a href="{{ $banner->link }}" class="d-flex align-items-center justify-content-center w-100 h-100">
                    <img class="the_banner-img" src="{{ $banner->image }}"
                        alt="{{ $banner->title }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endif
--}}

<div class="mx-auto banners_container-dual my-3">
        <div class="d-flex align-items-center justify-content-center flex-wrap banners_container-dual_inner">
            <div class="the_banner">
               <a  href="{{env('APP_URL').''.$widget->option('link1')}}" class="d-flex align-items-center justify-content-center w-100 h-100">
                    <img class="the_banner-img" src="{{env('APP_URL').''.$widget->option('image1')}}"
                        alt="">
                </a>
            </div>
            <div class="the_banner">
               <a  href="{{env('APP_URL').''.$widget->option('link2')}}" class="d-flex align-items-center justify-content-center w-100 h-100">
                    <img class="the_banner-img" src="{{env('APP_URL').''.$widget->option('image2')}}"
                        alt="">
                </a>
            </div>
        </div>
    </div>