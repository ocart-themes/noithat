@php
    $banner = get_banner();
@endphp
<section class="section-custom py-6">
    <div class="container-custom">
        <div class="slide-home owl-carousel owl-theme relative">
            @if(!empty($banner) && is_array($banner))
                @foreach($banner as $item)
                    <div class="item">
                        <a href="{{ !empty($item->link) ? $item->link : '#' }}">
                            <img src="{{ $item->img }}">
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('.slide-home').owlCarousel({
            loop: true,
            dots: true,
            nav: true,
            animateOut: 'fadeOut',
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            items: 1,
            margin: 0,
        })
    });

</script>
<style>
    .owl-carousel:not(.owl-loaded) {
        opacity: 0;
        visibility: hidden;
        height: 354px;
    }

    .owl-carousel .owl-dots {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .owl-nav button span{
        font-size: 3rem;
    }

    .owl-nav button:focus{
        outline: none;

    }
    .owl-nav button:active span{
        background-color: rgba(255, 255, 255, 0.3);
    }

    .owl-nav .owl-prev {
        position: absolute;
        top: 50%;
        left: 0px;
        transform: translateY(-50%);

    }

    .owl-nav .owl-next {
        position: absolute;
        top: 50%;
        right: 0px;
        transform: translateY(-50%);
    }

    .owl-carousel .owl-nav button{
        cursor: pointer;
    }

    .owl-prev span,
    .owl-next span {
        color: grey;
        background-color: rgba(255, 255, 255, 0);
        padding: 0 10px;
        border-radius: 5px;
    }

    .owl-prev span:hover,
    .owl-next span:hover {
        color: black;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .owl-carousel button:hover, .owl-carousel button:focus, .owl-carousel button:focus-visible {
        outline: none;
        background: none !important;
    }
</style>
