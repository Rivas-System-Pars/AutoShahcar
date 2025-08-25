@extends('front::layouts.master', ['title' => 'جستجو برای ' . request('q')])

@section('content')

    <!-- Start main-content -->
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 search-card-res">
                    <!-- Start Content -->
                    <div class="title-breadcrumb-special dt-sl mb-3">
                        <div class="breadcrumb dt-sl">
                            <nav>
                                <a href="/">خانه</a>
                                <a href="{{ route('front.products.index') }}">خودروها</a>
                                <span>{{ 'جستجو برای ' . request('q') }}</span>
                            </nav>
                        </div>
                    </div>
                    @if (isset($categories) && $categories->count())
                        <div class="dt-sl dt-sn px-0 mb-3">
                            <h5 class="mb-2">دسته‌های مرتبط</h5>
                            <div class="row">
                                @foreach ($categories as $cat)
                                    <div class="col-6 col-md-3 col-lg-2 mb-2">
                                        <a class="d-block border rounded p-2 text-center"
                                            href="{{ route('front.products.category', $cat->slug) }}">
                                            {{ $cat->title }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if ($products->count())
                    <div class="dt-sl dt-sn px-0 search-amazing-tab">
                        <h5 class="mb-2">‌محصول های مرتبط</h5>
                        <div class="row mb-3 mx-0 px-res-0">
                            @foreach ($products as $product)
                                @php
                                    $img = $product->image
                                        ?: (optional($product->category)->image ?: 'images/no-image.png');

                                    // اگر URL کامل نیست، asset() کن
                                    $imgUrl = \Illuminate\Support\Str::startsWith($img, ['http://', 'https://', '//'])
                                        ? $img
                                        : asset($img);
                                @endphp

                                <a class="product-thumb" href="{{ route('front.products.show', $product->slug) }}">
                                    <img
                                        style="width:auto;height:220px;object-fit:contain;overflow:hidden;border-radius:0.75rem; flex-shrink:0;"
                                        src="{{ $imgUrl }}"
                                        alt="{{ $product->title }}"
                                    >
                                </a>
                                <h5 class="product-title">
                                    <a href="{{ route('front.products.show', $product->slug) }}">{{ $product->title }}</a>
                                </h5>
                            @endforeach
                        </div>

                        {{ $products->appends(request()->all())->links('front::components.paginate') }}
                    </div>
                @else
                    @include('front::partials.empty')
                @endif

                </div>
                <!-- End Content -->
            </div>

        </div>
    </main>
    <!-- End main-content -->


@endsection
