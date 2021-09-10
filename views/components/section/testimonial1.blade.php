<section class="sec-testimonial section-custom">
    <div class="max-w-6xl mx-auto px-8">
        <div class="relative" x-data="{ activeSlide: 1 }">
            <div
                class="relative lg:flex rounded-lg shadow-2xl overflow-hidden"
                key="1"
                x-show="activeSlide === 1"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-50"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center effect">
                    <img
                        class="absolute h-full w-full object-cover"
                        src="{{ TnMedia::getImageUrl(theme_options()->getOption('image_testimonial1', null) . '?w=600', asset('/images/no-image.jpg')) }}"
                        alt="{{ theme_options()->getOption('title_testimonial1', '') }}"
                    />
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-4 lg:py-24 px-4 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            {{ theme_options()->getOption('deps_testimonial1', '') }}
                        </p>
                        <p class="mt-6 animate-bounce">
                            <a
                                href="{{ theme_options()->getOption('link_testimonial1', 'javascript:void(0)') }}"
                                class="font-medium text-blue-600 hover:text-blue-900"
                            >
                                {{ theme_options()->getOption('title_testimonial1', '') }} &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="relative lg:flex rounded-lg shadow-2xl overflow-hidden"
                key="2"
                x-show="activeSlide === 2"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-50"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center effect">
                    <img
                        class="absolute h-full w-full object-cover"
                        src="{{ TnMedia::getImageUrl(theme_options()->getOption('image_testimonial1_2', null) . '?w=600', asset('/images/no-image.jpg')) }}"
                        alt="{{ theme_options()->getOption('title_testimonial1_2', '') }}"
                    />
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-4 lg:py-24 px-4 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            {{ theme_options()->getOption('deps_testimonial1_2', '') }}
                        </p>
                        <p class="mt-6 animate-bounce">
                            <a
                                href="{{ theme_options()->getOption('link_testimonial1_2', 'javascript:void(0)') }}"
                                class="font-medium text-blue-600 hover:text-blue-900"
                            >
                                {{ theme_options()->getOption('title_testimonial1_2', '') }} &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="relative lg:flex rounded-lg shadow-2xl overflow-hidden"
                key="3"
                x-show="activeSlide === 3"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-50"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center effect">
                    <img
                        class="absolute h-full w-full object-cover"
                        src="{{ TnMedia::getImageUrl(theme_options()->getOption('image_testimonial1_3', null) . '?w=600', asset('/images/no-image.jpg')) }}"
                        alt="{{ theme_options()->getOption('title_testimonial1_3', '') }}"
                    />
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-4 lg:py-24 px-4 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            {{ theme_options()->getOption('deps_testimonial1_3', '') }}
                        </p>
                        <p class="mt-6 animate-bounce">
                            <a
                                href="{{ theme_options()->getOption('link_testimonial1_3', 'javascript:void(0)') }}"
                                class="font-medium text-blue-600 hover:text-blue-900"
                            >
                                {{ theme_options()->getOption('title_testimonial1_3', '') }} &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 left-0 lg:flex lg:items-center">
                <button
                    class="mt-24 lg:mt-0 -ml-6 h-12 w-12 rounded-full bg-white p-3 shadow-lg focus:outline-none"
                    x-on:click="activeSlide = activeSlide === 1 ? 3 : activeSlide - 1"
                >
                    <svg class="h-full w-full text-indigo-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5.41 11H21a1 1 0 0 1 0 2H5.41l5.3 5.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 1.4L5.4 11z"/>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 lg:flex lg:items-center">
                <button
                    class="mt-24 lg:mt-0 -mr-6 h-12 w-12 rounded-full bg-white p-3 shadow-lg focus:outline-none"
                    x-on:click="activeSlide = activeSlide === 3 ? 1 : activeSlide + 1"
                >
                    <svg class="h-full w-full text-indigo-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
