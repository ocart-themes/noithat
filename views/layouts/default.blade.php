<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:x-theme="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-pjax-version" content="{{ mix('themes/noithat/css/style.css') }}">

    @if(!empty(get_favicon()))
        <link rel="icon" type="image/png" href="{{ get_favicon() }}">
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SeoHelper::render() !!}

    <!-- Fonts -->
    <link rel=stylesheet href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap">

    <style type="text/css">
        * {
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
        }
        *, ::before, ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }
        :root {
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
        }
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }
        body {
            font-family: inherit;
            line-height: inherit;
            margin: 0;
        }
        a {
            color: inherit;
            text-decoration: inherit;
        }
        img, video {
            max-width: 100%;
            height: auto;
            display: block;
            vertical-align: middle;
        }
        img, svg, video, canvas, audio, iframe, embed, object {
            display: block;
            vertical-align: middle;
        }
        button, input, optgroup, select, textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }
        button, [role="button"] {
            cursor: pointer;
        }
        button {
            background-color: transparent;
            background-image: none;
        }
        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        .container-custom {
            margin-left: auto;
            margin-right: auto;
            max-width: 80rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        @media (min-width: 640px) {
            .container-custom {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        .section-custom {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        @media (min-width: 1024px) {
            .section-custom {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .w-full {
            width: 100%;
        }
        .h-full {
            height: 100%;
        }
        .m-auto {
            margin: auto;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .h-0 {
            height: 0px;
        }
        .h-10 {
            height: 2.5rem;
        }
        .h-40 {
            height: 10rem;
        }
        .absolute {
            position: absolute;
        }
        .block {
            display: block;
        }
        .rounded-full {
            border-radius: 9999px;
        }
        .relative {
            position: relative;
        }
        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem;
        }
        .font-semibold {
            font-weight: 600;
        }
        .font-medium {
            font-weight: 500;
        }
        .font-bold {
            font-weight: 700;
        }
        .w-0 {
            width: 0px;
        }
        .w-5 {
            width: 1.25rem;
        }
        .w-6 {
            width: 1.5rem;
        }
        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgba(156, 163, 175, var(--tw-text-opacity));
        }
        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgba(107, 114, 128, var(--tw-text-opacity));
        }
        .ml-2 {
            margin-left: 0.5rem;
        }
        .h-5 {
            height: 1.25rem;
        }
        .h-6 {
            height: 1.5rem;
        }
        .space-x-6 > :not([hidden]) ~ :not([hidden]) {
            margin-right: calc(1.5rem * var(0));
            margin-left: calc(1.5rem * calc(1 - var(0)));
        }
        .py-7 {
            padding-top: 1.75rem;
            padding-bottom: 1.75rem;
        }
        .inline-block {
            display: inline-block;
        }
        .inline-flex {
            display: inline-flex;
        }
        .items-center {
            align-items: center;
        }
        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, 0);
        }
        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        }
        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        }
        .text-green-500 {
            --tw-text-opacity: 1;
            color: rgba(16, 185, 129, var(--tw-text-opacity));
        }
        .focus\:text-green-500:focus {
            --tw-text-opacity: 1;
            color: rgba(16, 185, 129, var(--tw-text-opacity));
        }
        .z-20 {
            z-index: 20;
        }
        .z-40 {
            z-index: 40;
        }
        .z-50 {
            z-index: 50;
        }
        .shadow {
            --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .top-0 {
            top: 0px;
        }
        .sticky {
            position: sticky;
        }
        .justify-between {
            justify-content: space-between;
        }
        .flex {
            display: flex;
        }
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }
        .hidden {
            display: none;
        }
        .inset-x-0 {
            right: 0px;
            left: 0px;
        }
        .ring-opacity-5 {
            --tw-ring-opacity: 0.05;
        }
        .overflow-hidden {
            overflow: hidden;
        }
        .opacity-0 {
            opacity: 0;
        }
        .-mr-2 {
            margin-right: -0.5rem;
        }
        .-my-2 {
            margin-top: -0.5rem;
            margin-bottom: -0.5rem;
        }
        .mr-2 {
            margin-right: 0.5rem;
        }
        .justify-center {
            justify-content: center;
        }
        .rounded-md {
            border-radius: 0.375rem;
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgba(75, 85, 99, var(--tw-text-opacity));
        }
        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .gap-2 {
            gap: 0.5rem;
        }
        .grid {
            display: grid;
        }
        .effect {
            display: block;
            overflow: hidden;
            position: relative;
        }
        .object-cover {
            -o-object-fit: cover;
            object-fit: cover;
        }
        .p-2 {
            padding: 0.5rem;
        }
        .line-clamp-1 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
        }
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgba(55, 65, 81, var(--tw-text-opacity));
        }
        .mb-0 {
            margin-bottom: 0px;
        }
        .my-1 {
            margin-top: 0.25rem;
            margin-bottom: 0.25rem;
        }
        .w-3 {
            width: 0.75rem;
        }
        .h-3 {
            height: 0.75rem;
        }
        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgba(209, 213, 219, var(--tw-text-opacity));
        }
        .fill-current {
            fill: currentColor;
        }
        .justify-between {
            justify-content: space-between;
        }
        .underline {
            text-decoration: underline;
        }
        .text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }
        .text-white {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }
        .px-1 {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }
        .rounded-sm {
            border-radius: 0.125rem;
        }
        .bg-red-500 {
            --tw-bg-opacity: 1;
            background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
        }
        .text-blue-600 {
            --tw-text-opacity: 1;
            color: rgba(37, 99, 235, var(--tw-text-opacity));
        }
        .w-7 {
            width: 1.75rem;
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .max-w-3xl {
            max-width: 48rem;
        }
        .mb-8 {
            margin-bottom: 2rem;
        }
        .text-center {
            text-align: center;
        }
        .rounded-t-full {
            border-top-left-radius: 9999px;
            border-top-right-radius: 9999px;
        }
        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .google-speed{
            display: none;
        }
        .w-auto {
            width: auto;
        }
        @media (min-width: 640px) {
            .sm\:h-16{
                height: 4rem;
            }
            .sm\:h-56 {
                height: 14rem;
            }
            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

        }
        @media (min-width: 768px)  {
            .md\:h-72 {
                height: 18rem;
            }
            .md\:text-base {
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .md\:text-2xl {
                font-size: 1.5rem;
                line-height: 2rem;
            }
            .md\:p-3 {
                padding: 0.75rem;
            }
            .md\:mt-2 {
                margin-top: 0.5rem;
            }
            .md\:w-4 {
                width: 1rem;
            }
            .md\:h-4 {
                height: 1rem;
            }
            .md\:block {
                display: block;
            }
            .md\:max-w-xs {
                max-width: 20rem;
            }
        }
        @media (min-width: 1024px) {
            .lg\:h-96 {
                height: 24rem;
            }
            .lg\:py-0 {
                padding-top: 0px;
                padding-bottom: 0px;
            }
            .lg\:flex {
                display: flex;
            }
            .lg\:space-x-4 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1rem * var(--tw-space-x-reverse));
                margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
            }
            .lg\:hidden {
                display: none;
            }
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .lg\:gap-4 {
                gap: 1rem;
            }
        }
    </style>
    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="preload" href="{{ Theme::asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{!! asset('access/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('access/jquery.pjax.js') !!}" defer></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{!! asset('access/swiper/css/swiper-bundle.min.css') !!}" />
    <style type="text/css">
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .swiper-button-next {
            background-image: url({{ Theme::asset('img/next.svg') }});
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center;
        }

        .swiper-button-prev {
            background-image: url({{ Theme::asset('img/prev.svg') }});
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center;
        }

        .swiper-button-next::after, .swiper-button-prev::after {
            display: none;
        }

        .swiper-button-next, .swiper-button-prev {
            width: 44px !important;
        }
        .thumb-bg .post-thumbnail a:after{
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 1;
            transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            background-color: transparent;
            background-image: linear-gradient(0deg , #000000c9 30%, #00000000 60%);
            border-radius: 6px;
        }

        .card-post .post-video-icon{
            position: absolute;
            height: 100%;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 1;
        }
        .card-post .format-icons{
            position: absolute;
            border: 2px solid #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            right: 15px;
            top: 15px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .card-post .post-video-icon .xts-play_icon{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 70px;
            height: 70px;
            background: #fff;
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            .swiper-button-next, .swiper-button-prev {
                width: 30px !important;
            }
            .card-post .post-video-icon .xts-play_icon{
                width: 40px;
                height: 40px;
            }
            .logo-header{
                max-width: 150px;
            }
        }
    </style>
    <!-- Swiper JS -->
    <script src="{!! asset('access/swiper/js/swiper-bundle.min.js') !!}"></script>

    <!-- LazyLoad JS -->
    <script src="{!! asset('access/lazyload/lazysizes.min.js') !!}" defer></script>

    <script>
        const bodyLoading = {
            show() {
                $('#loading').show();
            },
            hide() {
                $('#loading').hide();
            }
        }
    </script>
    <!-- Meta Head -->
    {!! theme_options()->getOption('meta_header', '') !!}
    <!-- End Meta Head -->

    @stack('head')

</head>
<body id="body">
@stack('body')

<div class="font-sans text-gray-900 antialiased">
    @include(Theme::getThemeNamespace('layouts.header'))
    <div id="body-content" class="content" data-pjax-container="body">{{ $slot }}</div>
{{--    @include(Theme::getThemeNamespace('layouts.footer'))--}}

    <footer>1111</footer>
{{--    @include(Theme::getThemeNamespace('components.layout.list-sharing'))--}}

{{--    <!-- Modal -->--}}
{{--    <x-theme::form.login-modal/>--}}

{{--    <x-theme::modal.youtube/>--}}

{{--    @if(is_active_plugin('contact'))--}}
{{--    <x-theme::form.contact-modal/>--}}
{{--    @endif--}}

{{--    <x-theme::modal.search/>--}}
{{--    <!-- End Modal -->--}}
</div>

<div id="loading" style="display:none" class="fixed w-full h-full top-0 left-0 z-50 flex items-center justify-center">
    <div class="relative inline-flex">
            <span class="flex items-center justify-center h-24 w-24">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-0 w-0 bg-purple-500"></span>
            </span>
    </div>
</div>

@stack('bodybelow')

<script>
    $(function(){
        $(document).pjax('a:not(.blank)', '#body');
        $.pjax.defaults.timeout = 1200;

        let loading;

        $(document).on('pjax:send', function() {
            loading =  new Promise((resolve, reject) => {
                setTimeout(function() {
                    resolve(true)
                }, 120)
            });
            bodyLoading.show();
        })
        $(document).on('pjax:complete', function() {
            if (typeof FB != 'undefined') {
                FB.XFBML.parse();
            }
            feather.replace({'stroke-width': 1.5})
            Alpine.start();
            loading.then(() => {
                bodyLoading.hide();
            })
            $('img').on("error", function (e) {
                e.target.src = '/images/no-image.jpg';
            });
        })
    })

    @if(is_active_plugin('ecommerce'))
    function addToCart(productId, slug = null, quantity = 1, optionAttrs = [], buynow = false) {
        axios.post('{{route(ROUTE_ADD_TO_CART_NAME)}}', {
            productId: productId,
            slug: slug,
            quantity: quantity,
            optionAttrs: optionAttrs,
        }).then((res) => {
            toast.success(res.message);
            $(".cart-count").text(res.count);
            if (!!buynow){
                $.pjax({url: '{{ route(ROUTE_SHOPPING_CART_SCREEN_NAME) }}', container: '#body'})
            }
        }).catch(e => {
            toast.error(e.message)
        }).finally(() => {
            // $.pjax.reload('#body', {});
        });
    }
    @endif

    $(function () {
        $(document).on('click', '[data-toggle=modal]', function () {
            const idModal = $(this).attr('data-target');
            $(idModal).click();
        })
    })
</script>

<!-- Meta Footer -->
{!! theme_options()->getOption('meta_footer', '') !!}
<!-- End Meta Footer -->

@stack('footer')

</body>
</html>
