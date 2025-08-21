@php
    $variables = get_widget($widget);
    $products = $variables['products'];
@endphp


@if ($products->count())
<div class="mx-auto best_selling_container my-3">

    <div class="best_selling_container_inner">

        <div class="best_selling_container_top">

            <div class="best_selling_container_top_texts">

                <div class="best_selling_container_top_texts-icon">
                    <svg>
                        <use xlink:href="#searchTrend">
                            <symbol id="searchTrend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.015 9.105c.222.397.41.73.466.842.361.724.519 1.31.519 2.053a2 2 0 01-4 0l.003-4.557c0-.953-1.206-1.367-1.79-.613C5.087 9.572 4 11.906 4 13.889 4 18.365 7.578 22 12 22c4.422 0 8-3.635 8-8.111 0-2.968-2.45-6.78-7.295-11.598a1 1 0 00-1.6.262c-.807 1.615-.807 3.28 0 4.894.178.356.582 1.076.91 1.658zM7 12a4 4 0 108 0c0-1.078-.238-1.962-.73-2.947-.079-.156-.31-.569-.566-1.024a50.532 50.532 0 01-.81-1.476c-.273-.546-.404-1.079-.393-1.612C16.18 8.811 18 11.834 18 13.889 18 17.267 15.31 20 12 20s-6-2.733-6-6.111c0-.87.33-1.925 1-3.154V12z"
                                    clip-rule="evenodd">
                                </path>
                            </symbol>
                        </use>
                    </svg>
                </div>

                <p class="best_selling_container_top_texts-text">{{$widget->option('title')}}</p>

            </div>

            <a class="best_selling_container_top-link " href="{{ $widget->option('link') }}">

                <button class="best_selling_container_top-link-btn">

                    <div class="best_selling_container_top-link-btn-text ">
                        {{ $widget->option('link_title', 'مشاهده همه') }}
                    </div>

                </button>

            </a>

        </div>

        <div class="best_selling_container_swiper_container">

            <div dir="rtl" id="best_selling_products" class="swiper ">

                <div class="swiper-wrapper">
                    @foreach ($products as $index => $product)
                    <div class="swiper-slide swiper-slide-active mt-0">

                        <div class="product_box">

                            <a class="productItem_card"
                                href="{{ route('front.products.show', ['product' => $product]) }}">

                                <div class="productItem_card-inner">

                                    <div class="productItem_card-pic">

                                        <picture>
                                            
                                            <img class="w-100 d-inline-block object-fit-contain"
                                                src="{{ $product->image ? asset($product->image) : asset('/no-image-product.png') }}"
                                                width="86" height="86"
                                                alt="{{ $product->title }}" title="{{ $product->title }}">
                                        </picture>

                                    </div>

                                    <span class="productItem_card-num">
                                        {{$index+1}}
                                    </span>

                                    <div class="productItem_card-textBox">

                                        <p class="productItem_card-textBox_inner">{{ $product->title }}
                                        </p>

                                    </div>

                                </div>

                            </a>

                            
                        </div>

                    </div>
                    @endforeach
                    
                </div>

                <div class="best_selling_container_swiper_container_next ">

                    <div class="d-flex">

                        <svg style="width: 24px; height: 24px; fill: #424750;">
                            <use xlink:href="#chevronLeft">
                                <symbol id="chevronLeft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M11.414 12l4.293 4.293-1.414 1.414-5-5a1 1 0 010-1.414l5-5 1.414 1.414L11.414 12z">
                                    </path>
                                </symbol>
                            </use>
                        </svg>

                    </div>

                </div>

                <div class="best_selling_container_swiper_container_prev ">

                    <div class="d-flex">

                        <svg style="width: 24px; height: 24px; fill: #424750;">
                            <use xlink:href="#chevronRight">
                                <symbol id="chevronRight" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12.583 12L8.29 16.293l1.414 1.414 5-5a1 1 0 000-1.414l-5-5L8.29 7.707 12.583 12z">
                                    </path>
                                </symbol>
                            </use>
                        </svg>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endif
