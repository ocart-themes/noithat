@props(['keySlide'=> 'default'])

<section class="section-custom sec-category-product bg-white lg:bg-auto antialiased font-sans">
    <div class="container-custom">
        <div class="{{ 'swiperCategoryProduct'.$keySlide }} swiper-main swiper-container mySwiperGecko my-swiper-main overflow-hidden">
            <div class="swiper-wrapper">
                @foreach(get_categories_feature() as $category)
                    <div class="swiper-slide">
                        <div class="text-center rounded-t-full hover:shadow-xl">
                            <a href="{!! $category->url !!}"
                               class="inline-block w-full">
                                <img
                                    src="{{ TnMedia::getImageUrl($category->image, 'medium', asset('/images/no-image.jpg')) }}"
                                    class="w-full block m-auto rounded-full lg:p-3"
                                    alt="{{ $category->name }}"
                                    style="background-image: linear-gradient(180deg, #ffffff, #f8f8f800);"
                                    >
                                <div class="text-gray-600 font-bold line-clamp-1 text-xs md:text-base">
                                    {{ $category->name }}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        var categoryProduct{{$keySlide}} = new Swiper(".swiperCategoryProduct{{$keySlide}}", {
            spaceBetween: 15,
            slidesPerView: 4,
            freeMode: true,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            breakpoints: {
                991: {
                    slidesPerView: 9,
                }
            }
        });
    </script>
</section>
