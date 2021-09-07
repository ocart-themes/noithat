<x-guest-layout>
    <div class="section-custom container-custom content-mce">
        {!! $page->content !!}
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
</x-guest-layout>
