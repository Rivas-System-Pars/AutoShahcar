@extends('front::layouts.master', ['title' => $category->title])

@push('meta')
    <meta property="og:title" content="{{ $category->meta_title ?: $category->title }}" />
    <meta property="og:url" content="{{ route('front.products.category-products', ['category' => $category]) }}" />
    <meta name="description" content="{{ $category->meta_description ?: $category->description }}">
    <meta name="keywords" content="{{ $category->getTags }}">
    <link rel="canonical" href="{{ route('front.products.category-products', ['category' => $category]) }}" />
@endpush

@push('befor-styles')
    <link rel="stylesheet" href="{{ theme_asset('css/vendor/nouislider.min.css') }}">
@endpush



@section('content')

    <!-- Start main-content -->
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">

            <div class="row">
                <!-- Start Content -->
                <div class="title-breadcrumb-special dt-sl mb-3">
                    <div class="breadcrumb dt-sl">
                        <nav>
                            <a href="/">خانه</a>
                            <a href="{{ route('front.products.index') }}">خودروها</a>

                            @foreach ($category->parents() as $parent)
                                <a href="{{ route('front.products.category', ['category' => $parent]) }}">{{ $parent->title }}</a>
                            @endforeach
                            <span>{{ $category->title }}</span>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
    @if($products->count())
        <div class="row mb-3 mx-0 px-res-0">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0 category-product-div">
                    @include('front::products.partials.product-card', ['product' => $product])
                </div>
            @endforeach
        </div>

        {{ $products->appends(request()->all())->links('front::components.paginate') }}
    @else
        @include('front::partials.empty')
    @endif
</div>


            @if ($category->description)
                <div class="row mt-2">
                    <div class="dt-sl dt-sn search-amazing-tab mb-3 mx-3" >
                        <div class="row">

                            <div class="col-md-12 p-md-5 category-background" style="background-image: url({{ asset($category->background_image) }});">
                                {!! $category->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </main>
    <!-- End main-content -->
@endsection

@push('scripts')

    <script>
        var selected_min_price = {{ request('min_price') ?: $min_price }};
        var selected_max_price = {{ request('max_price') ?: $max_price }};
        var products_min_price = {{ $min_price }};
        var products_max_price = {{ $max_price }};
    </script>

    <script src="{{ theme_asset('js/pages/products/category.js') }}?v=5"></script>
    <script src="{{ theme_asset('js/vendor/nouislider.min.js') }}"></script>
    <script src="{{ theme_asset('js/vendor/wNumb.js') }}"></script>
    <script src="{{ theme_asset('js/vendor/ResizeSensor.min.js') }}"></script>
@endpush
