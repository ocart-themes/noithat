<section class="sec-about5 section-custom antialiased">
    <div class="container-custom">
        <div class="lg:grid lg:grid-cols-2 lg:gap-5 xl:gap-7">
            <div class="p-4 lg:p-8 mb-4 lg:mb-0 rounded-md text-white bg-purple-400 relative">
                <div class="flex flex-wrap items-center">
                    <div class="w-24 h-24 lg:w-32 lg:h-32">
                        <img
                            data-src="{{ TnMedia::getImageUrl(!empty(theme_options()->getOption('image_about5', null)) ? theme_options()->getOption('image_about5', null) . '?w=150' : asset('/images/no-image.jpg')) }}"
                            src="{{ asset('/images/no-image.jpg') }}"
                            class="w-full h-full object-cover rounded-full lozad"
                            alt="professional consultant 1"
                        >
                    </div>
                    <div class="flex-1 text-left ml-2 lg:ml-8 lg:pr-8">
                        <div class="text-xl lg:text-2xl font-bold">
                            {!! theme_options()->getOption('title_about5', '') !!}
                        </div>
                        <div>
                            {!! theme_options()->getOption('deps_about5', '') !!}
                        </div>
                        <div>
                            <a href="tel:{{ preg_replace( '/[^0-9]/', '', theme_options()->getOption('phone_about5', null) )}}">SĐT: {!! theme_options()->getOption('phone_about5', '') !!}</a>
                        </div>
                        @if(theme_options()->getOption('zalo_about5', ''))
                        <div>
                            <a
                                href="https://zalo.me/{{ preg_replace( '/[^0-9]/', '', theme_options()->getOption('zalo_about5', null) )}}"
                                target="_blank"
                            >
                                Zalo: {!! theme_options()->getOption('zalo_about5', '') !!}
                            </a>
                        </div>
                        @endif
                        <div class="hidden lg:block hotline-phone-ring-wrap absolute right-5 top-5">
                            <div class="hotline-phone-ring">
                                <div class="hotline-phone-ring-circle"></div>
                                <div class="hotline-phone-ring-circle-fill bg-indigo-500 opacity-60"></div>
                                <div class="hotline-phone-ring-img-circle bg-indigo-500">
                                    <a href="tel:{!! theme_options()->getOption('phone_about5', '') !!}" class="pps-btn-img">
                                        <img src="{{ asset('/images/icon-phone.png') }}" alt="Số điện thoại" width="50">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:p-8 mb-4 lg:mb-0 rounded-md text-white bg-yellow-500 relative">
                <div class="flex flex-wrap items-center">
                    <div class="w-24 h-24 lg:w-32 lg:h-32">
                        <img
                            data-src="{{ TnMedia::getImageUrl(!empty(theme_options()->getOption('image_about5_2', null)) ? theme_options()->getOption('image_about5_2', null) . '?w=150' : asset('/images/no-image.jpg')) }}"
                            src="{{ asset('/images/no-image.jpg') }}"
                            class="w-full h-full object-cover rounded-full lozad"
                            alt="professional consultant 2"
                        >
                    </div>
                    <div class="flex-1 text-left ml-2 lg:ml-8 lg:pr-8">
                        <div class="text-xl lg:text-2xl font-bold">
                            {!! theme_options()->getOption('title_about5_2', '') !!}
                        </div>
                        <div>
                            {!! theme_options()->getOption('deps_about5_2', '') !!}
                        </div>
                        <div>
                            <a href="tel:{{ preg_replace( '/[^0-9]/', '', theme_options()->getOption('phone_about5_2', null) )}}">SĐT: {!! theme_options()->getOption('phone_about5_2', '') !!}</a>
                        </div>
                        @if(theme_options()->getOption('zalo_about5_2', ''))
                        <div>
                            <a
                                href="https://zalo.me/{{ preg_replace( '/[^0-9]/', '', theme_options()->getOption('zalo_about5_2', null) )}}"
                                target="_blank"
                            >
                                Zalo: {!! theme_options()->getOption('zalo_about5_2', '') !!}
                            </a>
                        </div>
                        @endif
                        <div class="hidden lg:block hotline-phone-ring-wrap absolute right-5 top-5">
                            <div class="hotline-phone-ring">
                                <div class="hotline-phone-ring-circle"></div>
                                <div class="hotline-phone-ring-circle-fill bg-indigo-500 opacity-60"></div>
                                <div class="hotline-phone-ring-img-circle bg-indigo-500">
                                    <a href="tel:{!! theme_options()->getOption('phone_about5_2', '') !!}" class="pps-btn-img">
                                        <img src="{{ asset('/images/icon-phone.png') }}" alt="Số điện thoại" width="50">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @-webkit-keyframes phonering-alo-circle-anim {
            0%{-webkit-transform:rotate(0) scale(0.5) skew(1deg);-webkit-opacity:0.1;}
            30%{-webkit-transform:rotate(0) scale(0.7) skew(1deg);-webkit-opacity:0.5;}
            100%{-webkit-transform:rotate(0) scale(1) skew(1deg);-webkit-opacity:0.1;}
        }
        @-webkit-keyframes phonering-alo-circle-fill-anim {
            0%{-webkit-transform:rotate(0) scale(0.7) skew(1deg);opacity:0.6;}
            50%{-webkit-transform:rotate(0) scale(1) skew(1deg);opacity:0.6;}
            100%{-webkit-transform:rotate(0) scale(0.7) skew(1deg);opacity:0.6;}
        }
        @-webkit-keyframes phonering-alo-circle-img-anim {
            0%{-webkit-transform:rotate(0) scale(1) skew(1deg);}
            10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg);}
            20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg);}
            30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg);}
            40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg);}
            50%{-webkit-transform:rotate(0) scale(1) skew(1deg);}
            100%{-webkit-transform:rotate(0) scale(1) skew(1deg);}
        }
        .hotline-phone-ring{
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 110px;
            height: 110px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
        }
        .hotline-phone-ring-circle {
            width: 110px;
            height: 110px;
            top: 0;
            left: 0;
            position: absolute;
            background-color: transparent;
            border-radius: 100%;
            border: 2px solid white;
            -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            opacity: 0.5;
        }
        .hotline-phone-ring-circle-fill {
            width: 80px;
            height: 80px;
            top: 16px;
            left: 16px;
            position: absolute;
            /*background-color: rgba(21, 100, 167, 0.7);*/
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
            animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }
        .hotline-phone-ring-img-circle {
            /*background-color: #1564a7;*/
            width: 50px;
            height: 50px;
            top: 31px;
            left: 31px;
            position: absolute;
            background-size: 20px;
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hotline-phone-ring-img-circle .pps-btn-img {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        .hotline-phone-ring-img-circle .pps-btn-img img {
            width: 33px;
            height: 33px;
        }
    </style>
</section>
