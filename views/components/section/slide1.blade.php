@props(['keySlide'=> 'default'])

<section class="sec-slide1 section-custom py-4">
    <div class="container-custom">
        @if(!empty(theme_options()->getOption('slide1', null)))
            <div class="swiper-slide">
                <a
                    href="{{ theme_options()->getOption('link_slide1', 'javascript:void(0)') }}"
                    class="inline-block w-full"
                >
                    <img
                        data-src="{{ TnMedia::getImageUrl(theme_options()->getOption('slide1', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                        src="{{ asset('/images/no-image.jpg') }}"
                        alt="banner home 1"
                        class="mx-auto lazyload w-full h-40 sm:h-56 md:h-72 lg:h-96"
                    >
                </a>
            </div>
        @endif
    </div>
{{--    <script>--}}
{{--        var slide1{{$keySlide}} = new Swiper(".swiperSlide1{{$keySlide}}", {--}}
{{--            spaceBetween: 1,--}}
{{--            slidesPerView: 1,--}}
{{--            autoplay: {--}}
{{--                delay: 10000,--}}
{{--            },--}}
{{--            navigation: {--}}
{{--                nextEl: ".swiper-button-next",--}}
{{--                prevEl: ".swiper-button-prev",--}}
{{--            },--}}
{{--        });--}}
{{--    </script>--}}
</section>
