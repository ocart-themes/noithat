<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-pjax-version" content="{{ mix('themes/noithat/css/style.css') }}">

    <link rel="icon" type="image/png" href="{{ get_favicon() }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SeoHelper::render() !!}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap">

    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ Theme::asset('css/style.css?v=1.1') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{!! asset('access/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('access/jquery.pjax.js') !!}"></script>

    <link rel="stylesheet" href="{!! asset('access/owlcarousel/dist/assets/owl.carousel.css?v=1') !!}">
    <link rel="stylesheet" href="{!! asset('access/owlcarousel/dist/assets/owl.theme.default.css?v=1') !!}">
    <script defer src="{!! asset('access/owlcarousel/dist/owl.carousel.js?v=1') !!}"></script>

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

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="VKxCFr5E"></script>

    @stack('head')

</head>
<body id="body">
<div id="fb-root"></div>
@stack('body')

<div class="font-sans text-gray-900 antialiased">
    @include(Theme::getThemeNamespace('layouts.header'))
    <div id="body" class="content" data-pjax-container="body">{{ $slot }}</div>
    @include(Theme::getThemeNamespace('layouts.footer'))

    @include(Theme::getThemeNamespace('components.layout.list-sharing'))

    <x-theme::form.login-modal/>

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

<script>$(function(){
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
