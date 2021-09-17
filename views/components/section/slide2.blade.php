@props(['keySlide'=> 'default'])

<section class="sec-slide1 section-custom py-4">
    <div class="container-custom">
        <div class="{{ 'swiperSlide1'.$keySlide }} swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                @if(!empty(theme_options()->getOption('slide1', null)))
                    <div class="swiper-slide">
                        <a
                            href="{{ theme_options()->getOption('link_slide1', 'javascript:void(0)') }}"
                            class="inline-block w-full"
                        >
                            <img
                                data-src="{{ TnMedia::getImageUrl(theme_options()->getOption('slide1', null) . '?w=1200', asset('/images/no-image.jpg')) }}"
                                src="{{ asset('/images/no-image.jpg') }}"
                                alt="banner home 1"
                                class="mx-auto lozad w-full h-40 sm:h-56 md:h-72 lg:h-96"
                            >
                        </a>
                    </div>
                @endif
                @if(!empty(theme_options()->getOption('slide1_2', null)))
                    <div class="swiper-slide">
                        <a
                            href="{{ theme_options()->getOption('link_slide1_2', 'javascript:void(0)') }}"
                            class="inline-block w-full"
                        >
                            <img
                                data-src="{{ TnMedia::getImageUrl(theme_options()->getOption('slide1_2', null) . '?w=1200', asset('/images/no-image.jpg')) }}"
                                src="{{ asset('/images/no-image.jpg') }}"
                                alt="banner home 2"
                                class="mx-auto lozad w-full h-40 sm:h-56 md:h-72 lg:h-96"
                            >
                        </a>
                    </div>
                @endif
                @if(!empty(theme_options()->getOption('slide1_3', null)))
                    <div class="swiper-slide">
                        <a
                            href="{{ theme_options()->getOption('link_slide1_3', 'javascript:void(0)') }}"
                            class="inline-block w-full"
                        >
                            <img
                                data-src="{{ TnMedia::getImageUrl(theme_options()->getOption('slide1_3', null) . '?w=1200', asset('/images/no-image.jpg')) }}"
                                src="{{ asset('/images/no-image.jpg') }}"
                                alt="banner home 3"
                                class="mx-auto lozad w-full h-40 sm:h-56 md:h-72 lg:h-96"
                            >
                        </a>
                    </div>
                @endif
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <script>
        var slide1{{$keySlide}} = new Swiper(".swiperSlide1{{$keySlide}}", {
            spaceBetween: 1,
            slidesPerView: 1,
            autoplay: {
                delay: 10000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</section>
