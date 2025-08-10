$(document).ready(function (l) {
    // **************  fixed header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 60) {
            $('header.main-header.js-fixed-header').addClass('fixed');
            $('header.main-header.js-fixed-topbar').addClass(
                'fixed fixed-topbar'
            );
        } else {
            $('header.main-header.js-fixed-header').removeClass('fixed');
            $('header.main-header.js-fixed-topbar').removeClass(
                'fixed fixed-topbar'
            );
        }
    });

    // **************  category slider
    $('.category-slider').owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                slideBy: 1
            },
            576: {
                items: 3,
                slideBy: 2
            },
            768: {
                items: 4,
                slideBy: 2
            },
            992: {
                items: 6,
                slideBy: 3
            },
            1400: {
                items: 8,
                slideBy: 4
            }
        }
    });

    /* **************  tooltip */
    $('[data-toggle="tooltip"]').tooltip();

    /* **************  product-carousel */
    /* carousel-lg */
    $('.carousel-lg').owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                slideBy: 1
            },
            480: {
                items: 2,
                slideBy: 1
            },
            576: {
                items: 3,
                slideBy: 1
            },
            768: {
                items: 3,
                slideBy: 2
            },
            992: {
                items: 3,
                slideBy: 2
            },
            1200: {
                items: 4,
                slideBy: 3
            },
            1400: {
                items: 4,
                slideBy: 4
            }
        }
    });
    /* profile-order-steps */
    $('.profile-order-steps').owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                slideBy: 1
            },
            480: {
                items: 2,
                slideBy: 1
            },
            576: {
                items: 3,
                slideBy: 1
            },
            768: {
                items: 3,
                slideBy: 2
            },
            992: {
                items: 3,
                slideBy: 2
            },
            1200: {
                items: 3,
                slideBy: 3
            },
            1400: {
                items: 3,
                slideBy: 4
            }
        }
    });
    /* carousel-sm */
    $('.carousel-sm').owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                slideBy: 1
            },
            480: {
                items: 2,
                slideBy: 1
            },
            576: {
                items: 3,
                slideBy: 1
            },
            768: {
                items: 3,
                slideBy: 2
            },
            992: {
                items: 9,
                slideBy: 2
            },
            1200: {
                items: 9,
                slideBy: 3
            },
            1400: {
                items: 7,
                slideBy: 4
            }
        }
    });
    /* carousel-md */
    $('.carousel-md').owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            480: {
                items: 2,
                slideBy: 1
            },
            576: {
                items: 2,
                slideBy: 1
            },
            768: {
                items: 2,
                slideBy: 2
            },
            992: {
                items: 3,
                slideBy: 2
            },
            1200: {
                items: 4,
                slideBy: 3
            },
            1400: {
                items: 5,
                slideBy: 4
            }
        }
    });

    /* ************** suggestion-slider */
    $('#suggestion-slider').owlCarousel({
        rtl: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        dots: true,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar
    });

    function startProgressBar() {
        // apply keyframe animation
        $('.slide-progress').css({
            width: '100%',
            transition: 'width 5000ms'
        });
    }

    function resetProgressBar() {
        $('.slide-progress').css({
            width: 0,
            transition: 'width 0s'
        });
    }

    /* ************** product-gallery */
    var e = document;
    $('.product-carousel').owlCarousel({
        rtl: true,
        items: 1,
        loop: false,
        dots: false,
        nav: true,
        navText: [
            '<i class="mdi mdi mdi-chevron-right"></i>',
            '<i class="mdi mdi mdi-chevron-left"></i>'
        ],
        onTranslate: function (t) {
            var a = t.item.index,
                e = l('.product-gallery .owl-item')
                    .eq(a)
                    .find('[data-owl]')
                    .attr('data-owl');
            l('.product-thumbnails li ').removeClass('active'),
                l('[href="#' + e + '"]')
                    .parent()
                    .addClass('active'),
                l('[data-owl="' + e + '"]')
                    .parent()
                    .addClass('active');
        }
    });

    if ($.fancybox != undefined) {
        $.fancybox.defaults.hash = false;
        $('.gallery-item').fancybox({
            // hash: true,
            loop: true,
            keyboard: true,
            clickContent: false,
            afterShow: function (e, b) {
                $(
                    `.product-thumbnails .owl-thumbnail[data-slide="${e.currIndex}"]`
                ).trigger('click');
            }
        });
    }

    $('.owl-thumbnail').click(function (e) {
        e.preventDefault();
        var slide = $(this).data('slide');

        $('.product-gallery .product-carousel').trigger(
            'to.owl.carousel',
            slide
        );
    });

    /* ************** sidebar-sticky */
    if ($('.container .sticky-sidebar').length) {
        $('.container .sticky-sidebar').theiaStickySidebar({
            additionalMarginTop: 20
        });
    }

    /* ************** product-params */
    $(document).on('click', '.product-params .sum-more', function () {
        var sumaryBox = $(this).parents('.product-params');
        sumaryBox.toggleClass('active');

        $(this).find('i').toggleClass('active');

        $(this).find('.show-more').fadeToggle(0);
        $(this).find('.show-less').fadeToggle(0);
    });

    /* ************** horizontal-menu */
    $('.ah-tab-wrapper').horizontalmenu({
        itemClick: function (item) {
            $('.ah-tab-content-wrapper .ah-tab-content').removeAttr(
                'data-ah-tab-active'
            );
            $(
                '.ah-tab-content-wrapper .ah-tab-content:eq(' +
                    $(item).index() +
                    ')'
            ).attr('data-ah-tab-active', 'true');
            return false; //if this finction return true then will be executed http request
        }
    });

    /* ************** shopping */
    $('#btn-checkout-contact-location').click(function () {
        $('.checkout-address').addClass('show');
        $('.checkout-contact-content').addClass('hidden');
    });

    $('#cancel-change-address-btn').click(function () {
        $('.checkout-address').removeClass('show');
        $('.checkout-contact-content').removeClass('hidden');
    });

    /* ************** nice-select */
    if ($('.custom-select-ui').length) {
        $('.custom-select-ui select').niceSelect();
    }

    /* ************** back-to-top */
    $('.back-to-top a').click(function () {
        $('body,html').animate(
            {
                scrollTop: 0
            },
            700
        );
        return false;
    });

    /* ************** responsive-header */
    $('header.main-header button.btn-menu').click(function () {
        $('header.main-header .side-menu').addClass('open');
        $('header.main-header .overlay-side-menu').addClass('show');
    });

    $('header.main-header .overlay-side-menu.show').click(function () {
        $(this).removeClass('show');
        $('header.main-header .side-menu').removeClass('open');
    });
    $('button.btn-menu').on('click', function () {
        $('.overlay-side-menu').fadeIn(200);
        $('header.main-header .side-menu').addClass('open');
    });

    $('.overlay-side-menu').on('click', function () {
        if ($('header.main-header .side-menu').hasClass('open')) {
            $('header.main-header .side-menu').removeClass('open');
        }
        $(this).fadeOut(200);
    });
    $('header.main-header .side-menu li.active')
        .addClass('open')
        .children('ul')
        .show();
    $('header.main-header .side-menu li.sub-menu> a').on('click', function () {
        $(this).removeAttr('href');
        var e = $(this).parent('li');
        if (e.hasClass('open')) {
            e.removeClass('open');
            e.find('li').removeClass('open');
            e.find('ul').slideUp(400);
        } else {
            e.addClass('open');
            e.children('ul').slideDown(400);
            e.siblings('li').children('ul').slideUp(400);
            e.siblings('li').removeClass('open');
        }
    });

    /* ************** colorswitch */
    if ($('#colorswitch-option').length) {
        $('#colorswitch-option button').on('click', function () {
            $('#colorswitch-option ul').toggleClass('show');
        });
        $('#colorswitch-option ul li').on('click', function () {
            $('#colorswitch-option ul li').removeClass('active');
            $(this).addClass('active');
            var colorPath = $(this).attr('data-path');
            $('#colorswitch').attr('href', colorPath);
        });
    }

    /* ************** megamenu */

    $('.f-menu > li').hover(function () {
        $(this)
            .closest('.list-item')
            .find('.f-menu > li')
            .removeClass('active');
        $(this).addClass('active');
    });

    // $('.list-item.list-item-has-children.position-static').hover(function () {
    //     $('.main-content').append('<div class="trasparent-background"></div>');
    //     setTimeout(function () {
    //         $('.trasparent-background').css('opacity', '1');
    //     }, 20);
    // });

    // $('.list-item.list-item-has-children.position-static').mouseleave(
    //     function () {
    //         $('.trasparent-background').remove();
    //     }
    // );

    $(document).on('click', '.add-to-cart-single', function () {
        var btn = this;

        $.ajax({
            type: 'POST',
            url: $(btn).data('action'),
            data: {
                quantity: 1
            },
            success: function (data) {
                if (data.status == 'success') {
                    Swal.fire({
                        type: 'success',
                        title: 'با موفقیت اضافه شد',
                        text: 'محصول مورد نظر با موفقیت به سبد خرید شما اضافه شد برای رزرو محصول سفارش خود را نهایی کنید.',
                        confirmButtonText: 'باشه',
                        footer: '<h5><a href="/cart">مشاهده سبد خرید</a></h5>'
                    });

                    $('#cart-list-item').replaceWith(data.cart);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'خطا',
                        text: data.message,
                        confirmButtonText: 'باشه',
                        footer: '<h5><a href="/cart">مشاهده سبد خرید</a></h5>'
                    });
                }
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'X-CSRF-TOKEN',
                    $('meta[name="csrf-token"]').attr('content')
                );
                block(btn.closest('.cart'));
            },
            complete: function () {
                unblock(btn.closest('.cart'));
            }
        });
    });
});
  $(document).ready(function () {
        var breakpoints = {
            320: { slidesPerView: 1.2, spaceBetween: 20, grid: { rows: 3, fill: "row" } },
            460: { slidesPerView: 1.6, spaceBetween: 20, grid: { rows: 3, fill: "row" } },
            576: { slidesPerView: 2, spaceBetween: 30, grid: { rows: 3, fill: "row" } },
            768: { slidesPerView: 2.5, spaceBetween: 30, grid: { rows: 3, fill: "row" } },
            850: { slidesPerView: 3.3, spaceBetween: 30, grid: { rows: 3, fill: "row" } },
            1024: { slidesPerView: 4, spaceBetween: 30, grid: { rows: 3, fill: "row" } },
            1280: { slidesPerView: 5, spaceBetween: 30, grid: { rows: 3, fill: "row" } },
            1350: { slidesPerView: 5.2, spaceBetween: 32, grid: { rows: 3, fill: "row" } },
        };

        // اینجا به‌صورت صریح مقدارها رو برای هر breakpoint می‌سازیم
        let slideBase = 5.2;
        let spaceBase = 32;
        let step = 0;

        for (let w = 1600; w <= 3840; w += 200) {
            slideBase += 1;
            spaceBase += 2;
            breakpoints[w] = {
                slidesPerView: parseFloat(slideBase.toFixed(1)),
                spaceBetween: spaceBase,
                grid: { rows: 3, fill: "row" },
            };
        }

        // حالا swiper رو بساز
        var best_selling_products = new Swiper("#best_selling_products", {
            slidesPerView: 1,
            spaceBetween: 20,
            grid: { rows: 3, fill: "row" },
            breakpoints: breakpoints,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".best_selling_container_swiper_container_next",
                prevEl: ".best_selling_container_swiper_container_prev",
            },
            on: {
                init: function () {
                    togglePrevButton(this);
                },
                slideChange: function () {
                    togglePrevButton(this);
                },
            },
        });

        function togglePrevButton(swiper) {
            var $nextBtn = $(".best_selling_container_swiper_container_next");
            var $prevBtn = $(".best_selling_container_swiper_container_prev");

            if (swiper.isBeginning) {
                $prevBtn.addClass("d-none");
            } else {
                $prevBtn.removeClass("d-none");
            }

            if (swiper.isEnd) {
                $nextBtn.addClass("d-none");
            } else {
                $nextBtn.removeClass("d-none");
            }
        }
    });

