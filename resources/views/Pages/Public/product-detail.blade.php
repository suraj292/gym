
@extends('layouts.public.content')
@section('content')
<div id="shopify-section-template--16717967098077__main" class="shopify-section">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script
        src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/vendor-product.bundle.min.js?v=15873297638032180311683310458"
        type="module"></script>
    <script
        src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/product.js?v=15012432872198291221683310459"
        type="module"></script>


    <style>
        :root {
            --max-possible-width: min(var(--max-site-width), 100vw);
            --column-width: calc((var(--max-possible-width) - (var(--section-x-padding) * 2) - var(--grid-gap)*11) / 12);
            --media-width: calc((var(--column-width) * 6) + (var(--grid-gap) * 5));
            --media-column-width: calc((var(--media-width) - (calc(var(--grid-gap)/2)*11)) / 12);
            --feature-media-width: calc((var(--media-width) - (var(--media-column-width)*2) - (calc(var(--grid-gap)/2)*2)));
            --largest-media-aspect-ratio: 1.0;
            --thumbnails-height: calc(var(--feature-media-width) / var(--largest-media-aspect-ratio));
        }
    </style>


    <section class="text-scheme-text bg-scheme-background relative overflow-hidden bg-scheme-gradient"
             data-color-scheme="primary" x-data="
    ThemeSection_Product({
      product: {&quot;id&quot;:7657097756893,&quot;title&quot;:&quot;Raspberry&quot;,&quot;handle&quot;:&quot;raspberry-spritz&quot;,&quot;description&quot;:&quot;\u003cp data-mce-fragment=\&quot;1\&quot;\u003e\u003cspan style=\&quot;font-weight: 400;\&quot; data-mce-fragment=\&quot;1\&quot; data-mce-style=\&quot;font-weight: 400;\&quot;\u003eA no fuss fizzy drink for the ones who love simplicity.  It’s lightly carbonated, tarty and a bit sweet, with a delightful, hint of rosiness - just like freshly picked raspberries.  It’s a cold crisp refreshment for any season of the year.\u003c\/span\u003e\u003c\/p\u003e\n\u003cp data-mce-fragment=\&quot;1\&quot;\u003e\u003cspan style=\&quot;font-weight: 400;\&quot; data-mce-fragment=\&quot;1\&quot; data-mce-style=\&quot;font-weight: 400;\&quot;\u003eThis is simply refreshing and delectable. Perfect pick-me-up drink for a sluggy afternoon and for parties with friends. \u003c\/span\u003e\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2022-04-16T13:17:16+10:00&quot;,&quot;created_at&quot;:&quot;2022-04-15T15:42:16+10:00&quot;,&quot;vendor&quot;:&quot;Shapes Theme Soda&quot;,&quot;type&quot;:&quot;&quot;,&quot;tags&quot;:[],&quot;price&quot;:2400,&quot;price_min&quot;:2400,&quot;price_max&quot;:8000,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:null,&quot;compare_at_price_min&quot;:0,&quot;compare_at_price_max&quot;:0,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:42664443052253,&quot;title&quot;:&quot;6 pack&quot;,&quot;option1&quot;:&quot;6 pack&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:36965316034781,&quot;product_id&quot;:7657097756893,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2022-04-19T12:51:33+10:00&quot;,&quot;updated_at&quot;:&quot;2022-04-19T13:41:37+10:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:2000,&quot;height&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;variant_ids&quot;:[42664443052253,42664443085021]},&quot;available&quot;:true,&quot;name&quot;:&quot;Raspberry - 6 pack&quot;,&quot;public_title&quot;:&quot;6 pack&quot;,&quot;options&quot;:[&quot;6 pack&quot;],&quot;price&quot;:2400,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:29529089474781,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;}}},{&quot;id&quot;:42664443085021,&quot;title&quot;:&quot;24 pack&quot;,&quot;option1&quot;:&quot;24 pack&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:36965316034781,&quot;product_id&quot;:7657097756893,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2022-04-19T12:51:33+10:00&quot;,&quot;updated_at&quot;:&quot;2022-04-19T13:41:37+10:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:2000,&quot;height&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;variant_ids&quot;:[42664443052253,42664443085021]},&quot;available&quot;:true,&quot;name&quot;:&quot;Raspberry - 24 pack&quot;,&quot;public_title&quot;:&quot;24 pack&quot;,&quot;options&quot;:[&quot;24 pack&quot;],&quot;price&quot;:8000,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:29529089474781,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;}}}],&quot;images&quot;:[&quot;\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TiltedCan8.jpg?v=1650339697&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TVA_ShapesTheme_NonAlcho_Raspberry_Condensation.jpg?v=1650336694&quot;],&quot;featured_image&quot;:&quot;\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;options&quot;:[&quot;Size&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:29529089474781,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;width&quot;:2000},{&quot;alt&quot;:null,&quot;id&quot;:29529089507549,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TiltedCan8.jpg?v=1650339697&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TiltedCan8.jpg?v=1650339697&quot;,&quot;width&quot;:2000},{&quot;alt&quot;:null,&quot;id&quot;:29529089540317,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TVA_ShapesTheme_NonAlcho_Raspberry_Condensation.jpg?v=1650336694&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/TVA_ShapesTheme_NonAlcho_Raspberry_Condensation.jpg?v=1650336694&quot;,&quot;width&quot;:2000}],&quot;content&quot;:&quot;\u003cp data-mce-fragment=\&quot;1\&quot;\u003e\u003cspan style=\&quot;font-weight: 400;\&quot; data-mce-fragment=\&quot;1\&quot; data-mce-style=\&quot;font-weight: 400;\&quot;\u003eA no fuss fizzy drink for the ones who love simplicity.  It’s lightly carbonated, tarty and a bit sweet, with a delightful, hint of rosiness - just like freshly picked raspberries.  It’s a cold crisp refreshment for any season of the year.\u003c\/span\u003e\u003c\/p\u003e\n\u003cp data-mce-fragment=\&quot;1\&quot;\u003e\u003cspan style=\&quot;font-weight: 400;\&quot; data-mce-fragment=\&quot;1\&quot; data-mce-style=\&quot;font-weight: 400;\&quot;\u003eThis is simply refreshing and delectable. Perfect pick-me-up drink for a sluggy afternoon and for parties with friends. \u003c\/span\u003e\u003c\/p\u003e&quot;},
      variant: {&quot;id&quot;:42664443052253,&quot;title&quot;:&quot;6 pack&quot;,&quot;option1&quot;:&quot;6 pack&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:36965316034781,&quot;product_id&quot;:7657097756893,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2022-04-19T12:51:33+10:00&quot;,&quot;updated_at&quot;:&quot;2022-04-19T13:41:37+10:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:2000,&quot;height&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;,&quot;variant_ids&quot;:[42664443052253,42664443085021]},&quot;available&quot;:true,&quot;name&quot;:&quot;Raspberry - 6 pack&quot;,&quot;public_title&quot;:&quot;6 pack&quot;,&quot;options&quot;:[&quot;6 pack&quot;],&quot;price&quot;:2400,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:29529089474781,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:2000,&quot;width&quot;:2000,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0640\/0213\/0141\/products\/Can8.jpg?v=1650339697&quot;}}},
      featuredMediaID: 29529089474781,
      template: &quot;product&quot;,
      thumbnailsPosition: &quot;under&quot;,
      showThumbnailsOnMobile: false
    })" data-product-section>

        <div class="section-content py-section-vertical-spacing lg:px-section max-w-site mx-auto relative z-10">


            <h2 class="text-center font-heading  heading-standard heading-style break-words full_shadow"></h2>


            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                    <div class="product-media col-span-full lg:col-span-6">




                        <div class="col-span-6">
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 relative">


                                <div class="col-span-full hidden lg:block">

                                    <svg width="0" height="0" viewBox="0 0 200 200" role="presentation"
                                         aria-hidden="true" focusable="false">
                                        <defs>
                                            <clipPath id="clip-thumbnails-template--16717967098077__main"
                                                      clipPathUnits="objectBoundingBox">
                                                <path clip-rule="evenodd" transform="scale(0.005,0.005)"
                                                      d="M100.5 5L22.3194 42.6645L3 127.261L57.1086 195.105H143.891L198 127.261L178.681 42.6645L100.5 5Z"
                                                      fill="black" />
                                            </clipPath>
                                            <path id="outline-thumbnails-template--16717967098077__main"
                                                  vector-effect="non-scaling-stroke"
                                                  d="M100.5 5L22.3194 42.6645L3 127.261L57.1086 195.105H143.891L198 127.261L178.681 42.6645L100.5 5Z" />
                                        </defs>
                                    </svg>
                                    <ul class="w-full grid grid-cols-4  gap-2.5">
                                        <!-- product Small Image -->
                                        @if($images[0])
                                        <li class="product-thumbnail-list-item product-thumbnail-list-item--active relative  pb-media-shadow-half pr-media-shadow-half"
                                            data-media-id="29529089474781"
                                            :class="{ 'product-thumbnail-list-item--active' : 29529089474781 === current_media_id }"
                                            x-ref="firstThumbnail" data-first-thumbnail>
                                            <a role="button" class="block media-thumbnail"
                                               href="{{ asset($images[0]) }}"
                                               @click.prevent="current_media_id = 29529089474781"
                                               @keydown.space="current_media_id = 29529089474781"
                                               @keydown.enter="current_media_id = 29529089474781">
                                                <div class="media--small relative">

                                                    <div
                                                        class="media-template--16717967098077__main-29529089474781">
                                                        <div class="media-shape-container relative z-10">
                                                            <svg class="media-svg relative"
                                                                 viewBox="0 0 200 200"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <foreignObject class="aspect-ratio-supported"
                                                                               -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full">
                                                                        <img src="{{ asset($images[0]) }}"
                                                                             alt="Raspberry"
                                                                             srcset="{{ asset($images[0]) }}"
                                                                             width="2000" height="2000"
                                                                             loading="lazy"
                                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card"
                                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                                    </div>
                                                                </foreignObject>

                                                                <g class="aspect-ratio-not-supported">
                                                                    <image class="lg:hidden"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="//cdn.shopify.com/s/files/1/0640/0213/0141/products/Can8.jpg?v=1650339697&width=1000"
                                                                           height="100%" width="100%" />

                                                                    <image class="hidden lg:block"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="//cdn.shopify.com/s/files/1/0640/0213/0141/products/Can8.jpg?v=1650339697&width=1500"
                                                                           height="100%" width="100%" />
                                                                </g>
                                                                <use style="fill: none;"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow media-shape-drop-shadow relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                role="presentation" aria-hidden="true"
                                                                focusable="false">
                                                                <use class="media-drop-shadow-path "
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                                <foreignObject
                                                                    clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                    width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full bg-scheme-gradient">
                                                                    </div>
                                                                </foreignObject>
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow-stroke relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <use class="media-drop-shadow-stroke-path"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg></div>
                                                    </div>
                                                    <style>
                                                        .media-template--16717967098077__main-29529089474781 {
                                                            transform: rotate(deg);
                                                        }
                                                    </style>
                                                </div>
                                            </a>
                                        </li>
                                        @endif

                                        @if($images[1])
                                        <li class="product-thumbnail-list-item  relative  pb-media-shadow-half pr-media-shadow-half"
                                            data-media-id="29529089507549"
                                            :class="{ 'product-thumbnail-list-item--active' : 29529089507549 === current_media_id }">
                                            <a role="button" class="block media-thumbnail"
                                               href="{{ asset($images[1]) }}"
                                               @click.prevent="current_media_id = 29529089507549"
                                               @keydown.space="current_media_id = 29529089507549"
                                               @keydown.enter="current_media_id = 29529089507549">
                                                <div class="media--small relative">

                                                    <div
                                                        class="media-template--16717967098077__main-29529089507549">
                                                        <div class="media-shape-container relative z-10">
                                                            <svg class="media-svg relative"
                                                                 viewBox="0 0 200 200"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>Raspberry</title>
                                                                <foreignObject class="aspect-ratio-supported"
                                                                               -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full">
                                                                        <img src="{{ asset($images[1]) }}"
                                                                             alt="Raspberry"
                                                                             srcset="{{ asset($images[1]) }}"
                                                                             width="2000" height="2000"
                                                                             loading="lazy"
                                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card"
                                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                                    </div>
                                                                </foreignObject>

                                                                <g class="aspect-ratio-not-supported">
                                                                    <image class="lg:hidden"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[1]) }}"
                                                                           height="100%" width="100%" />

                                                                    <image class="hidden lg:block"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[1]) }}"
                                                                           height="100%" width="100%" />
                                                                </g>
                                                                <use style="fill: none;"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow media-shape-drop-shadow relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                role="presentation" aria-hidden="true"
                                                                focusable="false">
                                                                <use class="media-drop-shadow-path "
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                                <foreignObject
                                                                    clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                    width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full bg-scheme-gradient">
                                                                    </div>
                                                                </foreignObject>
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow-stroke relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <use class="media-drop-shadow-stroke-path"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg></div>
                                                    </div>
                                                    <style>
                                                        .media-template--16717967098077__main-29529089507549 {
                                                            transform: rotate(deg);
                                                        }
                                                    </style>
                                                </div>
                                            </a>
                                        </li>
                                        @endif

                                        @if($images[2])
                                        <li class="product-thumbnail-list-item  relative  pb-media-shadow-half pr-media-shadow-half"
                                            data-media-id="29529089540317"
                                            :class="{ 'product-thumbnail-list-item--active' : 29529089540317 === current_media_id }"
                                            x-ref="lastThumbnail" data-last-thumbnail>
                                            <a role="button" class="block media-thumbnail"
                                               href="{{ asset($images[2]) }}"
                                               @click.prevent="current_media_id = 29529089540317"
                                               @keydown.space="current_media_id = 29529089540317"
                                               @keydown.enter="current_media_id = 29529089540317">
                                                <div class="media--small relative">

                                                    <div
                                                        class="media-template--16717967098077__main-29529089540317">
                                                        <div class="media-shape-container relative z-10">
                                                            <svg class="media-svg relative"
                                                                 viewBox="0 0 200 200"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>Raspberry</title>
                                                                <foreignObject class="aspect-ratio-supported"
                                                                               -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full">
                                                                        <img src="{{ asset($images[2]) }}"
                                                                             alt="Raspberry"
                                                                             srcset="{{ asset($images[2]) }}"
                                                                             loading="lazy"
                                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card"
                                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                                    </div>
                                                                </foreignObject>

                                                                <g class="aspect-ratio-not-supported">
                                                                    <image class="lg:hidden"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[2]) }}"
                                                                           height="100%" width="100%" />

                                                                    <image class="hidden lg:block"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[2]) }}"
                                                                           height="100%" width="100%" />
                                                                </g>
                                                                <use style="fill: none;"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow media-shape-drop-shadow relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                role="presentation" aria-hidden="true"
                                                                focusable="false">
                                                                <use class="media-drop-shadow-path "
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                                <foreignObject
                                                                    clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                    width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full bg-scheme-gradient">
                                                                    </div>
                                                                </foreignObject>
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow-stroke relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <use class="media-drop-shadow-stroke-path"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg></div>
                                                    </div>
                                                    <style>
                                                        .media-template--16717967098077__main-29529089540317 {
                                                            transform: rotate(deg);
                                                        }
                                                    </style>
                                                </div>
                                            </a>
                                        </li>
                                        @endif

                                        @if($images[3])
                                        <li class="product-thumbnail-list-item  relative  pb-media-shadow-half pr-media-shadow-half"
                                            data-media-id="29529089507549"
                                            :class="{ 'product-thumbnail-list-item--active' : 29529089507549 === current_media_id }">
                                            <a role="button" class="block media-thumbnail"
                                               href="{{ asset($images[3]) }}"
                                               @click.prevent="current_media_id = 29529089507549"
                                               @keydown.space="current_media_id = 29529089507549"
                                               @keydown.enter="current_media_id = 29529089507549">
                                                <div class="media--small relative">

                                                    <div
                                                        class="media-template--16717967098077__main-29529089507549">
                                                        <div class="media-shape-container relative z-10">
                                                            <svg class="media-svg relative"
                                                                 viewBox="0 0 200 200"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>Raspberry</title>
                                                                <foreignObject class="aspect-ratio-supported"
                                                                               -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                               width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full">
                                                                        <img src="{{ asset($images[3]) }}"
                                                                             alt="Raspberry"
                                                                             srcset="{{ asset($images[3]) }}"
                                                                             width="2000" height="2000"
                                                                             loading="lazy"
                                                                             class="foreign-object-img w-full h-full object-cover bg-scheme-card"
                                                                             onerror="this.style.color=&quot;currentColor&quot;"
                                                                             onload="this.style.color=&quot;currentColor&quot;">
                                                                    </div>
                                                                </foreignObject>

                                                                <g class="aspect-ratio-not-supported">
                                                                    <image class="lg:hidden"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[3]) }}"
                                                                           height="100%" width="100%" />

                                                                    <image class="hidden lg:block"
                                                                           -webkit-clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                           preserveAspectRatio="xMidYMid slice"
                                                                           x="0" y="0"
                                                                           href="{{ asset($images[3]) }}"
                                                                           height="100%" width="100%" />
                                                                </g>
                                                                <use style="fill: none;"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow media-shape-drop-shadow relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                role="presentation" aria-hidden="true"
                                                                focusable="false">
                                                                <use class="media-drop-shadow-path "
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                                <foreignObject
                                                                    clip-path="url(#clip-thumbnails-template--16717967098077__main)"
                                                                    width="100%" height="100%">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 w-full h-full bg-scheme-gradient">
                                                                    </div>
                                                                </foreignObject>
                                                            </svg><svg
                                                                class="media-svg media-drop-shadow-stroke relative w-full h-full"
                                                                viewBox="0 0 200 200"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <use class="media-drop-shadow-stroke-path"
                                                                     href="#outline-thumbnails-template--16717967098077__main" />
                                                            </svg></div>
                                                    </div>
                                                    <style>
                                                        .media-template--16717967098077__main-29529089507549 {
                                                            transform: rotate(deg);
                                                        }
                                                    </style>
                                                </div>
                                            </a>
                                        </li>
                                        @endif

                                    </ul>
                                </div>

                                <div class="row-start-1  col-span-full min-w-[0]">
                                    <div id="slideshow-template--16717967098077__main" class="splide splide--product" data-drag-disabled="" data-first-media="">
                                        <div class="splide__track">
                                            <ul class="feature-media-list w-full splide__list  lg:relative lg:grid" role="list">
                                                <!-- product Large Image -->
                                                @if($images[0])
                                                <li class="max-lg:!block feature-media-item block w-full lg:w-full splide__slide px-section lg:px-0  "
                                                    data-media-id="29529089474781"
                                                    x-transition.opacity.duration.200ms
                                                    x-show="current_media_id === 29529089474781"
                                                    data-product-media-type-image data-product-image-index="0">
                                                    <div>
                                                        <div class="pb-media-shadow"
                                                             data-product-single-media-wrapper="29529089474781">


                                                            <div
                                                                class="media-FeatureMedia-template--16717967098077__main-29529089474781 media-style-container     default">
                                                                <div class=" media-content">
                                                                    <img src="{{ asset(explode(',', $product->images)[0]) }}"
                                                                         alt="Raspberry"
                                                                         srcset="{{ asset(explode(',', $product->images)[0]) }}"
                                                                         width="2000" height="2000"
                                                                         loading="lazy"
                                                                         class="media-style bg-scheme-card"
                                                                         sizes="(min-width: 990px) 50vw, 100vw"
                                                                         onerror="this.style.color=&quot;currentColor&quot;"
                                                                         onload="this.style.color=&quot;currentColor&quot;">
                                                                </div>
                                                                <div
                                                                    class="media-drop-shadow-border w-full h-full">
                                                                </div>
                                                            </div>
                                                            <style>
                                                                .media-FeatureMedia-template--16717967098077__main-29529089474781 {
                                                                    transform: rotate(deg);
                                                                }
                                                            </style>

                                                        </div>


                                                    </div>
                                                </li>
                                                @endif

                                                @if($images[1])
                                                <li class="max-lg:!block feature-media-item block w-full lg:w-full splide__slide px-section lg:px-0 "
                                                    data-media-id="29529089507549"
                                                    x-transition.opacity.duration.200ms
                                                    x-show="current_media_id === 29529089507549"
                                                    data-product-media-type-image data-product-image-index="1">
                                                    <div>
                                                        <div class="pb-media-shadow"
                                                             data-product-single-media-wrapper="29529089507549">


                                                            <div
                                                                class="media-FeatureMedia-template--16717967098077__main-29529089507549 media-style-container     default">
                                                                <div class=" media-content">
                                                                    <img src="{{ asset($images[1]) }}"
                                                                         alt="Raspberry"
                                                                         srcset="{{ asset($images[1]) }}"
                                                                         width="2000" height="2000"
                                                                         loading="lazy"
                                                                         class="media-style bg-scheme-card"
                                                                         sizes="(min-width: 990px) 50vw, 100vw"
                                                                         onerror="this.style.color=&quot;currentColor&quot;"
                                                                         onload="this.style.color=&quot;currentColor&quot;">
                                                                </div>
                                                                <div
                                                                    class="media-drop-shadow-border w-full h-full">
                                                                </div>
                                                            </div>
                                                            <style>
                                                                .media-FeatureMedia-template--16717967098077__main-29529089507549 {
                                                                    transform: rotate(deg);
                                                                }
                                                            </style>

                                                        </div>

                                                    </div>
                                                </li>
                                                @endif

                                                @if($images[2])
                                                <li class="max-lg:!block feature-media-item block w-full lg:w-full splide__slide px-section lg:px-0 "
                                                    data-media-id="29529089540317"
                                                    x-transition.opacity.duration.200ms
                                                    x-show="current_media_id === 29529089540317"
                                                    data-product-media-type-image data-product-image-index="2">
                                                    <div>
                                                        <div class="pb-media-shadow"
                                                             data-product-single-media-wrapper="29529089540317">


                                                            <div
                                                                class="media-FeatureMedia-template--16717967098077__main-29529089540317 media-style-container     default">
                                                                <div class=" media-content">
                                                                    <img src="{{ asset($images[2]) }}"
                                                                         alt="Raspberry"
                                                                         srcset="{{ asset($images[2]) }}"
                                                                         loading="lazy"
                                                                         class="media-style bg-scheme-card"
                                                                         sizes="(min-width: 990px) 50vw, 100vw"
                                                                         onerror="this.style.color=&quot;currentColor&quot;"
                                                                         onload="this.style.color=&quot;currentColor&quot;">
                                                                </div>
                                                                <div
                                                                    class="media-drop-shadow-border w-full h-full">
                                                                </div>
                                                            </div>
                                                            <style>
                                                                .media-FeatureMedia-template--16717967098077__main-29529089540317 {
                                                                    transform: rotate(deg);
                                                                }
                                                            </style>

                                                        </div>

                                                    </div>
                                                </li>
                                                @endif

                                                @if($images[3])
                                                <li class="max-lg:!block feature-media-item block w-full lg:w-full splide__slide px-section lg:px-0 "
                                                    data-media-id="29529089540317"
                                                    x-transition.opacity.duration.200ms
                                                    x-show="current_media_id === 29529089540317"
                                                    data-product-media-type-image data-product-image-index="2">
                                                    <div>
                                                        <div class="pb-media-shadow"
                                                             data-product-single-media-wrapper="29529089540317">


                                                            <div
                                                                class="media-FeatureMedia-template--16717967098077__main-29529089540317 media-style-container     default">
                                                                <div class=" media-content">
                                                                    <img src="{{ asset($images[3]) }}"
                                                                         alt="Raspberry"
                                                                         srcset="{{ asset($images[3]) }}"
                                                                         loading="lazy"
                                                                         class="media-style bg-scheme-card"
                                                                         sizes="(min-width: 990px) 50vw, 100vw"
                                                                         onerror="this.style.color=&quot;currentColor&quot;"
                                                                         onload="this.style.color=&quot;currentColor&quot;">
                                                                </div>
                                                                <div
                                                                    class="media-drop-shadow-border w-full h-full">
                                                                </div>
                                                            </div>
                                                            <style>
                                                                .media-FeatureMedia-template--16717967098077__main-29529089540317 {
                                                                    transform: rotate(deg);
                                                                }
                                                            </style>

                                                        </div>

                                                    </div>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>

                                        <div
                                            class="splide__arrows px-section flex items-center justify-end gap-2 mt-4 lg:hidden">
                                            <div class="controls relative z-10 ml-auto pb-button-shadow">
                                                <div class="flex gap-2">
                                                    <button class="splide__arrow splide__arrow--prev push-btn">
                                                        <span class="sr-only">Previous slide</span>
                                                        <span class="push-btn-surface align-bottom p-2">
                                                                    <span class="block w-5 h-5"><svg class="theme-icon"
                                                                                                     viewBox="0 0 48 48" fill="none"
                                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M2 24H46.972" stroke="black"
                                                                                  stroke-width="2" stroke-linecap="round"
                                                                                  stroke-linejoin="round" />
                                                                            <path
                                                                                d="M25.972 46L2.686 25.502C2.47319 25.3143 2.30275 25.0835 2.186 24.8249C2.06925 24.5663 2.00888 24.2858 2.00888 24.002C2.00888 23.7182 2.06925 23.4377 2.186 23.1791C2.30275 22.9205 2.47319 22.6897 2.686 22.502L25.972 2"
                                                                                stroke="black" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                    </button><button
                                                        class="splide__arrow splide__arrow--next push-btn">
                                                        <span class="sr-only">Next slide</span>
                                                        <span class="push-btn-surface align-bottom p-2">
                                                                    <span class="block w-5 h-5"><svg class="theme-icon"
                                                                                                     viewBox="0 0 48 48" fill="none"
                                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M46.972 24H2" stroke="black"
                                                                                  stroke-width="2" stroke-linecap="round"
                                                                                  stroke-linejoin="round" />
                                                                            <path
                                                                                d="M23 46L46.286 25.502C46.4988 25.3143 46.6693 25.0835 46.786 24.8249C46.9027 24.5663 46.9631 24.2858 46.9631 24.002C46.9631 23.7182 46.9027 23.4377 46.786 23.1791C46.6693 22.9205 46.4988 22.6897 46.286 22.502L23 2"
                                                                                stroke="black" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>

                                                                    </span>
                                                                </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <script
                                            src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/modules-slideshow.bundle.min.js?v=155176613288953362021683310458"
                                            type="module"></script>

                                        <link
                                            href="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/modules-slideshow.bundle.css?v=16922694442040270371683310458"
                                            rel="stylesheet" type="text/css" media="all" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="product-content col-span-full lg:col-span-6 px-section lg:px-0 ">
                        <div class="product-block-container w-full max-w-full xl:grid xl:grid-cols-12">
                            <div class="xl:col-span-10 xl:col-start-2 relative">



                                <div class="product-block product-block-title break-words">


                                    <h1 class="font-heading heading-feature text-left">{{ $product->name }}</h1>
                                </div>


                                <div class="product-block product-block-quantity-selector"
                                     x-data="ThemeComponent_Quantity()">
                                    <div class="lg:flex lg:items-center lg:justify-start">
                                        <label class="sr-only  lg:w-1/4 xl:w-1/5 lg:shrink-0 pr-2.5"
                                               for="Quantity-template--16717967098077__main">Quantity</label>
                                        <div class="mt-2.5 lg:mt-0 lg:flex-1">
                                            <div class="flex flex-nowrap justify-start items-center">
                                                <button class="push-btn" aria-label="&minus;"
                                                        @click.prevent.stop="decreaseQuantity">
                                                    <div
                                                        class="push-btn-surface push-btn-surface--secondary align-bottom p-2">
                                                        <div class="w-4 h-4 m-auto"><svg class="theme-icon"
                                                                                         viewBox="0 0 48 48" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                <path vector-effect="non-scaling-stroke"
                                                                      d="M46 24H2" stroke="currentColor"
                                                                      stroke-width="2" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                            </svg></div>
                                                    </div>
                                                </button>
                                                <input type="number"
                                                       class="input--no-border block appearance-none text-center border-0 bg-transparent text-base max-w-[3rem] p-2 text-scheme-text"
                                                       form="product-form-template--16717967098077__main"
                                                       id="Quantity-template--16717967098077__main" name="quantity"
                                                       x-model="quantity" x-ref="quantityInput">
                                                <button class="push-btn" aria-label="&plus;"
                                                        @click.prevent.stop="increaseQuantity">
                                                    <div
                                                        class="push-btn-surface push-btn-surface--secondary align-bottom p-2">
                                                        <div class="w-4 h-4 m-auto"><svg class="theme-icon"
                                                                                         viewBox="0 0 48 48" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                <path vector-effect="non-scaling-stroke"
                                                                      d="M24 2V46" stroke="currentColor"
                                                                      stroke-width="2" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                                <path vector-effect="non-scaling-stroke"
                                                                      d="M46 24H2" stroke="currentColor"
                                                                      stroke-width="2" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <script
                                    src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/modules-quantity.bundle.min.js?v=12416649059819113581683310458"
                                    type="module"></script>


                                <div class="product-block product-block-buy-buttons">

                                    <div
                                          id="product-form-template--16717967098077__main" accept-charset="UTF-8"
                                          class="shopify-product-form" enctype="multipart/form-data"
                                          data-product-form="" data-product-handle="raspberry-spritz"
                                          data-enable-history-state="true" x-ref="productForm"><input
                                            type="hidden" name="form_type" value="product" /><input
                                            type="hidden" name="utf8" value="✓" />
                                        <div class="mb-2.5">

                                        </div>

                                        <div class="">
                                            <div class="w-full">
                                                <livewire:add-to-cart-button :product="$product" />
                                            </div>
                                        </div>
                                    </div>


                                    <link rel="stylesheet"
                                          href="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/payment-terms.css?v=106106266026123387911683310459">
                                </div>






                                <div class="product-block product-block-description w-full max-w-full">
                                    <div class="rte text-theme-basic text-left">
                                        <p data-mce-fragment="1">
                                            <span style="font-weight: 400;" data-mce-fragment="1" data-mce-style="font-weight: 400;">
                                                {{ $product->description }}
                                            </span>
                                        </p>
                                    </div>
                                </div>





                                <div class="product-block product-block-icon-row ">
                                    <ul class="feature-icon-list pb-2 flex gap-4">
                                        <li class="text-center">
                                                    <span class="inline-block mb-2 w-8 h-8">
                                                        <svg class="theme-icon" width="100%" height="100%"
                                                             viewBox="0 0 48 48" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24 47C36.7025 47 47 36.7025 47 24C47 11.2975 36.7025 1 24 1C11.2975 1 1 11.2975 1 24C1 36.7025 11.2975 47 24 47Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 40L17 31" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M40 8L31 17" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M14.9777 11.7655L20.8176 17.6053C21.2056 18.1384 21.7303 18.5569 22.3363 18.8166C22.9424 19.0763 23.6073 19.1677 24.2609 19.081C25.3274 18.983 26.4026 19.1072 27.4186 19.4459C28.4346 19.7846 29.3693 20.3303 30.1637 21.0486L39.0179 29.9028C39.2788 30.1637 39.4254 30.5176 39.4254 30.8866C39.4254 31.2556 39.2788 31.6095 39.0179 31.8704L32.1313 38.757C31.8704 39.0179 31.5165 39.1645 31.1475 39.1645C30.7785 39.1645 30.4246 39.0179 30.1637 38.757L21.3095 29.9028C20.5912 29.1085 20.0454 28.1737 19.7068 27.1577C19.3681 26.1417 19.2438 25.0665 19.3419 24C19.4285 23.3464 19.3372 22.6815 19.0775 22.0755C18.8177 21.4694 18.3993 20.9447 17.8662 20.5567L12.0263 14.7169"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M22.2933 30.8866L31.1475 22.0324L36.0665 26.9514L27.2123 35.8056L22.2933 30.8866Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M17.3743 14.162L14.4229 17.1134L11.9634 14.6539C11.8329 14.5234 11.7596 14.3465 11.7596 14.162C11.7596 13.9775 11.8329 13.8006 11.9634 13.6701L13.931 11.7025C14.0614 11.572 14.2384 11.4987 14.4229 11.4987C14.6074 11.4987 14.7843 11.572 14.9148 11.7025L17.3743 14.162Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" /></svg>
                                                    </span>
                                            <span class="block text-sm">Alcohol free</span>
                                        </li>
                                        <li class="text-center">
                                                    <span class="inline-block mb-2 w-8 h-8">
                                                        <svg class="theme-icon" width="100%" height="100%"
                                                             viewBox="0 0 48 48" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24 47C36.7025 47 47 36.7025 47 24C47 11.2975 36.7025 1 24 1C11.2975 1 1 11.2975 1 24C1 36.7025 11.2975 47 24 47Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 40L14 34" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M40 8L34 14" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M13 30.4615V17.5385L24.0769 23.0769V36L13 30.4615Z"
                                                                  stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M13 17.5385L24.0769 12L35.1538 17.5385"
                                                                  stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M35.1538 30.4615V17.5385L24.0769 23.0769V36L35.1538 30.4615Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M37.4711 34.4978C37.3336 34.4978 37.2222 34.3864 37.2222 34.2489C37.2222 34.1114 37.3336 34 37.4711 34"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" />
                                                            <path
                                                                d="M37.4711 34.4978C37.6086 34.4978 37.72 34.3864 37.72 34.2489C37.72 34.1114 37.6086 34 37.4711 34"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" />
                                                            <path
                                                                d="M36.2267 39.4756C36.0892 39.4756 35.9778 39.3642 35.9778 39.2267C35.9778 39.0892 36.0892 38.9778 36.2267 38.9778"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" />
                                                            <path
                                                                d="M36.2267 39.4755C36.3642 39.4755 36.4756 39.3642 36.4756 39.2267C36.4756 39.0891 36.3642 38.9778 36.2267 38.9778"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" />
                                                            <path
                                                                d="M31.2489 36.9867C31.1114 36.9867 31 36.8753 31 36.7378C31 36.6003 31.1114 36.4889 31.2489 36.4889"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" />
                                                            <path
                                                                d="M31.2489 36.9867C31.3864 36.9867 31.4978 36.8753 31.4978 36.7378C31.4978 36.6003 31.3864 36.4889 31.2489 36.4889"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" /></svg>
                                                    </span>
                                            <span class="block text-sm">Low sugar</span>
                                        </li>
                                        <li class="text-center">
                                                    <span class="inline-block mb-2 w-8 h-8">
                                                        <svg class="theme-icon" width="100%" height="100%"
                                                             viewBox="0 0 48 48" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24 46.5C36.4264 46.5 46.5 36.4264 46.5 24C46.5 11.5736 36.4264 1.5 24 1.5C11.5736 1.5 1.5 11.5736 1.5 24C1.5 36.4264 11.5736 46.5 24 46.5Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M29.2998 23.7165C27.1886 25.1265 26.0993 27.7056 29.2998 29.8536C31.055 34.2417 34.3185 33.0618 36.2501 31.0258C37.99 29.1847 38.9827 24.4008 38.1189 21.1956C38.0886 21.0798 38.0317 20.9726 37.9525 20.8826C37.8734 20.7927 37.7743 20.7226 37.6632 20.6779C37.5521 20.6331 37.4321 20.615 37.3127 20.625C37.1933 20.635 37.078 20.6728 36.9758 20.7354C34.208 22.4538 31.7056 22.1131 29.2998 23.7165Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M23.1949 17.5256C25.4671 20.1999 26.6685 23.7165 21.2509 26.0808C18.773 31.6135 15.0017 29.5652 12.4932 26.6086C10.1611 23.8607 9.16837 16.826 10.8162 12.4947C10.8578 12.3851 10.924 12.2865 11.0097 12.2065C11.0953 12.1265 11.1982 12.0672 11.3103 12.0331C11.4224 11.9991 11.5409 11.9911 11.6566 12.01C11.7723 12.0288 11.8821 12.0739 11.9777 12.1418C15.907 14.9296 20.5267 14.3818 23.1949 17.5256Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M33.6863 26.3493C28.4237 28.9806 25.7909 36 25.7909 36C23.9388 29.0149 20.1251 22.7062 14.8007 17.8202"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" /></svg>
                                                    </span>
                                            <span class="block text-sm">Organic</span>
                                        </li>
                                        <li class="text-center">
                                                    <span class="inline-block mb-2 w-8 h-8">
                                                        <svg class="theme-icon" width="100%" height="100%"
                                                             viewBox="0 0 48 48" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M47 24C47 11.2974 36.7025 0.999998 24 0.999999C11.2974 1 0.999998 11.2975 0.999999 24C1 36.7025 11.2975 47 24 47C36.7025 47 47 36.7025 47 24Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M19 40C19 38.8954 18.1046 38 17 38C15.8954 38 15 38.8954 15 40C15 41.1046 15.8954 42 17 42C18.1046 42 19 41.1046 19 40Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M27.0909 26.0455C27.0909 25.4681 26.6228 25 26.0455 25C25.4681 25 25 25.4681 25 26.0455C25 26.6228 25.4681 27.0909 26.0455 27.0909C26.6228 27.0909 27.0909 26.6228 27.0909 26.0455Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M8.09091 19.0455C8.09091 18.4681 7.62284 18 7.04545 18C6.46807 18 6 18.4681 6 19.0455C6 19.6228 6.46807 20.0909 7.04545 20.0909C7.62284 20.0909 8.09091 19.6228 8.09091 19.0455Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M39.0909 12.0455C39.0909 11.4681 38.6228 11 38.0455 11C37.4681 11 37 11.4681 37 12.0455C37 12.6228 37.4681 13.0909 38.0455 13.0909C38.6228 13.0909 39.0909 12.6228 39.0909 12.0455Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M42.0909 24.0455C42.0909 23.4681 41.6228 23 41.0455 23C40.4681 23 40 23.4681 40 24.0455C40 24.6228 40.4681 25.0909 41.0455 25.0909C41.6228 25.0909 42.0909 24.6228 42.0909 24.0455Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M16 11C16 9.89543 15.1046 9 14 9C12.8954 9 12 9.89543 12 11C12 12.1046 12.8954 13 14 13C15.1046 13 16 12.1046 16 11Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M19.2117 18.0219C20.0629 18.1866 20.8385 18.6257 21.4223 19.2735C22.0062 19.9214 22.367 20.7432 22.4509 21.616C22.5347 22.4888 22.3371 23.3658 21.8875 24.1158C21.4379 24.8658 20.7605 25.4486 19.9567 25.7769C18.4381 26.6539 17.2949 28.0696 16.7484 29.75C16.5821 30.8141 16.0048 31.7681 15.1436 32.4019C14.7172 32.7158 14.2339 32.9416 13.7213 33.0665C13.2088 33.1915 12.6769 33.213 12.1562 33.13C11.6355 33.0469 11.1361 32.8609 10.6866 32.5825C10.237 32.3042 9.84608 31.9389 9.5361 31.5076C9.22613 31.0763 9.00318 30.5874 8.87999 30.0688C8.75679 29.5503 8.73577 29.0121 8.81811 28.4852C9.30398 26.2596 10.2916 24.1774 11.7037 22.4012C13.1159 20.6249 14.9145 19.2027 16.9592 18.2456C17.6731 17.9528 18.4554 17.8752 19.2117 18.0219V18.0219Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M22.879 38.7808C22.2276 38.2087 21.7801 37.4379 21.6035 36.5839C21.4268 35.7299 21.5305 34.8384 21.899 34.0427C22.2676 33.2471 22.8811 32.59 23.648 32.1698C24.4149 31.7497 25.2938 31.5889 26.1534 31.7116C27.907 31.7218 29.6088 31.0774 30.9293 29.9033C31.6103 29.0689 32.5904 28.5372 33.6538 28.4251C34.1804 28.3697 34.7116 28.4189 35.217 28.57C35.7225 28.7211 36.1924 28.9712 36.5998 29.3058C37.0073 29.6405 37.3443 30.0533 37.5917 30.5207C37.8391 30.988 37.992 31.5007 38.0416 32.0295C38.0913 32.5583 38.0367 33.0929 37.8811 33.6027C37.7255 34.1124 37.4718 34.5875 37.1346 35.0006C35.591 36.676 33.6869 37.9742 31.5709 38.7938C29.4549 39.6134 27.1842 39.9323 24.9361 39.7256C24.1721 39.6176 23.4577 39.2895 22.879 38.7808V38.7808Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M34.7979 21.6992C34.3053 22.4127 33.5917 22.9466 32.764 23.2212C31.9362 23.4958 31.0387 23.4963 30.2057 23.2226C29.3726 22.949 28.6488 22.4158 28.1424 21.7029C27.6361 20.99 27.3743 20.1357 27.3964 19.2676C27.203 17.5247 26.3654 15.9093 25.0459 14.734C24.1381 14.1544 23.4962 13.2427 23.2615 12.1995C23.1452 11.6829 23.1325 11.1496 23.2239 10.63C23.3153 10.1104 23.5091 9.61468 23.7942 9.17114C24.0794 8.72759 24.4503 8.34492 24.8857 8.04496C25.3212 7.745 25.8127 7.53364 26.3321 7.42293C26.8516 7.31222 27.3889 7.30435 27.9133 7.39974C28.4377 7.49514 28.9389 7.69195 29.3885 7.97893C31.2317 9.31759 32.7421 11.0581 33.8019 13.0647C34.8616 15.0712 35.4419 17.2895 35.4975 19.5464C35.479 20.3178 35.236 21.0654 34.7979 21.6992V21.6992Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-miterlimit="10" /></svg>
                                                    </span>
                                            <span class="block text-sm">Probiotic</span>
                                        </li>
                                        <li class="text-center">
                                                    <span class="inline-block mb-2 w-8 h-8">
                                                        <svg class="theme-icon" width="100%" height="100%"
                                                             viewBox="0 0 48 48" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24 47C36.7025 47 47 36.7025 47 24C47 11.2975 36.7025 1 24 1C11.2975 1 1 11.2975 1 24C1 36.7025 11.2975 47 24 47Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 40L13 35" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M40 8L34 14" stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.8019 26.7925C12.9449 27.4987 13.2935 28.1468 13.8039 28.6553L25.5043 40.3557C25.7326 40.584 26.0422 40.7123 26.3651 40.7123C26.688 40.7123 26.9976 40.584 27.2259 40.3557L40.1383 27.4433C40.3666 27.215 40.4949 26.9053 40.4949 26.5825C40.4949 26.2596 40.3666 25.95 40.1383 25.7217L28.438 14.0213C27.9295 13.5109 27.2813 13.1622 26.5751 13.0193L25.5043 12.8093C26.1892 12.1244 26.574 11.1954 26.574 10.2268C26.574 9.25817 26.1892 8.32923 25.5043 7.64431C24.8194 6.9594 23.8904 6.57462 22.9218 6.57462C21.9532 6.57462 21.0242 6.9594 20.3393 7.64431L7.42693 20.5567C6.74201 21.2416 6.35723 22.1706 6.35723 23.1392C6.35723 24.1078 6.74201 25.0367 7.42693 25.7217C8.11184 26.4066 9.04079 26.7913 10.0094 26.7913C10.978 26.7913 11.907 26.4066 12.5919 25.7217L12.8019 26.7925Z"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M20.5993 29.5954V21.8479" stroke="currentColor"
                                                                  stroke-width="1" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                            <path d="M25.4698 32.078L25.469 19.2956"
                                                                  stroke="currentColor" stroke-width="1"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M30.3404 29.5954V21.8479" stroke="currentColor"
                                                                  stroke-width="1" stroke-linecap="round"
                                                                  stroke-linejoin="round" /></svg>
                                                    </span>
                                            <span class="block text-sm">Low carb</span>
                                        </li>
                                    </ul>
                                </div>






                                <div class="product-block product-block-horizontal-bar-chart">
                                    <div class="flex items-center justify-start comparison-chart items-center">
                                        <h4 class="w-1/5 shrink-0 text-sm">
                                            Sweet
                                        </h4>
                                        <div class="relative flex-1" aria-label="36%">
                                            <div class="relative border-input border-scheme-text bg-scheme-accent-1 h-2 rounded-full"
                                                 style="width: 36%">
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="product-block product-block-horizontal-bar-chart">
                                    <div class="flex items-center justify-start comparison-chart items-center">
                                        <h4 class="w-1/5 shrink-0 text-sm">
                                            Smooth
                                        </h4>
                                        <div class="relative flex-1" aria-label="50%">
                                            <div class="relative border-input border-scheme-text bg-scheme-accent-1 h-2 rounded-full"
                                                 style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="product-block product-block-horizontal-bar-chart">
                                    <div class="flex items-center justify-start comparison-chart items-center">
                                        <h4 class="w-1/5 shrink-0 text-sm">
                                            Dry
                                        </h4>
                                        <div class="relative flex-1" aria-label="80%">
                                            <div class="relative border-input border-scheme-text bg-scheme-accent-1 h-2 rounded-full"
                                                 style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="product-block product-block-horizontal-bar-chart">
                                    <div class="flex items-center justify-start comparison-chart items-center">
                                        <h4 class="w-1/5 shrink-0 text-sm">
                                            Bitter
                                        </h4>
                                        <div class="relative flex-1" aria-label="50%">
                                            <div class="relative border-input border-scheme-text bg-scheme-accent-1 h-2 rounded-full"
                                                 style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>














                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #Shape-a2f7cebd-ff0a-4757-b23d-793b4cde7838 .shape {
                top: 1%;
                left: 8%;
                opacity: 1.0;
                background: rgb(var(--color-scheme-accent-1));
                transform-origin: left top;
                transform: scale(2.2) rotate(58deg) translate(-50%, -50%);
                -webkit-mask-image: url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M142.59 17.1449C160.454 21.755 181.055 26.9414 186.386 39.7633C191.572 52.5852 181.488 73.1866 184.369 95.3728C187.394 117.559 203.386 141.474 199.352 156.313C195.174 171.152 170.971 177.058 150.225 175.329C129.48 173.745 112.336 164.669 92.7429 168.847C73.2939 172.88 51.3959 190.168 39.2943 186.855C27.1928 183.541 24.8877 159.482 21.4301 140.61C17.8285 121.593 12.9302 107.618 7.16759 90.3305C1.40494 73.0426 -5.07803 52.4411 6.15912 46.9666C17.5403 41.348 46.7858 50.8564 64.65 46.3903C82.3701 41.9243 88.8531 23.3397 99.3699 15.9924C110.031 8.78907 124.87 12.6789 142.59 17.1449Z' fill='%23FF0066'/%3E%3C/svg%3E%0A");
                mask-image: url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M142.59 17.1449C160.454 21.755 181.055 26.9414 186.386 39.7633C191.572 52.5852 181.488 73.1866 184.369 95.3728C187.394 117.559 203.386 141.474 199.352 156.313C195.174 171.152 170.971 177.058 150.225 175.329C129.48 173.745 112.336 164.669 92.7429 168.847C73.2939 172.88 51.3959 190.168 39.2943 186.855C27.1928 183.541 24.8877 159.482 21.4301 140.61C17.8285 121.593 12.9302 107.618 7.16759 90.3305C1.40494 73.0426 -5.07803 52.4411 6.15912 46.9666C17.5403 41.348 46.7858 50.8564 64.65 46.3903C82.3701 41.9243 88.8531 23.3397 99.3699 15.9924C110.031 8.78907 124.87 12.6789 142.59 17.1449Z' fill='%23FF0066'/%3E%3C/svg%3E%0A");
            }

            #Shape-a2f7cebd-ff0a-4757-b23d-793b4cde7838 {
                filter: blur(0px);
            }
        </style>
        <div id="Shape-a2f7cebd-ff0a-4757-b23d-793b4cde7838" data-shape data-parallax-container
             data-parallax-speed="-2" data-parallax-id="a2f7cebd-ff0a-4757-b23d-793b4cde7838"
             class="absolute top-0 left-0 right-0 bottom-0 w-full h-full z-0 pointer-events-none"
             data-color-scheme="primary">
            <div data-parallax-element class="w-full h-full relative">
                <div class="shape absolute aspect-w-1 aspect-h-1"></div>
            </div>
        </div>



        <script
            src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/shapes-animations.js?v=145058273761181697531683310458"
            defer></script>

        <link
            href="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/block-background-shape.css?v=93558886757287613251683310458"
            rel="stylesheet" type="text/css" media="all" />
    </section>
    <div id="shape-divider-3704886f-2b74-4d5e-9569-88d1f5d04c31"
         class="shape-divider w-full   pointer-events-none z-20 absolute bottom-0 left-0 w-full">
        <div class="shape-divider-transform-reset">
            <div x-ref="animation-container"
                 class="shape-divider-svg-container flex relative left-0 min-w-full  -mb-shape-divider"
                 style="padding-top: 18.125%;">
                <div
                    class=" z-0 absolute top-0 left-0 right-0 bottom-0 text-scheme-background h-full w-full text-scheme-background">
                    <svg class="z-0 absolute top-0 left-0  right-0 bottom-0 text-scheme-background h-full w-full text-scheme-background  "
                         data-color-scheme="tertiary" width="100%" height="100%" viewBox="0 0 1440.0 261.0"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 5L60 47.7C120 90 240 176 360 213C480 250 600 240 720 202.3C840 165 960 101 1080 95.7C1200 90 1320 144 1380 170.3L1440 197V261H1380C1320 261 1200 261 1080 261C960 261 840 261 720 261C600 261 480 261 360 261C240 261 120 261 60 261H0V5Z"
                            fill="currentColor" />
                        <path class="shape-divider-stroke" vector-effect="non-scaling-stroke"
                              d="M1 5L61 47.7C121 90 241 176 361 213C481 250 601 240 721 202.3C841 165 961 101 1081 95.7C1201 90 1321 144 1381 170.3L1441 197"
                              stroke="black" /></svg>
                </div>
            </div>
        </div>
    </div>

    <style>
        #shape-divider-3704886f-2b74-4d5e-9569-88d1f5d04c31 svg {
            transform: translate3d(0, 0, 0) scaleX(-1) scaleY(1);
        }

        #shape-divider-3704886f-2b74-4d5e-9569-88d1f5d04c31 svg:nth-child(2) {
            transform: translate3d(0, 0, 0) scaleX(-1) scaleY(1) translateX(-100%);
        }

        #shopify-section-template--16717967098077__main>section {
            padding-bottom: 18.125%;
        }
    </style>


    <link
        href="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/block-shape-divider.css?v=98375199063559964071683310458"
        rel="stylesheet" type="text/css" media="all" />
    <script type="application/json" id="ModelJson-template--16717967098077__main">
                []
            </script>

    <script>
        function addToCart(product) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            let data = cart.find(el => el.id == product.id);
            if(cart.length > 0 && data){
                data.quantity++
            }else{
                product.quantity = 1;
                cart.push(product)
            }
            localStorage.setItem('cart', JSON.stringify(cart))
            toastr["success"]("Added to cart successfully")
        }
        $(document).ready(function () {
            // remove @click attribute whare class items-stretch
            $('.items-stretch').removeAttr('@click')

            $('.items-stretch').on('click', function () {
                if ($('.cl-2').css('display') === 'none') {
                    $('.cl-1').css('opacity', '1')
                    $('.cl-2').css('display', 'block')
                }else {
                    $('.cl-1').css('opacity', '0')
                    $('.cl-2').css('display', 'none')
                }
            })

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        })
    </script>


</div>
<div id="shopify-section-template--16717967098077__product-recommendations" class="shopify-section">
    <div class="product-recommendations" x-data x-html="$fetchedSection(
        '/recommendations/products?section_id=template--16717967098077__product-recommendations&limit=3&product_id=7657097756893',
        '.product-recommendations'
      )"></div>
</div>
@stop
