<x-guest-layout xmlns:x-theme="http://www.w3.org/1999/html">
    {{--    <h1 class="overflow-hidden opacity-0 w-0 h-0">{!! get_title() !!}</h1>--}}

    @php
        $sections = json_decode(theme_options()->getOption('section_list', []), true);
    @endphp

    @if(is_array($sections) && in_array('sec1', $sections))
        <x-theme::section.slide1 keySlide="sec1"/>
    @endif

    @if(is_array($sections) && in_array('sec2', $sections))
        <x-theme::section.grid1/>
    @endif

    @if(is_active_plugin('ecommerce') && is_array($sections) && in_array('sec3', $sections))
        <x-theme::section.category-product1/>
    @endif

    @if(is_active_plugin('ecommerce') && is_array($sections) && in_array('sec4', $sections))
        <x-theme::section.product1 class="google-speed1"/>
    @endif

    @if(is_array($sections) && in_array('sec5', $sections))
        <x-theme::section.about1/>
    @endif

    @if(is_active_plugin('ecommerce') && is_array($sections) && in_array('sec6', $sections))
        <x-theme::section.product2 class="google-speed1"/>
    @endif

    @if(is_array($sections) && in_array('sec7', $sections))
        <x-theme::section.testimonial1/>
    @endif

    @if(is_active_plugin('ecommerce') && is_array($sections) && in_array('sec8', $sections))
        <x-theme::section.product3/>
    @endif

    @if(is_active_plugin('blog') && is_array($sections) && in_array('sec9', $sections))
        <x-theme::section.blog6/>
    @endif

    @if(is_array($sections) && in_array('sec10', $sections))
        <x-theme::section.partner1/>
    @endif

    @if(is_active_plugin('distributor') && is_array($sections) && in_array('sec11', $sections))
        <x-theme::section.distributor1/>
    @endif

    @if(is_array($sections) && in_array('sec12', $sections))
        <x-theme::section.contact1/>
    @endif
    <style>
        section:nth-child(even) {
            background: #ececec63;
        }
    </style>
</x-guest-layout>
