
@extends('layouts.public.content')
@section('content')
<div id="shopify-section-template--16717967065309__product-grid" class="shopify-section">
    <script
        src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/vendor-product.bundle.min.js?v=15873297638032180311683310458"
        type="module"></script>
    <script
        src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/product-quick-buy.js?v=5685359552054432331683310459"
        type="module"></script>

    <svg width="0" height="0" viewBox="0 0 200 200" role="presentation" aria-hidden="true" focusable="false">
        <defs>
            <clipPath id="clip-template--16717967065309__product-grid" clipPathUnits="objectBoundingBox">
                <path clip-rule="evenodd" transform="scale(0.005,0.005)"
                      d="M100.5 5L22.3194 42.6645L3 127.261L57.1086 195.105H143.891L198 127.261L178.681 42.6645L100.5 5Z"
                      fill="black" />
            </clipPath>
            <path id="outline-template--16717967065309__product-grid" vector-effect="non-scaling-stroke"
                  d="M100.5 5L22.3194 42.6645L3 127.261L57.1086 195.105H143.891L198 127.261L178.681 42.6645L100.5 5Z" />
        </defs>
    </svg>
    <section class="relative grid text-scheme-text bg-scheme-background  bg-scheme-gradient "
             data-color-scheme="primary" x-data="ThemeSection_filterable('template--16717967065309__product-grid')">
        <div class="section-content relative z-10 px-section max-w-site mx-auto py-section-vertical-spacing">
            <div class="">
                <div class="">
                    <h1 class="text-center font-heading  heading-feature heading-style full_shadow">Seltzers
                    </h1>
                    <div class="mt-5 rte text-rte max-w-xl mx-auto text-center">
                        Non-alcoholic and easy on the stomach. With our seltzers, you can have as many as you
                        like without feeling guilty about it.
                    </div>
                </div>

            </div>
        </div>
        <div class="section-content relative z-10 px-section w-full max-w-site mx-auto pt-half-section-vertical-spacing  pb-section-vertical-spacing overflow-hidden"
             id="facets-filterable">
            <div class="py-4" id="facets-results">
                <ul class="grid gap-theme grid-cols-1 lg:grid-cols-4">
                    @foreach($products as $index => $product)
                    <li class="">
                        <div class="product-tile relative lg:-translate-y-4  " x-data="{ hover: false }"
                             @mouseleave="hover = false" @mouseover="hover = true" @focusin="hover = true"
                             @focusout="hover = false">
                            <div x-data="" class="">
                                <div class="relative pb-media-shadow">
                                    <div class="media-template--16717967065309__product-grid-29529092751581-0">
                                        <div class="media-shape-container relative z-10">
                                            <svg
                                                class="media-svg relative" viewBox="0 0 200 200"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <foreignObject class="aspect-ratio-supported"
                                                               -webkit-clip-path="url(#clip-template--16717967065309__product-grid)"
                                                               clip-path="url(#clip-template--16717967065309__product-grid)"
                                                               width="100%" height="100%">
                                                    <div class="aspect-w-1 aspect-h-1 w-full h-full">
                                                        <img src="{{ explode(',', $product->images)[0] }}"
                                                             alt="Watermelon"
                                                             srcset="{{ explode(',', $product->images)[0] }}"
                                                             width="100%" height="100%" loading="lazy"
                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card"
                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                    </div>
                                                </foreignObject>
                                                <image class="aspect-ratio-not-supported"
                                                       -webkit-clip-path="url(#clip-template--16717967065309__product-grid)"
                                                       clip-path="url(#clip-template--16717967065309__product-grid)"
                                                       preserveAspectRatio="xMidYMid slice" x="0" y="0"
                                                       href="//cdn.shopify.com/s/files/1/0640/0213/0141/products/Can2.jpg?v=1650339716&width=1000"
                                                       height="100%" width="100%" />
                                                <use style="fill: none;"
                                                     href="#outline-template--16717967065309__product-grid" />
                                            </svg>

                                            <svg x-cloak x-show="hover" x-transition.opacity
                                                 class="media-svg absolute top-0 left-0 bg-section-background"
                                                 viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <foreignObject class="aspect-ratio-supported"
                                                               -webkit-clip-path="url(#clip-template--16717967065309__product-grid)"
                                                               clip-path="url(#clip-template--16717967065309__product-grid)"
                                                               width="100%" height="100%">
                                                    <div class=" aspect-w-1 aspect-h-1 w-full h-full">
                                                        <img src="{{ count(explode(',', $product->images)) == 1 ? $product->images : explode(',', $product->images)[1] }}"
                                                             alt="Watermelon"
                                                             srcset="{{ count(explode(',', $product->images)) == 1 ? $product->images : explode(',', $product->images)[1] }}"
                                                             width="100%" height="100%" loading="lazy"
                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card object-cover"
                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                    </div>
                                                </foreignObject>
                                                <image class="aspect-ratio-not-supported"
                                                       -webkit-clip-path="url(#clip-template--16717967065309__product-grid)"
                                                       clip-path="url(#clip-template--16717967065309__product-grid)"
                                                       preserveAspectRatio="xMidYMid slice" x="0" y="0"
                                                       href="//cdn.shopify.com/s/files/1/0640/0213/0141/products/TiltedCan2.jpg?v=1650339716&width=1000"
                                                       height="100%" width="100%" />
                                                <use style="fill: none;"
                                                     href="#outline-template--16717967065309__product-grid" />
                                            </svg>

                                            <svg class="media-svg media-drop-shadow media-shape-drop-shadow relative w-full h-full"
                                                 viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use class="media-drop-shadow-path "
                                                     href="#outline-template--16717967065309__product-grid)" />
                                                <foreignObject
                                                    clip-path="url(#clip-template--16717967065309__product-grid)"
                                                    width="100%" height="100%">
                                                    <div
                                                        class="aspect-w-1 aspect-h-1 w-full h-full bg-scheme-gradient">
                                                        &nbsp;</div>
                                                </foreignObject>
                                            </svg>
                                            <svg
                                                class="media-svg media-drop-shadow-stroke relative w-full h-full"
                                                viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use class="media-drop-shadow-stroke-path"
                                                     href="#outline-template--16717967065309__product-grid" />
                                            </svg>
                                        </div>
                                    </div>
                                    <style>
                                        .media-template--16717967065309__product-grid-29529092751581-0) {
                                            transform: rotate(deg);
                                        }
                                    </style>
                                </div>
                                <div class="product-tile mt-5 text-center break-words">
                                    <a href="{{ route('public.product.detail', encrypt($product->id)) }}"
                                       class="absolute top-0 left-0 w-full h-full z-10 block">
                                        <span class="visually-hidden">{{ $product->name }}</span>
                                    </a>
                                    <h3 class="font-body text-base">{{ $product->name }}</h3>
                                    <span class="inline-block mt-1.5">
                                        @if($product->discount)
                                            ₹{{ $product->price - $product->discount }} &nbsp; <del>₹{{ $product->price }}</del>
                                        @else
                                            ₹{{ $product->price }}
                                        @endif
                                    </span>

                                </div>
                                <div>
                                    <div class="mt-2.5 relative z-20 max-w-xs mx-auto">
                                        <div class="relative z-10 text-center  pb-button-shadow">
                                            <button class="push-btn theme-button " type="submit">
                                                            <span class="push-btn-surface ">
                                                                Add to Cart
                                                            </span>
                                                <span class="visually-hidden">, Watermelon</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</div>
@stop
