@if(!empty(get_products_menu()))
    @foreach(get_products_menu()->data as $item_menu)
        @if(!empty($item_menu->id))
            <section class="section-custom sec-product antialiased text-gray-900 font-sans">
                <div class="container-custom">
                    <div class="sec-heading flex mb-4 lg:block w-full float-left">
                        <h2 class="flex-1 text-base md:text-2xl font-bold float-left line-clamp-1 mr-2">
                            <a href="{{ route(ROUTE_PRODUCT_CATEGORY_SCREEN_NAME, $item_menu->slug) }}"
                               class="border-b border-yellow-500">{{ $item_menu->name }}</a>
                        </h2>
                        @if(!empty($item_menu->children) && count($item_menu->children) > 0)
                        <span class="float-right">
                        @foreach($item_menu->children as $item)
                        <span class="hidden lg:inline-block float-left ml-6 text-md mt-1.5">
                            <a href="{{ route(ROUTE_PRODUCT_CATEGORY_SCREEN_NAME, $item->slug) }}"
                               class="text-gray-600 hover:text-black">{{ $item->name }}
                            </a>
                        </span>
                                @endforeach
                        </span>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium
                             text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:text-gray-700 focus:border-gray-300
                             dark:text-gray-300 dark:hover:text-gray-400 dark:focus:text-gray-400
                             focus:outline-none transition duration-150 ease-in-out lg:hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16"/>
                                        </svg>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    @foreach($item_menu->children as $item)
                                        <a href="{{ route(ROUTE_PRODUCT_CATEGORY_SCREEN_NAME, $item->slug) }}"
                                           class="menu-category-sub-item text-gray-700 block px-4 py-2 text-sm"
                                           role="menuitem" tabindex="-1" id="menu-item-0">{{ $item->name }}
                                        </a>
                                    @endforeach
                                </x-slot>

                            </x-dropdown>

                        @endif

                    </div>
                    <div class="w-full grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4">
                        @foreach(get_list_products_category($item_menu->id, 7) as $key=>$product)
                            @if($key == 1)
                                <div class="hidden lg:block col-span-2">
                                    <x-theme::card.product-horizontal-big :data="$product"/>
                                </div>
                            @else
                                <div>
                                    <x-theme::card.product :data="$product"/>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>

        @endif

    @endforeach

@endif
