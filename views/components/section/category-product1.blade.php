@props(['keySlide'=> 'default'])

<section class="section-custom sec-category-product1 lg:bg-auto antialiased">
    <div class="container-custom">
        <div class="w-full grid grid-cols-4 lg:grid-cols-8 gap-2 lg:gap-4">
            @foreach(get_categories_feature(8) as $category)
                <div class="text-center rounded-t-full hover:shadow-xl">
                    <a href="{!! $category->url !!}"
                       class="inline-block w-full">
                        <div class="relative" style="padding-bottom: calc( 1 * 100% )">
                            <img
                                data-src="{{ TnMedia::getImageUrl($category->image, 'thumb', asset('/images/no-image.jpg')) }}"
                                src="{{ asset('/images/no-image.jpg') }}"
                                class="w-full h-full block m-auto rounded-full lg:p-3 absolute lozad"
                                alt="{{ $category->name }}"
                                style="background-image: linear-gradient(180deg, #ffffff, #f8f8f800);"
                            >
                        </div>

                        <div class="text-gray-600 font-bold lg:line-clamp-1 text-xs md:text-base mt-2 md:mt-0">
                            {{ $category->name }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
