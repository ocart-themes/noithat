@props(['data' => null])
@if($data)
    <div class="relative group h-full block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
        <a href="{!! $data->url !!}">
            <img
                class="h-full w-full object-cover lazyload"
                data-src="{{ TnMedia::getImageUrl(Arr::first($data->images), 'large', asset('/images/no-image.jpg')) }}"
                src="{{ asset('/images/no-image.jpg') }}"
                alt="{{ $data->name }}"
            >
        </a>

        <div class="opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out absolute bottom-0 right-0 top-0 bg-white bg-opacity-90 w-1/2 p-2 md:p-3" >
            @if(count($data->categories)>0)
                <div class="hidden md:inline-block">
                    <div class="line-clamp-2">
                        @foreach($data->categories as $key=>$item)
                            <a href="{!! $item->url !!}" class="leading-none text-gray-500 tracking-wide text-xs hover:text-blue-700" >
                                {{ $item->name }}
                            </a>
                            @if(count($data->categories) != $key + 1)
                                <span>, </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            <a href="{!! $data->url !!}">
                <h3 class="text-xs md:text-base font-semibold text-gray-700 line-clamp-4 hover:text-blue-700">{{ $data->name }}</h3>
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

            {{--            <div class="hidden md:block text-sm text-gray-500 md:line-clamp-3">{!! $data->description !!}</div>--}}
            <div class="flex justify-between items-center md:mt-2">
                @if(!empty($data->sell_price) && $data->sell_price > 0)
                    <div class="flex text-red-600">
                        <span class="font-bold text-sm md:text-base">{{ format_price($data->sell_price) }}</span>
                        &nbsp;
                        <span class="text-sm font-semibold">đ</span>
                    </div>
                @else
                    <div class="flex text-red-600">
                        <span class="font-bold text-sm md:text-base">Liên hệ</span>
                    </div>
                @endif

                <button onclick="addToCart({{ $data->id }})" class="hidden md:block flex text-blue-600 p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:text-green-500" title="Thêm vào giỏ hàng">
                    <x-theme::icons.shopping-cart class="w-7"/>
                </button>

            </div>
        </div>

    </div>

@endif
