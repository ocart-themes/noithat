<section class="section-custom py-6">
    <div class="container-custom">
        <div class="grid grid-cols-2 sm:grid-cols-9 gap-2 md:gap-2.5 mx-auto">
            <div class="mx-auto col-span-full sm:col-span-5">
                @if(!empty(theme_options()->getOption('grid1', null)))
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ theme_options()->getOption('link_grid1', 'javascript:void(0)') }}"
                >
                    <div class="effect">
                        <img
                            src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                            alt="banner gird"
                            class="bg-gray-300 object-cover w-full h-full"/>
                    </div>
                </a>
                @endif
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                @if(!empty(theme_options()->getOption('grid1_2', null)))
                    <a
                        class="h-full group flex justify-center relative overflow-hidden"
                        href="{{ theme_options()->getOption('link_grid1_2', 'javascript:void(0)') }}"
                    >
                        <div class="effect">
                            <img
                                src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1_2', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                                alt="banner gird"
                                class="bg-gray-300 object-cover w-full h-full"/>
                        </div>
                    </a>
                @endif
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                @if(!empty(theme_options()->getOption('grid1_3', null)))
                    <a
                        class="h-full group flex justify-center relative overflow-hidden"
                        href="{{ theme_options()->getOption('link_grid1_3', 'javascript:void(0)') }}"
                    >
                        <div class="effect">
                            <img
                                src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1_3', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                                alt="banner gird"
                                class="bg-gray-300 object-cover w-full h-full"/>
                        </div>
                    </a>
                @endif
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                @if(!empty(theme_options()->getOption('grid1_4', null)))
                    <a
                        class="h-full group flex justify-center relative overflow-hidden"
                        href="{{ theme_options()->getOption('link_grid1_4', 'javascript:void(0)') }}"
                    >
                        <div class="effect">
                            <img
                                src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1_4', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                                alt="banner gird"
                                class="bg-gray-300 object-cover w-full h-full"/>
                        </div>
                    </a>
                @endif
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                @if(!empty(theme_options()->getOption('grid1_5', null)))
                    <a
                        class="h-full group flex justify-center relative overflow-hidden"
                        href="{{ theme_options()->getOption('link_grid1_5', 'javascript:void(0)') }}"
                    >
                        <div class="effect">
                            <img
                                src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1_5', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                                alt="banner gird"
                                class="bg-gray-300 object-cover w-full h-full"/>
                        </div>
                    </a>
                @endif
            </div>
            <div class="mx-auto col-span-full sm:col-span-5">
                @if(!empty(theme_options()->getOption('grid1_6', null)))
                    <a
                        class="h-full group flex justify-center relative overflow-hidden"
                        href="{{ theme_options()->getOption('link_grid1_6', 'javascript:void(0)') }}"
                    >
                        <div class="effect">
                            <img
                                src="{{ TnMedia::getImageUrl(theme_options()->getOption('grid1_6', null) . '?w=1400', asset('/images/no-image.jpg')) }}"
                                alt="banner gird"
                                class="bg-gray-300 object-cover w-full h-full"/>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
