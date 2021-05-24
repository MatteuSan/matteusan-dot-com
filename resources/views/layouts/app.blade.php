<!doctype html>
<html
    lang="{{ App::getLocale() }}"
    x-data="{
        drawer_open: false
    }"
>
<head>

    @yield('meta')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/stack/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@11.0.0/dist/material-components-web.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>

    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0fb562e3a8.js" crossorigin="anonymous"></script>

    <!-- VIEWPORT -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- OPENGRAPH -->
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="MatteuSan">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon.ico') }}">
</head>

<header class="header mdc-elevation--z2">

    <div class="header__wrap">

        <div class="header__text">
            <a href="{{ route('home', App::getLocale()) }}">
                <h2>MatteuSan</h2>
            </a>
        </div>

        <div class="nav">

            <div class="nav__container">

                <div class="nav__item">
                    <a class="nav__item_icon {{ Request::segment(2) == "" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('page.home_n') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('home', App::getLocale()) }}">home</a>
                    <p class="nav__item_text">{{ __('Home') }}</p>
                </div>

                <div class="nav__item">
                    <a class="nav__item_icon {{Request::segment(2) == "bio" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('page.about_n') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('bio', App::getLocale()) }}">face</a>
                    <p class="nav__item_text">{{ __('About Me') }}</p>
                </div>

                <div class="nav__item">
                    <a class="nav__item_icon {{ Request::segment(2) == "projects" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('page.market_n') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('projects', App::getLocale()) }}">dashboard</a>
                    <p class="nav__item_text">{{ __('Projects') }}</p>
                </div>

                <div class="nav__item">
                    <p @click.prevent="drawer_open = !drawer_open" class="nav__item_icon material-icons" title="{{ __('page.more_n') }}" data-mdc-ripple-is-unbounded="true" x-text="drawer_open ? 'close' : 'menu'"></p>
                    <p class="nav__item_text">{{ __('More') }}</p>
                </div>

            </div>

        </div>

    </div>

</header>

<div class="drawer__overlay" style="display: none" x-show.transition.opacity="drawer_open">

    <div class="drawer mdc-elevation--z5" style="display: none" x-show.transition.origin.top.right="drawer_open" @click.away="drawer_open = false">

        <div class="wrap--text" style="margin: 0 auto;">

            <a id="mode--dark__toggle" class="drawer__item">
                <span id="mode--dark__icon" class="drawer__icon material-icons">dark_mode</span>
                <p id="mode--dark__text">{{ __('Toggle Dark Mode') }}</p>
            </a>
            <a class="drawer__item" href="#">
                <span class="drawer__icon material-icons">dashboard</span>
                <p>{{ __('Dashboard') }}</p>
            </a>
            <a class="drawer__item" href="#">
                <span class="drawer__icon material-icons">lock</span>
                <p>{{ __('Privacy Policy') }}</p>
            </a>
            <a class="drawer__item" href="#">
                <span class="drawer__icon material-icons">verified_user</span>
                <p>{{ __('Terms of Use') }}</p>
            </a>


            <h4 class="drawer__divider">{{ __('SOCIALS') }}</h4>

            <div class="drawer__socials">
                <a href="https://twitter.com/InvestmentGt" target="_blank">
                    <i class="drawer__icon fab fa-twitter-square"></i>
                </a>
                <a href="https://instagram.com/investment.gt" target="_blank">
                    <i class="drawer__icon fab fa-instagram"></i>
                </a>
                <a href="https://discord.io/growstocks" target="_blank">
                    <i class="drawer__icon fab fa-discord"></i>
                </a>
                <a href="https://patreon.com/growstocks" target="_blank">
                    <i class="drawer__icon fab fa-patreon"></i>
                </a>
            </div>

            <h4 class="drawer__divider">{{ __('LANGUAGES') }}</h4>

            <div class="drawer__language-wrap">

                <x-language code="en" language="English"/>

                <span class="drawer__language_spacer">|</span>

                <x-language code="tl" language="Tagalog"/>

                <span class="drawer__language_spacer">|</span>

                <x-language code="ja" language="日本語"/>

            </div>

        </div>

    </div>

</div>


<body>

@yield('contents')

</body>

<footer class="footer">
    <div class="wrap--text">
        <h3>MatteuSan's Website</h3>
        <h5>{!! __('Copyright '. date('Y') .' &copy; MatteuSan') !!}</h5>
    </div>
</footer>
</html>
