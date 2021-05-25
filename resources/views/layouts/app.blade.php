<!doctype html>
<html lang="{{ App::getLocale() }}" x-data="{}">
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
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}" />
    <meta property="og:url" content="{{ URL::current() }}">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

    @livewireStyles
</head>

<header class="header">

    <div class="header__wrap">

        <div class="header__text">
            <a href="{{ route('home', App::getLocale()) }}">
                <h2>MatteuSan</h2>
            </a>
        </div>

        <div class="nav">

            <div class="nav__container">

                <div class="nav__item">
                    <a class="nav__item_icon {{ Request::segment(2) == "" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('Home') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('home', App::getLocale()) }}">home</a>
                    <p class="nav__item_text">{{ __('Home') }}</p>
                </div>

                <div class="nav__item">
                    <a class="nav__item_icon {{Request::segment(2) == "bio" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('About Me') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('bio', App::getLocale()) }}">face</a>
                    <p class="nav__item_text">{{ __('About Me') }}</p>
                </div>

                <div class="nav__item">
                    <a class="nav__item_icon {{ Request::segment(2) == "music" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('Music') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('music', App::getLocale()) }}">piano</a>
                    <p class="nav__item_text">{{ __('Music') }}</p>
                </div>

                <div class="nav__item nav__item--more">
                    <a class="nav__item_icon {{ Request::segment(2) == "webdev" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('Web Dev') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('webdev', App::getLocale()) }}">web</a>
                    <p class="nav__item_text">{{ __('Web Dev') }}</p>
                </div>

            </div>

        </div>

    </div>

</header>

<body>

@yield('contents')

@livewireScripts
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</body>

<footer class="footer">
    <div class="wrap--text">
        <h3>@MatteuSan</h3>
        <h5>{!! __('Copyright '. date('Y') .' &copy; MatteuSan') !!}</h5>
    </div>
    <div class="footer__language__wrap">
        <x-language code="en" language="English"/>

        <span class="footer__language__spacer">|</span>

        <x-language code="tl" language="Tagalog"/>

        <span class="footer__language__spacer">|</span>

        <x-language code="ja" language="日本語"/>
    </div>
    <div class="footer__links">
        <a class="footer__links__item" href="#">
            <p>{{ __('Privacy Policy') }}</p>
        </a>
        <a class="footer__links__item" href="#">
            <p>{{ __('Terms of Use') }}</p>
        </a>
    </div>
</footer>
</html>