$(document).ready(function () {
    var categories_container_inner_main = new Swiper(
        "#categories_container_inner_main-swiper",
        {
            slidesPerView: 2,
            spaceBetween: 0,
            grid: {
                rows: 2,
                fill: "row",
            },
            breakpoints: {
                320: {
                    slidesPerView: 2.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" }, // اضافه کردن grid به breakpoint
                },
                390: {
                    slidesPerView: 3.1,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                460: {
                    slidesPerView: 3.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                576: {
                    slidesPerView: 3.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                768: {
                    slidesPerView: 4.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                800: {
                    slidesPerView: 4.9,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                850: {
                    slidesPerView: 5.9,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                950: {
                    slidesPerView: 6.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                990: {
                    slidesPerView: 6.9,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                1024: {
                    slidesPerView: 7.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                1280: {
                    slidesPerView: 9,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                1440: {
                    slidesPerView: 10.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                1600: {
                    slidesPerView: 11.8,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                1920: {
                    slidesPerView: 13.5,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                2560: {
                    slidesPerView: 16,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                3200: {
                    slidesPerView: 19,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
                3840: {
                    slidesPerView: 22,
                    spaceBetween: 0,
                    grid: { rows: 2, fill: "row" },
                },
            },
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".categories_container_inner_main-swiper-next",
                prevEl: ".categories_container_inner_main-swiper-prev",
            },
            on: {
                init: function () {
                    togglePrevButton(this);
                },
                slideChange: function () {
                    togglePrevButton(this);
                },
            },
        }
    );

    function togglePrevButton(swiper) {
        var $prevBtn = $(".categories_container_inner_main-swiper-prev");
        var $nextBtn = $(".categories_container_inner_main-swiper-next");
        if (swiper.isBeginning) {
            $prevBtn.addClass("d-none");
        } else {
            $prevBtn.removeClass("d-none");
        }
        if (swiper.isEnd) {
            $nextBtn.addClass("d-none");
        } else {
            $nextBtn.removeClass("d-none");
        }
    }
});

$(document).ready(function () {
    var counter_product_swiper = new Swiper("#counter_product_swiper", {
        slidesPerView: 2.2,
        spaceBetween: 2,
        breakpoints: {
             320: { slidesPerView: 2.2, spaceBetween: 2 },
            390: { slidesPerView: 2.8, spaceBetween: 2 },
            460: { slidesPerView: 3.2, spaceBetween: 2 },
            500: { slidesPerView: 3.8, spaceBetween: 2 },
            570: { slidesPerView: 4.2, spaceBetween: 2 },
            800: { slidesPerView: 4.9, spaceBetween: 2 },
            950: { slidesPerView: 5.5, spaceBetween: 2 },
            990: { slidesPerView: 6, spaceBetween: 2 },
            1024: { slidesPerView: 6.2, spaceBetween: 2 },
            1100: { slidesPerView: 6.6, spaceBetween: 2 },
            1200: { slidesPerView: 7.2, spaceBetween: 2 },
            1300: { slidesPerView: 7.8, spaceBetween: 2 },
            1336: { slidesPerView: 8.2, spaceBetween: 2 },
            1440: { slidesPerView: 9, spaceBetween: 2 },
            1600: { slidesPerView: 10.2, spaceBetween: 2 },
            1920: { slidesPerView: 12, spaceBetween: 2 },
            2560: { slidesPerView: 14.5, spaceBetween: 2 },
            3200: { slidesPerView: 17, spaceBetween: 2 },
            3840: { slidesPerView: 20, spaceBetween: 2 },
        },

        navigation: {
            nextEl: ".counter_product_swiper-next",
            prevEl: ".counter_product_swiper-prev",
        },
        on: {
            init: function () {
                togglePrevButton(this);
            },
            slideChange: function () {
                togglePrevButton(this);
            },
        },
    });

    function togglePrevButton(swiper) {
        var $prevBtn = $(".counter_product_swiper-prev");
        var $nextBtn = $(".counter_product_swiper-next");
        if (swiper.isBeginning) {
            $prevBtn.addClass("d-none");
        } else {
            $prevBtn.removeClass("d-none");
        }
        if (swiper.isEnd) {
            $nextBtn.addClass("d-none");
        } else {
            $nextBtn.removeClass("d-none");
        }
    }
});
$(document).ready(function () {
    let useJalali = true;


    $.ajax({
        url: "https://rvc.rivasit.com/widget/countdown",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $(".counter_product_container").each(function () {
                let $widget = $(this);
                let id = $widget.data("id");
    
                let data = response[id];
                if (!data) {
                    console.warn("داده‌ای برای id " + id + " پیدا نشد.");
                    return;
                }
    
                let [y, m, d] = data.end_date.split("/").map(Number);
    
                // اضافه کردن "00" به آخر ساعت
                let jalaliTime = data.end_time.trim();
                if (jalaliTime.split(":").length === 2) {
                    jalaliTime += ":00"; // اگر ثانیه نداشت، اضافه می‌کنیم
                }
                let [hh, mm, ss] = jalaliTime.split(":").map(Number);
    
                let gDate = jalaali.toGregorian(y, m, d);
                let targetDate = new Date(gDate.gy, gDate.gm - 1, gDate.gd, hh, mm, ss);
    
                $widget.countdown(targetDate, function (event) {
                    $widget.find(".amazing_days").text(event.strftime("%D"));
                    $widget.find(".amazing_hours").text(event.strftime("%H"));
                    $widget.find(".amazing_minutes").text(event.strftime("%M"));
                    $widget.find(".amazing_seconds").text(event.strftime("%S"));
    
                    if (event.strftime("%D") === "00") {
                        $widget.find(".days").hide();
                        $widget.find(".days-spacer").hide();
                    }
                });
            });
        },
        error: function (xhr, status, error) {
            console.error("خطا در دریافت اطلاعات:", error);
        }
    });
    
    
    
});

$(window).on('resize', function() {
    if ($(window).width() < 390) {
      $('.showAll_extra_extra-inner').fadeOut(200, function() {
        $(this).text('همه').fadeIn(200);
      });
    } else {
      $('.showAll_extra_extra-inner').fadeOut(200, function() {
        $(this).text('مشاهده همه').fadeIn(200);
      });
    }
  });
  
  // Trigger it once on load
  $(document).ready(function() {
    $(window).trigger('resize');
  });





$(document).ready(function () {
    var customers_slider = new Swiper(".customers_slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            
			320: { slidesPerView: 2.2, spaceBetween: 2 },
            390: { slidesPerView: 2.8, spaceBetween: 2 },
            460: { slidesPerView: 3.2, spaceBetween: 2 },
            500: { slidesPerView: 3.8, spaceBetween: 2 },
            570: { slidesPerView: 4.2, spaceBetween: 2 },
            800: { slidesPerView: 4.9, spaceBetween: 2 },
            950: { slidesPerView: 5.5, spaceBetween: 2 },
            990: { slidesPerView: 6, spaceBetween: 2 },
            1024: { slidesPerView: 6.2, spaceBetween: 2 },
            1100: { slidesPerView: 6.6, spaceBetween: 2 },
            1200: { slidesPerView: 7.2, spaceBetween: 2 },
            1300: { slidesPerView: 7.8, spaceBetween: 2 },
            1336: { slidesPerView: 8.2, spaceBetween: 2 },
            1440: { slidesPerView: 9, spaceBetween: 2 },
            1600: { slidesPerView: 10.2, spaceBetween: 2 },
            1920: { slidesPerView: 12, spaceBetween: 2 },
            2560: { slidesPerView: 14.5, spaceBetween: 2 },
            3200: { slidesPerView: 17, spaceBetween: 2 },
            3840: { slidesPerView: 20, spaceBetween: 2 },
			
        },
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".customers_next",
            prevEl: ".customers_prev",
        },
        on: {
            init: function () {
                togglePrevButton(this);
            },
            slideChange: function () {
                togglePrevButton(this);
            },
        },
    });

    function togglePrevButton(swiper) {
        var $nextBtn = $(".customers_next");
        var $prevBtn = $(".customers_prev");
        if (swiper.isBeginning) {
            $prevBtn.addClass("d-none");
        } else {
            $prevBtn.removeClass("d-none");
        }
        if (swiper.isEnd) {
            $nextBtn.addClass("d-none");
        } else {
            $nextBtn.removeClass("d-none");
        }
    }
});

$(document).ready(function () {
    $('.back_to_top_btn').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 'slow');
    });
 });
