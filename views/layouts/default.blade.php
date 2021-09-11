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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap">

    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ Theme::asset('css/style.css?v=2.1') }}">
    <style>
        .sec-blog-header{
            position: relative;
        }
        .separetor .border-divider{
            position: absolute;
            left: 0;
            top: 2px;
            background: linear-gradient(90deg, #F62002 0%, #F62002 100%);
            width: 16px;
            height: 80%;
            border-radius: 0px 100px 0px 100px;
            z-index: 2;
        }
        .section-title{
            margin: 0px 0px 40px 0px;
            position: relative;
            padding: 0;
            z-index: 2;
            padding-bottom: 5px;
            border-bottom: solid 3px #7070703B;
        }
        .section-title-main{
            font-size: 38px;
            font-weight: 700;
            line-height: 37px;
        }
        .section-title-sub{
            font-size: 33px;
            font-weight: 700;
            line-height: 34px;
            letter-spacing: 0.2px;
        }

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

        .ts-main-nav > .nav-item:nth-child(1) {
            background: #6600F2;
        }

        .ts-main-nav > .nav-item:nth-child(1):hover, .ts-main-nav > .nav-item:nth-child(1).active {
            /* background-color: #6600F2 !important; */
        }

        .ts-main-nav > .nav-item:nth-child(1):hover:before, .ts-main-nav > .nav-item:nth-child(1).active:before {
            background: #6600F2;
        }

        .ts-main-nav > .nav-item:nth-child(2) {
            background: #8600C3;
        }

        .ts-main-nav > .nav-item:nth-child(2):hover, .ts-main-nav > .nav-item:nth-child(2).active {
            background-color: #8600C3 !important;
        }

        .ts-main-nav > .nav-item:nth-child(2):hover:before, .ts-main-nav > .nav-item:nth-child(2).active:before {
            background: #8600C3;
        }

        .ts-main-nav > .nav-item:nth-child(3) {
            background: #AB188F;
        }

        .ts-main-nav > .nav-item:nth-child(3):hover, .ts-main-nav > .nav-item:nth-child(3).active {
            background-color: #AB188F !important;
        }

        .ts-main-nav > .nav-item:nth-child(3):hover:before, .ts-main-nav > .nav-item:nth-child(3).active:before {
            background: #AB188F;
        }

        .ts-main-nav > .nav-item:nth-child(4) {
            background: #C3266D;
        }

        .ts-main-nav > .nav-item:nth-child(4):hover, .ts-main-nav > .nav-item:nth-child(4).active {
            background-color: #C3266D !important;
        }

        .ts-main-nav > .nav-item:nth-child(4):hover:before, .ts-main-nav > .nav-item:nth-child(4).active:before {
            background: #C3266D;
        }

        .ts-main-nav > .nav-item:nth-child(5) {
            background: #E84C33;
        }

        .ts-main-nav > .nav-item:nth-child(5):hover, .ts-main-nav > .nav-item:nth-child(5).active {
            background-color: #E84C33 !important;
        }

        .ts-main-nav > .nav-item:nth-child(5):hover:before, .ts-main-nav > .nav-item:nth-child(5).active:before {
            background: #E84C33;
        }

        .ts-main-nav > .nav-item:nth-child(6) {
            background: #F57607;
        }

        .ts-main-nav > .nav-item:nth-child(6):hover, .ts-main-nav > .nav-item:nth-child(6).active {
            background-color: #F57607 !important;
        }

        .ts-main-nav > .nav-item:nth-child(6):hover:before, .ts-main-nav > .nav-item:nth-child(6).active:before {
            background: #F57607;
        }

        .ts-main-nav > .nav-item:nth-child(7) {
            background: #FC980F;
        }

        .ts-main-nav > .nav-item:nth-child(7):hover, .ts-main-nav > .nav-item:nth-child(7).active {
            background-color: #FC980F !important;
        }

        .ts-main-nav > .nav-item:nth-child(7):hover:before, .ts-main-nav > .nav-item:nth-child(7).active:before {
            background: #FC980F;
        }

        .ts-main-nav > .nav-item:nth-child(8) {
            background: #FEB430;
        }

        .ts-main-nav > .nav-item:nth-child(8):hover, .ts-main-nav > .nav-item:nth-child(8).active {
            background-color: #FEB430 !important;
        }

        .ts-main-nav > .nav-item:nth-child(8):hover:before, .ts-main-nav > .nav-item:nth-child(8).active:before {
            background: #FEB430;
        }
        .nav-item{
            position: relative;
        }
        .nav-item:before{
            position: absolute;
            content: "";
            width: 100%;
            height: 10px;
            left: 0;
            top: 100%;
            -webkit-transition: all 0.1s ease;
            transition: all 0.1s ease;
            opacity: 0;
            visibility: hidden;
        }
        .nav-item:after{
            position: absolute;
            content: "";
            width: 0;
            height: 0;
            border-top: 11px solid #3F058E;
            border-right: 10px solid transparent;
            bottom: -11px;
            left: 100%;
            -webkit-transition: all 0.1s ease;
            transition: all 0.1s ease;
            opacity: 0;
            visibility: hidden;
        }
        .nav-item.active:before, .nav-item.active:after, .nav-item:hover:before, .nav-item:hover:after{
            opacity: 1;
            visibility: visible;
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
            .section-title-main, .section-title-sub{
                font-size: 22px;
                font-weight: 700;
                line-height: 22px;
                letter-spacing: normal;
            }
            .swiper-button-next, .swiper-button-prev {
                width: 30px !important;
            }
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{!! asset('access/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('access/jquery.pjax.js') !!}"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{!! asset('access/swiper/css/swiper-bundle.min.css?v=1') !!}" />
    <!-- Swiper JS -->
    <script src="{!! asset('access/swiper/js/swiper-bundle.min.js?v=1') !!}"></script>

    <!-- LazyLoad JS -->
    <script src="{!! asset('access/lazyload/lazysizes.min.js?v=1') !!}" async=""></script>

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
    {!! get_meta_head() !!}
    <!-- End Meta Head -->

    @stack('head')

</head>
<body id="body">
@stack('body')

<div class="font-sans text-gray-900 antialiased">
    @include(Theme::getThemeNamespace('layouts.header'))
    <div id="body" class="content" data-pjax-container="body">{{ $slot }}</div>
    @include(Theme::getThemeNamespace('layouts.footer'))

    @include(Theme::getThemeNamespace('components.layout.list-sharing'))

    <x-theme::form.login-modal/>

    <x-theme::modal.youtube/>

    @if(is_active_plugin('contact'))
    <x-theme::form.contact-modal/>
    @endif
    <!-- Cart Sidebar -->
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

{!! get_meta_footer() !!}

@stack('footer')

</body>
</html>
