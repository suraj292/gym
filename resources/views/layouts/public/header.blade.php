<a class="skip-link" href="#MainContent">Skip to content</a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--16717967261917__announcement-bar"
     class="shopify-section shopify-section-group-header-group">
    <section
        class="relative bg-scheme-background text-scheme-text  text-center min-h-12 border-b-section border-border "
        data-color-scheme="secondary" id="AnnouncementBar">
        <div class="text-sm text-current text-center py-1 lg:py-2" role="complementary">
            <p class="px-5 lg:px-0">Get Ready For Fitness Journey</p>
        </div>
    </section>
</div>
<div id="shopify-section-sections--16717967261917__header"
     class="shopify-section shopify-section-group-header-group section-site-header relative z-40">


    <script src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/header.js?v=36849506637616900911683310458"
            type="module"></script>

    <script src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/cart-count.js?v=51561485870383068741683310459"
            type="module"></script>

    <header
        class="site-header w-full text-scheme-text absolute top-0 left-0 right-0 z-20 border-b-section bg-transparent border-transparent transition-[background-color,border-color] ease-in-out duration-200" role="banner" data-section-type="header" data-section-id="sections--16717967261917__header" x-data="ThemeSection_header(1)" x-init="mounted()" data-color-scheme="text-white" :class="{ 'header-is-active' : menuIsActive }" >

        <div id="headerBorderWrap" class="headerBorderWrap">
            <div id="headerContainer"
                 class="z-10">
                <div
                    class="py-2 lg:py-0 px-section overflow-hidden">
                    <div class="flex justify-between items-center">

                        <div class="flex flex-grow w-1/3  justify-start items-stretch">


                            <div class="flex items-center z-10">
                                <button
                                    class="font-main normal-case js-enabled inline-block -m-1 p-1 lg:hidden"
                                    type="button"
                                    x-bind:aria-expanded="$store.modals.leftDrawer.contents === 'nav'"
                                    @click="$store.modals.open('nav')"
                                    data-menu-drawer-toggle>

                                    <span class="">Menu</span></button>
                                <noscript>
                                    <div class="no-js-focus-wrapper">
                                        <button
                                            class="inline-block -m-1 p-1 lg:hidden"
                                            type="button"
                                            data-menu-drawer-toggle>
                                            <span class="">Menu</span></button>
                                        <div
                                            class="hidden no-js-focus-container absolute left-0 bottom-0 w-11/12 md:w-7/12 lg:w-5/12 py-section-vertical-spacing px-section transform translate-y-[calc(100%-var(--section-border-thickness))] z-100  max-h-three-quarters-screen-height overflow-hidden overflow-y-auto bg-scheme-accent-1  text-scheme-accent-1-overlay">
                                            <div
                                                class="sidebar-nav "
                                            >
                                                <div class="relative flex items-center justify-between pb-5">
                                                    <h2 class="sr-only" class="" tabindex="-1">
                                                        Main menu
                                                    </h2>
                                                </div>
                                                <ul class="mt-5">


                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 0;">

                                                        <a class="block font-heading py-2.5"
                                                           href="/collections/seltzer">
                                                            Seltzer
                                                        </a>

                                                    </li>


                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 1;">

                                                        <a class="block font-heading py-2.5" href="about.html">
                                                            About
                                                        </a>

                                                    </li>


                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 2;">

                                                        <a class="block font-heading py-2.5" href="blog.html">
                                                            Blog
                                                        </a>

                                                    </li>

                                                </ul>


                                                <div class="mt-5 space-y-5">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </noscript>
                                <div x-data>
                                    <div>

                                        <template data-should-teleport="#left-drawer-slot">
                                            <div
                                                :data-modal-label="$store.modals.leftDrawer.contents === 'nav' ? 'Main menu' : false"
                                                x-show="$store.modals.leftDrawer.contents === 'nav'"
                                                class="sidebar-nav py-5 px-section "
                                            >
                                                <div class="relative flex items-center justify-between pb-5">
                                                    <h2 class="sr-only" class="" tabindex="-1">
                                                        Main menu
                                                    </h2>
                                                    <button @click.prevent="$store.modals.close('nav')"
                                                            class="block top-0">
                                                        <span class="sr-only">Close (esc)</span>
                                                        <span class="inline-block w-5 h-5">
                                                            <svg class="theme-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M46 2L2 46" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                              <path d="M46 46L2 2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <!-- mobile menu -->
                                                <ul class="mt-5">
                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 0;">
                                                        <a class="block font-heading py-2.5"
                                                           href="{{ route('public.home') }}">
                                                            Home
                                                        </a>
                                                    </li>

                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 1;">
                                                        <a class="block font-heading py-2.5" href="{{ route('public.about') }}">
                                                            About
                                                        </a>
                                                    </li>

                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-2.5" href="{{ route('public.blog') }}">
                                                            Blog
                                                        </a>
                                                    </li>

                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-2.5" href="{{ route('public.contact') }}">
                                                            Contact
                                                        </a>
                                                    </li>

                                                    <li class="text-lg lg:text-xl" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-2.5" href="{{ route('public.product') }}">
                                                            Product
                                                        </a>
                                                    </li>
                                                </ul>

                                                <ul class="mt-5">
                                                    <li class="text-sm" style="--first-delay-tap: 0;">
                                                        <a class="block font-heading py-1.5"
                                                           href="{{ route('public.terms.condition') }}">
                                                            Terms and Conditions
                                                        </a>
                                                    </li>

                                                    <li class="text-sm" style="--first-delay-tap: 1;">
                                                        <a class="block font-heading py-1.5" href="{{ route('public.privacy.policy') }}">
                                                            Privacy Policy
                                                        </a>
                                                    </li>

                                                    <li class="text-sm" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-1.5" href="{{ route('public.delivery.shipping.policy') }}">
                                                            Delivery and Returns
                                                        </a>
                                                    </li>

                                                    <li class="text-sm" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-1.5" href="{{ route('public.refund.cancellation.policy') }}">
                                                            Refund Policy
                                                        </a>
                                                    </li>

                                                    <li class="text-sm" style="--first-delay-tap: 2;">
                                                        <a class="block font-heading py-1.5" href="{{ route('public.quality.check') }}">
                                                            Authenticate Product
                                                        </a>
                                                    </li>
                                                </ul>


                                                <div class="mt-5 space-y-5">
                                                    <form class="relative mt-10 max-w-2xl mx-auto block"
                                                          action="/search" method="get" role="search">
                                                        <label for="Search" class="visually-hidden">
                                                            Search
                                                        </label>
                                                        <input type="search"
                                                               name="q"
                                                               id="Search"
                                                               class="pr-12 placeholder-current input w-full"
                                                               value=""
                                                               placeholder="Search">
                                                        <button
                                                            class="absolute right-2 top-1/2 transform -translate-y-1/2 p-1"
                                                            type="submit" class="button">
          <span class="inline-block w-5 h-5"><svg class="theme-icon" viewBox="0 0 48 48" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
  <path
      d="M2 21.1304C2 26.2041 4.01552 31.07 7.60317 34.6577C11.1908 38.2453 16.0567 40.2609 21.1304 40.2609C26.2041 40.2609 31.07 38.2453 34.6577 34.6577C38.2453 31.07 40.2609 26.2041 40.2609 21.1304C40.2609 16.0567 38.2453 11.1908 34.6577 7.60317C31.07 4.01552 26.2041 2 21.1304 2C16.0567 2 11.1908 4.01552 7.60317 7.60317C4.01552 11.1908 2 16.0567 2 21.1304V21.1304Z"
      stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M46 46L34.6576 34.6576" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
  </span>
                                                            <span class="visually-hidden">Search</span>
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </template>

                                    </div>
                                </div>
                            </div>


                            <div class="hidden lg:block">

                                <nav role="navigation">
                                    <ul x-ref="navigation"
                                        class="flex flex-wrap -mx-2.5 justify-start items-center text-base  ">
                                        <li class="inline-block no-js-focus-wrapper h-full">
{{--                                            <button--}}
{{--                                                class="items-stretch h-full relative font-main px-2.5 py-5 flex items-center transition normal-case"--}}
{{--                                                :class="{'text-scheme-accent-1-overlay': menuOpen.menu0 }"--}}
{{--                                                @click="openMenu(0)"--}}
{{--                                                x-bind:aria-expanded="menuOpen.menu0? true: 'false'"--}}
{{--                                                aria-controls="menu0">--}}
{{--                                                <span x-cloak--}}
{{--                                                      :class="{'opacity-100': menuOpen.menu0, 'opacity-0': !menuOpen.menu0, 'h-screen  -translate-y-1/2': !navWrapped }"--}}
{{--                                                      class="bg-scheme-accent-1 absolute inset-0 z-0 pointer-events-none"></span>--}}
{{--                                                <span class="flex h-full items-center relative text-left">--}}
{{--                <span class="inline-block pr-1">Product</span>--}}
{{--                <span--}}
{{--                    class="inline-block w-2 h-2 align-middle svg-scale mr-1 transform origin-center rotate transition-transform duration-150 ml-1"--}}
{{--                    :class="{'rotate-180': menuOpen.menu0}"><svg class="theme-icon" viewBox="0 0 48 48" fill="none"--}}
{{--                                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--<path--}}
{{--    d="M2 12L23.2826 36.0527C23.3724 36.1542 23.4826 36.2354 23.6062 36.291C23.7297 36.3467 23.8636 36.3755 23.999 36.3755C24.1345 36.3755 24.2684 36.3467 24.3919 36.291C24.5154 36.2354 24.6257 36.1542 24.7155 36.0527L46 12"--}}
{{--    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--</svg>--}}
{{--  </span>--}}
{{--              </span>--}}
{{--                                            </button>--}}

                                        </li>

                                        <!-- desktop menu -->
                                        <li class="inline-block no-js-focus-wrapper h-full">
                                            <a href="{{ route('public.home') }}"
                                               class="font-main px-2.5 py-5 flex items-center transition normal-case">
                                                Home
                                            </a>
                                        </li>

                                        <li class="inline-block no-js-focus-wrapper h-full">
                                            <a href="{{ route('public.about') }}"
                                               class="font-main px-2.5 py-5 flex items-center transition normal-case">
                                                About
                                            </a>
                                        </li>

                                        <li class="inline-block no-js-focus-wrapper h-full">
                                            <a href="{{ route('public.blog') }}"
                                               class="font-main px-2.5 py-5 flex items-center transition normal-case">
                                                Blog
                                            </a>
                                        </li>

                                        <li class="inline-block no-js-focus-wrapper h-full">
                                            <a href="{{ route('public.contact') }}"
                                               class="font-main px-2.5 py-5 flex items-center transition normal-case">
                                                Contact
                                            </a>
                                        </li>

                                        <li class="inline-block no-js-focus-wrapper h-full">
                                            <a href="{{ route('public.product') }}"
                                               class="font-main px-2.5 py-5 flex items-center transition normal-case">
                                                Product
                                            </a>
                                        </li>

                                    </ul>
                                </nav>

                            </div>

                        </div>


                        <div class="flex justify-center text-center flex-grow lg:flex-grow-0 lg:w-auto ">

                            <h1 class="h1 font-heading font-heading text-xl lg:text-3xl py-2.5">

                                <a href="{{ route('public.home') }}" class="site-header__logo-link inline w-full">
                                    <div style="max-width: 220px;">
                                        <img
                                            src="{{ asset('assets/images/logo.png') }}"
                                            srcset="{{ asset('assets/images/logo.png') }}"
                                            alt="Shapes Theme Soda"
                                            width="1332"
                                            height="905"
                                            loading="eager"
                                            class="text-transparent"
                                        >
                                    </div>
                                </a>

                            </h1>


                        </div>


                        <div class="flex flex-grow w-1/3 items-center justify-end">


                            <div class="hidden lg:block h-full">


                            </div>


                            <a data-open-search x-ref="search" @click.prevent="openSearch()"
                               @keydown.space="openSearch()" href="/search"
                               class="hidden lg:block font-main px-2.5 py-5 flex items-center transition normal-case">

                                <span class="visually-hidden">Search our site</span><span>Search</span>
                            </a>

                            <div
                                class="absolute top-0 left-0 right-0 bottom-0 w-full flex items-center bg-scheme-background text-scheme-text z-20 px-section"
                                x-cloak
                                x-show="searchOpen"
                                x-transition:enter="transition ease duration-200"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease duration-00"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                @click.away.prevent="searchOpen = false"
                                data-header-search
                            >
                                <div class="w-full"
                                     x-data='ThemeComponent_PredictiveSearch("product,collection,article,page")'
                                     x-init="mounted()" @focusOut="onFocusOut" @keyup="onKeyup" @keydown="onKeydown">
                                    <form x-ref="searchForm" action="/search" method="get" role="search"
                                          @submit="onFormSubmit" @click.away.prevent="searchOpen = false">
                                        <div x-ref="searchFieldComponent" class="relative py-2">
                                            <input
                                                id="header-search"
                                                type="search"
                                                name="q"
                                                value=""
                                                class="header-search-input pl-9 py-2 placeholder:text-scheme-text font-secondary w-full border-0 shadow-none bg-transparent"
                                                placeholder="Search" aria-expanded="false"
                                                aria-owns="predictive-search-results-list"
                                                aria-controls="predictive-search-results-list"
                                                aria-autocomplete="list"
                                                autocorrect="off"
                                                autocomplete="off"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                x-ref="input"
                                                x-model="rawQuery"
                                                @input.debounce.300="onChange"
                                                @focus="onFocus">
                                            <label class="visually-hidden" for="header-search">Search</label>
                                            <input type="hidden" name="options[prefix]" value="last">
                                            <button class="absolute left-0 top-1/2 transform -translate-y-1/2 p-1"
                                                    aria-label="Search">
        <span class="inline-block w-6 h-6"><svg class="theme-icon" viewBox="0 0 48 48" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
  <path
      d="M2 21.1304C2 26.2041 4.01552 31.07 7.60317 34.6577C11.1908 38.2453 16.0567 40.2609 21.1304 40.2609C26.2041 40.2609 31.07 38.2453 34.6577 34.6577C38.2453 31.07 40.2609 26.2041 40.2609 21.1304C40.2609 16.0567 38.2453 11.1908 34.6577 7.60317C31.07 4.01552 26.2041 2 21.1304 2C16.0567 2 11.1908 4.01552 7.60317 7.60317C4.01552 11.1908 2 16.0567 2 21.1304V21.1304Z"
      stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M46 46L34.6576 34.6576" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
  </span>
                                            </button>
                                            <button x-cloak @click="close()"
                                                    class="block p-1 absolute right-0 top-1/2 transform -translate-y-1/2"
                                                    type="button">
                                                <span class="visually-hidden">Close (esc)</span>
                                                <span class="inline-block w-6 h-6"><svg class="theme-icon"
                                                                                        viewBox="0 0 48 48" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
  <path d="M46 2L2 46" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M46 46L2 2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
                                            </button>
                                        </div>
                                        <div id="predictiveSearchResults"
                                             :class="{ 'opacity-0 bg-scheme-text/0': ! resultsOpen, 'bg-scheme-text/75' : resultsOpen }"
                                             tabindex="-1" x-cloak
                                             class="text-scheme-text absolute left-0 right-0 h-screen transition-colors ease-out duration-300 z-50">
                                            <template x-if="loading && !results">
                                                <div class="bg-scheme-background">
                                                    <div class="w-6 h-6 pt-12 pb-12 mx-auto" data-predictive-loading>
                                                        <div class="loading"></div>
                                                    </div>
                                                </div>
                                            </template>
                                            <template x-if="resultsOpen">
                                                <div x-show="resultsOpen"
                                                     class="max-h-three-quarters-screen-height overflow-hidden overflow-y-auto bg-scheme-background pb-5 lg:pb-10 px-section scroll-pb-5 lg:scroll-pb-10"
                                                     x-ref="results" @click.away.prevent="searchOpen = false">
                                                </div>
                                            </template>
                                        </div>
                                        <span class="predictive-search-status visually-hidden" role="status"
                                              aria-hidden="true"></span></form>
                                </div>
                            </div>

