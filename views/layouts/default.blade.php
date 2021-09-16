<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:x-theme="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-pjax-version" content="{{ mix('themes/tintuc/css/style.css') }}">

    @if(!empty(get_favicon()))
        <link rel="icon" type="image/png" href="{{ get_favicon() }}">
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SeoHelper::render() !!}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <style type="text/css">
        body {
            background-color: #f0f0f2;
            margin: 0;
            padding: 0;

        }
        div {
            width: 600px;
            margin: 5em auto;
            padding: 2em;
            background-color: #fdfdff;
            border-radius: 0.5em;
            box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
        }
        a:link, a:visited {
            color: #38488f;
            text-decoration: none;
        }
        @media (max-width: 700px) {
            div {
                margin: 0 auto;
                width: auto;
            }
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{!! asset('access/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('access/jquery.pjax.js') !!}" defer></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{!! asset('access/swiper/css/swiper-bundle.min.css?v=1') !!}"/>
    <!-- Swiper JS -->
    <script src="{!! asset('access/swiper/js/swiper-bundle.min.js?v=1') !!}"></script>

    <!-- LazyLoad JS -->
    <script src="{!! asset('access/lazyload/lazysizes.min.js?v=1') !!}" async=""></script>

{{--    <link rel="preload" href="{{ Theme::asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">--}}

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
<body id="body" class="font-sans text-gray-900 antialiased">
@stack('body')
<div>
    <h1>Example Domain</h1>
    <p>This domain is for use in illustrative examples in documents. You may use this
        domain in literature without prior coordination or asking for permission.</p>
    <p><a href="https://www.iana.org/domains/example">More information...</a></p>
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
