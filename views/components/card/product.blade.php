@props(['data' => null])
@if($data)
    <div class="h-full block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden transition ease-in-out duration-500 transform hover:-translate-y-3">
        <a href="{!! $data->url !!}" class="effect">
            <img
                class="w-full object-cover"
                src="{{ TnMedia::getImageUrl(Arr::first($data->images), 'medium', asset('/images/no-image.jpg')) }}"
                alt="{{ $data->name }}"
            >
        </a>
        <div class="p-2 md:p-3">
            <a href="{!! $data->url !!}" class="hover:text-blue-700">
                <h3 class="text-xs md:text-base font-semibold text-gray-700 line-clamp-2">{{ $data->name }}</h3>
            </a>

            @if(is_active_plugin('ec_review'))
                @php
                    $avg = $data->reviews_avg; //get_average_star_of_product($data->id);
                @endphp
                <div class="flex items-center my-1 md:mt-2 md: mb-0">
                    @for($i=0; $i < 5; $i++)
                        <x-theme::icons.star :active="$i < $avg"/>
                    @endfor
                </div>

            @endif
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

    </div>

@endif
