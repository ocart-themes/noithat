@php
    $banner = get_banner();
@endphp
@if($banner && count($banner) > 0)
<section class="section-custom py-6">
    <div class="container-custom">
        <div class="grid grid-cols-2 sm:grid-cols-9 gap-2 md:gap-2.5 mx-auto">
            <div class="mx-auto col-span-full sm:col-span-5">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[0]->link) ? $banner[0]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="{{ $banner[0]->img }}"
                             src="{{ TnMedia::getImageUrl(asset($banner[0]->img), 'large', asset('/images/no-image.jpg')) }}"
                             decoding="async"
                             class="bg-gray-300 object-cover w-full h-full"/>
                    </div>
                </a>
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[1]->link) ? $banner[1]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="New Sports"
                             src="{{ TnMedia::getImageUrl(asset($banner[1]->img), 'medium', asset('/images/no-image.jpg')) }}"
                             decoding="async"
                             class="bg-gray-300 object-cover w-full h-full"
                        >
                    </div>
                </a>
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[2]->link) ? $banner[2]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="Dress Women"
                             src="{{ TnMedia::getImageUrl(asset($banner[2]->img), 'medium', asset('/images/no-image.jpg')) }}"
                             decoding="async" class="bg-gray-300 object-cover w-full h-full">
                    </div>
                </a>
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[3]->link) ? $banner[3]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="Exclusive Sunglasses"
                             src="{{ TnMedia::getImageUrl(asset($banner[3]->img), 'medium', asset('/images/no-image.jpg')) }}"
                             decoding="async" class="bg-gray-300 object-cover w-full h-full">
                    </div>
                </a>
            </div>
            <div class="mx-auto col-span-1 sm:col-span-2">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[4]->link) ? $banner[4]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="Product Coupons"
                             src="{{ TnMedia::getImageUrl(asset($banner[4]->img), 'medium', asset('/images/no-image.jpg')) }}"
                             decoding="async" class="bg-gray-300 object-cover w-full h-full">
                    </div>
                </a>
            </div>
            <div class="mx-auto col-span-full sm:col-span-5">
                <a
                    class="h-full group flex justify-center relative overflow-hidden"
                    href="{{ !empty($banner[5]->link) ? $banner[5]->link : '#' }}"
                >
                    <div class="effect">
                        <img alt="New Backpack"
                             src="{{ TnMedia::getImageUrl(asset($banner[5]->img), 'large', asset('/images/no-image.jpg')) }}"
                             decoding="async" class="bg-gray-300 object-cover w-full">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
