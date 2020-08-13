<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body class="home page-template-default page page-id-47 bt_bb_plugin_active bt_bb_fe_preview_toggle btHeadingStyle_default btHasAltLogo btMenuFontSize-13 btMenuLeftEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader btNoSidebar btShopSaleTagDesignHardRounded btMenuLeft btMenuHorizontal btMenuInitFinished btRemovePreloader">
    <div id="app" class="btPageWrap">
        <header class="mainHeader btClear ">
            <div class="mainHeaderInner">
                <div class="btLogoArea menuHolder btClear">
                    <div class="port">
                        <div class="btHorizontalMenuTrigger">&nbsp;<div class="bt_bb_icon"><a href="#" target="_self"
                                    data-ico-fa="" class="bt_bb_icon_holder"></a></div>
                        </div>
                        <div class="logo">
                            <span>
                                <a href="/" class="btTextLogo">Freelancer</a> </span>
                        </div><!-- /logo -->
                        <div class="menuPort">
                            <div class="topBarInMenu">
                                <div class="topBarInMenuCell">
                                    <div
                                        class="widget_bt_divider_widget btIconWidget bt_divider_widget_hide_on_responsive_vertical_menu">
                                        <span
                                            class="widget_bt_divider_widget bt_divider_widget_spacing_round_small"></span>
                                    </div>
                                    <div class="btTopBox widget_search btIconWidget">
                                        <div class="btSearch">
                                            <div class="bt_bb_icon"><a href="#" target="_self" data-ico-fa=""
                                                    class="bt_bb_icon_holder"></a></div>
                                        </div>
                                    </div>
                                </div><!-- /topBarInMenu -->
                            </div><!-- /topBarInMenuCell -->
                            <nav>
                                <ul id="menu-primary-menu" class="menu">
                                    <li id="menu-item-2044"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-47 current_page_item menu-item-has-children menu-item-2044">
                                        <div class="subToggler"></div><a href="/"
                                            aria-current="page">Home</a>
                                    </li>
                                   {{-- <li id="menu-item-2048"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2048">
                                        <div class="subToggler"></div><a
                                            href="/about">About us</a>

                                    </li>
                                     <li id="menu-item-2081"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2081">
                                        <div class="subToggler"></div><a
                                            href="/news">News</a>
                                    </li> --}}
                                    <li id="menu-item-2081"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2081">
                                        <div class="subToggler"></div><a
                                            href="/freelancer">Freelancer page</a>
                                    </li>

                                </ul>
                            </nav>
                        </div><!-- .menuPort -->
                    </div><!-- /port -->
                </div><!-- /menuHolder / btBelowLogoArea -->
            </div><!-- / inner header for scrolling -->
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
