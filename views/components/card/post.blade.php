@props(['data' => null])
@if($data)
    <a href="{!! route(ROUTE_BLOG_POST_SCREEN_NAME, ['slug' => $data->slug]) !!}" class="h-full block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden transition ease-in-out duration-500 transform hover:-translate-y-3">
        <div class="effect">
            <img class="w-full object-cover" src="{{ TnMedia::getImageUrl($data->image, 'medium', asset('/images/no-image.jpg')) }}" alt="{{ $data->name }}">
        </div>
        <div class="p-2 md:p-4">
            <h3 class="md:mb-2 text-xs md:text-base font-semibold text-gray-700 line-clamp-2">{{ $data->name }}</h3>
            <div class="text-xs md:text-sm text-gray-500 line-clamp-2 md:line-clamp-3">{!! $data->description !!}</div>
        </div>
    </a>
@endif
