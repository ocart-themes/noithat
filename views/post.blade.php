<x-guest-layout xmlns:x-theme="http://www.w3.org/1999/html">
    <div class="container-custom mb-4">
        <ol class="list-reset py-4 border-b border-gray-200 flex text-grey">
            <li class="pr-2"><a href="{!! route('home') !!}" class="no-underline text-blue-600">Home</a></li>
            <li>/</li>
            @if(count($post->categories)>0)
                <li class="px-2 line-clamp-1"><a href="{!! route(ROUTE_BLOG_POST_CATEGORY_SCREEN_NAME, ['slug' => Arr::get($post->categories->first(), 'slug')]) !!}" class="no-underline text-blue-600">{{ Arr::get($post->categories->first(), 'name') }}</a></li>
                <li>/</li>
            @endif
            <li class="px-2 line-clamp-1"><span class="no-underline text-gray-500">{{ $post->name }}</span></li>
        </ol>
    </div>

    <div class="container-custom flex flex-wrap pb-2">
        <div class="lg:w-3/4 w-full md:order-last">
            <div class="mb-4">
                <h1 class="text-2xl text-blue-600 font-bold">{{ $post->name }}</h1>
            </div>
            @if($post->description)
                <div class="mb-4 p-4 bg-gray-100">
                    {!! $post->description !!}
                </div>
            @endif

            <div class="content-mce mb-4">
                {!! $post->content !!}
            </div>
            <style>
                .content-mce h1{
                    font-size: 2.2rem;
                    line-height: 3rem;
                    margin: 25px 0 15px;
                }
                .content-mce h2{
                    font-size: 1.8rem;
                    line-height: 2.2rem;
                    margin: 20px 0 10px;
                }
                .content-mce h3{
                    font-size: 1.4rem;
                    line-height: 2rem;
                    margin: 10px 0 5px;
                }
                .content-mce h4, .content-mce h5{
                    font-size: 1.2rem;
                    line-height: 1.5rem;
                    margin: 10px 0 5px;
                }
                .content-mce ul{
                    list-style-type: disc !important;
                }
                .content-mce ol{
                    list-style-type: decimal !important;
                }
            </style>
            <div class="text-right pb-4 border-b border-gray-100">
                <em>Nguồn: admin</em>
            </div>
            @if(count($post->categories)>0)
                <div class="py-4 border-b border-gray-100">
                    Chuyên mục:
                    @foreach($post->categories as $category)
                        <a href="{!! route(ROUTE_BLOG_POST_CATEGORY_SCREEN_NAME, ['slug' => $category->slug]) !!}">{{ $category->name }}</a><span> , </span>
                    @endforeach
                </div>
            @endif
            <div class="py-4 border-b border-gray-100">
                Tag: Tin tức
            </div>
            <div class="py-4 border-b border-gray-100 flex">
                Chia sẻ: <span class="flex ml-3 border-gray-200">
                            <a class="text-white bg-blue-500 px-4 rounded-sm" href="javascript:void(window.open('https://www.facebook.com/sharer.php?u=' + encodeURIComponent(document.location) + '?t=' + encodeURIComponent(document.title),'_blank'))">
                                Facebook
                            </a>
                            <a class="ml-2 text-white bg-green-500 px-4 rounded-sm" href="javascript:void(window.open('https://twitter.com/share?url=' + encodeURIComponent(document.location) + '&amp;text=' + encodeURIComponent(document.title) + '&amp;via=fabienb&amp;hashtags=koandesign','_blank'))">
                                Twitter
                            </a>
                        </span>
            </div>

            <div class="fb-comments" data-href="{!! route(ROUTE_BLOG_POST_SCREEN_NAME, ['slug' => $post->slug]) !!}" data-width="100%" data-numposts="5"></div>

            @if(count($post->categories)>0)
                <div class="py-4">
                    <div>Bài liên quan</div>
                    <div class="flex flex-wrap -mx-2">
                        @foreach(get_list_posts_relate(Arr::get($post->categories->first(), 'id'), 6) as $post)
                            <div class="w-1/2 xl:w-1/3 p-2">
                                <x-theme::card.post :data="$post"/>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

        @include(Theme::getThemeNamespace('layouts.sidebar-all'))

    </div>

</x-guest-layout>
