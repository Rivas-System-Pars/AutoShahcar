@php
    $variables    = get_widget($widget);
    $categories   = $variables['categories'];
@endphp



<div class="mx-auto categories_container my-3">

        <div class="categories_container_inner">

            <div class="categories_container_inner_topbar">
                <h3 class="categories_container_inner_topbar-text">دسته بندی خودروها</h3>
            </div>

            <div class="categories_container_inner_main">

                <div class="categories_container_inner_main-inner">

                    <div class="swiper categories_container_inner_main-swiper"
                        id="categories_container_inner_main-swiper" dir="rtl">

                        <div class="swiper-wrapper">
                            @foreach ($categories as $category)

                            <div class="swiper-slide">

                                <div class="category_item_box">

                                    <span data-cro-id="hp-categories-icons" class="category_item_box-card">

                                        <a class="category_item_box-card-inner" href="{{ $category->link }}">

                                            <div class="category_item_box-card-inner-picBox">

                                                <img src="{{ $category->image ? asset($category->image) : asset('no-image-product.png') }}"
                                                    width="100" height="100" alt="موبایل" title="">

                                            </div>

                                            <p class="category_item_box-card-inner-text">
                                                {{ $category->title }}
                                            </p>

                                        </a>

                                    </span>

                                    {{-- <span data-cro-id="hp-categories-icons" class="category_item_box-card">

                                        <a class="category_item_box-card-inner" href="#">

                                            <div class="category_item_box-card-inner-picBox">

                                                <img src="https://dkstatics-public.digikala.com/digikala-mega-menu/09a98a13c782e12a245930b4515d243b17734a33_1740299441.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80"
                                                    width="100" height="100" alt="موبایل" title="">

                                            </div>

                                            <p class="category_item_box-card-inner-text">
                                                موبایل
                                            </p>

                                        </a>

                                    </span> --}}

                                </div>

                            </div>
                            @endforeach
                            {{-- <div class="swiper-slide">

                                <div class="category_item_box">

                                    <span data-cro-id="hp-categories-icons" class="category_item_box-card">

                                        <a class="category_item_box-card-inner" href="#">

                                            <div class="category_item_box-card-inner-picBox">

                                                <img src="https://dkstatics-public.digikala.com/digikala-mega-menu/09a98a13c782e12a245930b4515d243b17734a33_1740299441.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80"
                                                    width="100" height="100" alt="موبایل" title="">

                                            </div>

                                            <p class="category_item_box-card-inner-text">
                                                موبایل
                                            </p>

                                        </a>

                                    </span>

                                    <span data-cro-id="hp-categories-icons" class="category_item_box-card">

                                        <a class="category_item_box-card-inner" href="#">

                                            <div class="category_item_box-card-inner-picBox">

                                                <img src="https://dkstatics-public.digikala.com/digikala-mega-menu/09a98a13c782e12a245930b4515d243b17734a33_1740299441.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80"
                                                    width="100" height="100" alt="موبایل" title="">

                                            </div>

                                            <p class="category_item_box-card-inner-text">
                                                موبایل
                                            </p>

                                        </a>

                                    </span>

                                </div>

                            </div> --}}



                        </div>
                        <div class="categories_container_inner_main-swiper-next">
                            <div class="swiper_btn_inner">
                                <svg>
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

                        <div class="categories_container_inner_main-swiper-prev">
                            <div class="swiper_btn_inner">
                                <svg>
                                    <use xlink:href="#chevronRight">
                                        <symbol id="chevronRight" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M11.414 12l4.293 4.293-1.414 1.414-5-5a1 1 0 010-1.414l5-5 1.414 1.414L11.414 12z">
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
    </div>
