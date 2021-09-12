@if(!empty(theme_options()->getOption('banner1', null)))
<section class="section-custom pb-0">
    <div class="container-custom">
        <div class="text-center">
            <a
                href="{{ theme_options()->getOption('link_banner1', 'javascript:void(0)') }}"
                class="inline-block"
            >
                <img
                    data-src="{{ TnMedia::getImageUrl(theme_options()->getOption('banner1', null) . '?w=850', asset('/images/no-image.jpg')) }}"
                    src="{{ asset('/images/no-image.jpg') }}"
                    alt="banner"
                    class="mx-auto lazyload"
                >
            </a>
        </div>
    </div>
</section>
@endif
