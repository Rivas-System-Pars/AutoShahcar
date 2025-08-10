@php
    $variables    = get_widget($widget);
    $categories   = $variables['categories'];
@endphp




<div class="quad_categories_container my-3">
        <div class="quad_categories_container_inner">
            @foreach ($categories as $category)
            <div class="quad_categories_container_inner_itemBox">

                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column mb-2 w-100">
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <h4 class="quad_categories_container_inner_itemBox-title">{{ $category->title }}</h4>
                            </div>
                        </div>
                        {{-- <p class="quad_categories_container_inner_itemBox-subtitle">بر اساس سلیقه شما</p> --}}
                    </div>
                </div>

                <div class="quad_categories_container_inner_itemBox-items ">
					@php
						$products = $category->products()->take(4)->get();
					@endphp
					
					@foreach($products as $product)
					
                    <a class="quad_categories_container_inner_itemBox-items-item"
                        href="/products/{{ $product->slug }}">
                        <span class=" quad_categories_container_inner_itemBox-items-item-inner ">
                            <div class="h-100" style="line-height: 0;">
                                <img class="w-100 h-100 ratio-1x1 d-inline-block object-fit-contain"
                                    src={{$product->image}}
                                    alt="کاور ونزو مدل Shine-2 مناسب برای گوشی موبایل سامسونگ Galaxy A14" title="">
                            </div>
                        </span>
                    </a>
					@endforeach

                </div>

                <div class="quad_categories_container_inner_itemBox-button">
                    <a class="quad_categories_container_inner_itemBox-button-inner d-inline-flex align-items-center cursor-pointer styles_Anchor--secondary__3KsgY text-button-2"
                        href="/products/category-products/{{$category->slug}}">
                        <span>مشاهده</span>
                        <div class="flex">
                            <svg >
                                <use xlink:href="#chevronLeft"></use>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>
            @endforeach
         
        </div>
    </div>
