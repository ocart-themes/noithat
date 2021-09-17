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
                        class="mx-auto lozad w-full h-40 sm:h-56 md:h-72 lg:h-96"
                        width="1400"
                        height="554"
                    >
                </a>
            </div>
        @endif
    </div>
</section>
