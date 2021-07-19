@props(['data' => null])
@if($data)
    <div class="h-full block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
        <a href="{!! route(ROUTE_PRODUCT_SCREEN_NAME, ['slug' => $data->slug]) !!}">
            <img
                class="w-full object-cover"
                src="{{ TnMedia::getImageUrl(Arr::first($data->images), 'medium', asset('/images/no-image.jpg')) }}"
                alt=""
            >
        </a>
        <div class="p-2 md:p-3">
{{--            @if(count($data->categories)>0)--}}
{{--                <div class="hidden md:inline-block">--}}
{{--                    <div class="line-clamp-1">--}}
{{--                        @foreach($data->categories as $key=>$item)--}}
{{--                            <a href="{!! route(ROUTE_PRODUCT_CATEGORY_SCREEN_NAME, ['slug' => $item->slug]) !!}" class="leading-none text-gray-500 tracking-wide text-xs hover:text-blue-700" >--}}
{{--                                {{ $item->name }}--}}
{{--                            </a>--}}
{{--                            @if(count($data->categories) != $key + 1)--}}
{{--                                <span>, </span>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
            <a href="{!! route(ROUTE_PRODUCT_SCREEN_NAME, ['slug' => $data->slug]) !!}" class="hover:text-blue-700">
                <h3 class="text-xs md:text-base font-semibold text-gray-700 line-clamp-2">{{ $data->name }}</h3>
            </a>

            @if(is_active_plugin('ec_review'))
                @php
                    $avg = get_average_star_of_product($data->id);
                @endphp
                @if($avg > 1)
                <div class="flex items-center my-1 md:mt-2 md: mb-0">
                    @for($i=0; $i < 5; $i++)
                        <x-theme::icons.star :active="$i < $avg"/>
                    @endfor
                </div>
                @endif

            @endif
{{--            <div class="hidden md:block text-sm text-gray-500 md:line-clamp-3">{!! $data->description !!}</div>--}}
            <div class="flex justify-between items-center">
                @if(!empty($data->sell_price) && $data->sell_price > 0)
                    <div class="inline-flex items-center">
                        <span class="font-bold text-sm md:text-base">
                            {{ format_price($data->sell_price) }}
                        </span>
                        &nbsp;
                        <span class="text-base font-semibold underline">đ</span>
                        @if($data->price > $data->sell_price)
                            <span class="font-bold text-white bg-red-500 rounded-sm px-1 text-xs ml-2">
                                -{{ format_price(100 - ($data->sell_price/$data->price)*100) }}%
                            </span>
                        @endif
                    </div>
                @else
                    <div class="flex text-red-600">
                        <span class="font-bold text-sm md:text-base">Liên hệ</span>
                    </div>
                @endif
                <button onclick="addToCart({{ $data->id, $data->slug }})" class="hidden md:block flex text-blue-600 p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:text-green-500" title="Thêm vào giỏ hàng">
                    <x-theme::icons.shopping-cart class="w-7"/>
                </button>

            </div>
        </div>
        @if(is_active_plugin('eclocation'))
            @if($data->address)
                <div class="p-2 md:p-4 border-t text-xs md:text-sm text-gray-500">
                <span class="flex items-center">
                    <x-theme::icons.marker class="hidden md:block"/> {{ $data->address }}
                </span>
                </div>
            @endif
        @endif

{{--        <div class="hidden md:flex justify-between p-4 border-t items-center text-sm text-gray-600">--}}
{{--            <div class="flex">--}}
{{--                <x-theme::icons.star class="text-yellow-500"/>--}}
{{--                <x-theme::icons.star class="text-yellow-500"/>--}}
{{--                <x-theme::icons.star class="text-yellow-500"/>--}}
{{--                <x-theme::icons.star class="text-yellow-500"/>--}}
{{--                <x-theme::icons.star class="text-gray-400"/>--}}
{{--                <span class="ml-1">(34)</span>--}}
{{--            </div>--}}
{{--            @if($data->created_at)--}}
{{--                <div class="flex">--}}
{{--                    <x-theme::icons.calendar/>--}}
{{--                    <span class="ml-1">{{ date_format($data->created_at, "d/m/Y") }}</span>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
    </div>

@endif
