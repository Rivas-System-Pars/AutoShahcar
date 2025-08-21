@php
    $variables = get_widget($widget);
    $products = $variables['products'];

@endphp


@if ($products->count())

<div class="hot_picks_container my-3">

        <div class="hot_picks_container_inner">

            <div class="hot_picks_container_inner-top">

                <div class="hot_picks_container_inner-top-icon">

                    <svg>
                        <use xlink:href="#discount">
                            <symbol id="discount" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M22 4a1 1 0 011 1v14a1 1 0 01-1 1H6a1 1 0 01-.707-.293l-4-4A1 1 0 011 15V9a1 1 0 01.293-.707l4-4A1 1 0 016 4h16zm-1 2H6.414L3 9.414v5.172L6.414 18H21V6zm-6 3.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm2.5 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM10 12a3 3 0 11-6 0 3 3 0 016 0zm-4 0a1 1 0 102 0 1 1 0 00-2 0zm12.848-3.47l-5 8-1.696-1.06 5-8 1.696 1.06z"
                                    clip-rule="evenodd"></path>
                            </symbol>
                        </use>
                    </svg>

                </div>

                <h3 class="hot_picks_container_inner-top-title">{{$widget->option('title')}}</h3>

            </div>

            <div class="hot_picks_container_inner-bottom">
                @foreach ($products as $product)
                <a class="hot_picks_container_inner-bottom-item" target="_blank" href="#">

                    <div data-testid="product-card" class="h-100">

                        <article class="hot_picks_container_inner-bottom-item-product">

                            <div class="d-flex flex-grow-1 position-relative flex-column">

                                <div class="">

                                    <div class="d-flex align-items-stretch flex-column position-relative mb-1">

                                        <div class="d-flex align-items-start mx-auto">

                                            <div>

                                                <div
                                                    class="d-flex align-items-center justify-content-start gap-1 flex-wrap position-absolute top-0">
                                                    <br><br>
                                                </div>

                                                <div class="hot_picks_container_inner-bottom-item-product-imgBox">

                                                    <picture>

                                                        <img class="w-100 rounded-3 d-inline-block object-fit-contain"
                                                            src="{{ $product->image ? asset($product->image) : asset('/no-image-product.png') }}"
                                                            width="150" height="150"
                                                            alt="{{ $product->title }}"
                                                            title="">

                                                    </picture>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="flex-grow-1 d-flex flex-column align-items-stretch justify-content-start">

                                    <div class="pt-1 d-flex flex-column align-items-stretch justify-content-between">

                                        <div class="d-flex align-items-center justify-content-between">
											@if($product->discount)

                                            <div
                                                class="offer_tag px-1 text-white rounded-4 d-flex align-items-center justify-content-center">

                                                <span data-testid="price-discount-percent">
                                                    {{ $product->discount }} %
                                                </span>

                                            </div>
											@endif
                                            <div
                                                class="final_price_box d-flex align-items-center justify-content-end gap-1 flex-grow-1">

                                                <span data-testid="price-final">{{ $product->getLowestPrice() }}</span>

                                                <div class="toman_svg_box">

                                                    <svg>
                                                        <use xlink:href="#toman"></use>
                                                    </svg>

                                                </div>

                                            </div>

                                        </div>
										
										@if($product->getLowestDiscount())

                                        <div class="d-flex align-items-center justify-content-between pl-4">
										
                                            <div data-testid="price-no-discount" class="actual_price_forReal ">
                                               {{ $product->getLowestDiscount() }}
                                            </div>

                                        </div>
										@endif

                                    </div>

                                </div>

                            </div>

                        </article>

                    </div>

                </a>

                @endforeach


            </div>

        </div>

    </div>
@endif