{{--                            <div class="items-center relative z-10 hidden lg:flex py-2.5 ml-5">--}}
{{--                                <div class="pb-button-shadow">--}}
{{--                                    <a id="openModalBtn" class="inline-block ">--}}
{{--                                        <span class="">Shop Now</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="inline-block no-js-focus-wrapper h-full">
                                <button class="items-stretch h-full relative font-main px-2.5 py-5 flex items-center transition normal-case"
                                        :class="{'text-scheme-accent-1-overlay': menuOpen.menu0 }"
                                        @click="openMenu(0)"
                                        x-bind:aria-expanded="menuOpen.menu0? true: 'false'"
                                        aria-controls="menu0">
                                    <span x-cloak :class="{'opacity-100': menuOpen.menu0, 'opacity-0': !menuOpen.menu0, 'h-screen  -translate-y-1/2': !navWrapped }" class="bg-scheme-accent-1 cl-1 absolute inset-0 z-0 pointer-events-none" ></span>
                                    <span class="flex h-full items-center relative text-left">
                <span class="inline-block pr-1">Account</span>
                <span class="inline-block w-2 h-2 align-middle svg-scale mr-1 transform origin-center rotate transition-transform duration-150 ml-1" :class="{'rotate-180': menuOpen.menu0}"><svg class="theme-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 12L23.2826 36.0527C23.3724 36.1542 23.4826 36.2354 23.6062 36.291C23.7297 36.3467 23.8636 36.3755 23.999 36.3755C24.1345 36.3755 24.2684 36.3467 24.3919 36.291C24.5154 36.2354 24.6257 36.1542 24.7155 36.0527L46 12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
  </span>
              </span>
                                </button>

                                <div class="no-js-focus-container absolute left-0 bottom-0 w-full py-section-vertical-spacing cl-2 px-section transform translate-y-[calc(100%-var(--drop-down-offset))] z-100  max-h-three-quarters-screen-height overflow-hidden overflow-y-auto bg-scheme-accent-1 text-scheme-accent-1-overlay"
                                     id="menu0"
                                     x-cloak
                                     x-show="menuOpen.menu0"
                                     x-transition:enter="transition ease duration-200"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease duration-00"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"
                                     data-header-dropdown
                                     @focusout="focusOut($event, 'menu0')"
                                     @click.away.prevent="menuOpen.menu0 = false">


                                    <ul class="grid grid-cols-1 lg:grid-cols-12 lg:gap-10 grid-flow-row-dense">
                                        @if(!session()->has('user'))
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.login') }}">
                                                <div class="mt-2 text-center">
                                                    Login
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.register') }}">
                                                <div class="mt-2 text-center">
                                                    Register
                                                </div>
                                            </a>
                                        </li>
                                        @endif
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.product') }}">
                                                <div class="mt-2 text-center">
                                                    Shop Now
                                                </div>
                                            </a>
                                        </li>
                                        @if(session()->has('user'))
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.account.profile') }}">
                                                <div class="mt-2 text-center">
                                                    Profile
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.account.address') }}">
                                                <div class="mt-2 text-center">
                                                    Address
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.product') }}">
                                                <div class="mt-2 text-center">
                                                    Orders
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:col-span-2">
                                            <a href="{{ route('public.logout') }}">
                                                <div class="mt-2 text-center">
                                                    Logout
                                                </div>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <noscript>
        <style>
            .no-js-focus-wrapper:focus-within > .no-js-focus-container {
                display: block !important;
            }
        </style>
    </noscript>


    <style>
        .logo-image {
            display: block;
            max-width: 160px;
        }
    </style>

    <script>
        document
            .getElementById('shopify-section-sections--16717967261917__header')
            .classList.add('has-no-height');
    </script>
    <style>
        #MainContent .shopify-section:first-child > section:not(.full-bleed-section) {
            padding-top: 6rem;
        }

        @media (min-width: 990px) {
            #MainContent .shopify-section:first-child > section:not(.full-bleed-section) {
                padding-top: 7rem;
            }
        }
    </style>
    <script
        src="//cdn.shopify.com/s/files/1/0640/0213/0141/t/28/assets/modules-predictive-search.bundle.min.js?v=100006850133386087801683310459"
        type="module"></script>


</div>
<!-- END sections: header-group -->
