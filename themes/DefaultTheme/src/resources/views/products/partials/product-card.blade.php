<div class="product-card mb-2 mx-res-0">
    @if ($product->special)
        <div class="promotion-badge">
            فروش ویژه
        </div>
    @endif
    <div class="product-head">
        @if ($product->labels->count())
            <div class="row">
                <div class="btn-group" role="group">
                    @foreach ($product->labels as $label)
                        <div class="fild_products">
                            <span>{{ $label->title }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @php
        // unique attributes across this product's prices
        $attributes = $product->prices->flatMap->attributes->unique('id')->values();

        // OPTION A: if you know the group id for "سال ساخت" (e.g. 5)
        $buildYear = optional($attributes->firstWhere('attribute_group_id', 5))->name;

        // OPTION B: if you prefer by group name (requires attributes.group eager-loaded)
        // $buildYear = optional(
        //     $attributes->firstWhere(fn($a) => optional($a->group)->name === 'سال ساخت')
        // )->name;
    @endphp
        <div class="rating-stars">
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
        </div>
        @if ($product->discount)
            <div class="discount">
                <span>{{ $product->discount }}%</span>
            </div>
        @endif
    </div>
    <a class="product-thumb" href="{{ route('front.products.show', ['product' => $product]) }}">
        <img data-src="{{ $product->image ? asset($product->image) : asset('/no-image-product.png') }}"
            src="{{ theme_asset('images/600-600.png') }}" alt="{{ $product->title }}">
    </a>
    <div class="product-card-body">

        <h5 class="product-title">
            <a href="{{ route('front.products.show', ['product' => $product]) }}">{{ $product->title }}</a>
        </h5>

        @if ($product->category)
            <a class="product-meta"
                href="{{ route('front.products.category', ['category' => $product->category]) }}">{{ $product->category->title }}</a>
            <small>مدل : {{ $product->car_model ?? '--' }}</small><br>
            <small>کارکرد : {{ $product->mileage?? '--' }}</small><br>
            <small>سال ساخت : {{ $buildYear ?? '--' }}</small>
            @endif

        <div class="product-prices-div">
            {{-- <span class="product-price">{{ $product->getLowestPrice() }}</span> --}}

            @if ($product->getLowestDiscount())
                <del class="product-price text-danger">{{ $product->getLowestDiscount() }}</del>
            @endif
        </div>

        {{-- @if ($product->isSinglePrice())
            <div class="cart">
                <a data-action="{{ route('front.cart.store', ['product' => $product]) }}" class="d-flex align-items-center add-to-cart-single" href="javascript:void(0)"><i class="mdi mdi-plus px-2"></i>
                    <span>افزودن به سبد</span>
                </a>
            </div>
        @endif --}}

    </div>
</div>
