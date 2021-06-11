@extends('layouts.app')

@section('meta')

    <title>{{ __('WEB DEV') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Matteu\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('WEB DEV') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Matt\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('WEB DEV') !!} </h1>
            <h5>{{ __('Find Matt\'s works here as a frontend developer') }}</h5>

            <div class="banner__socials">
                <a href="https://github.com/MatteuGT" target="_blank">
                    <i class="banner__icon fab fa-github-square"></i>
                </a>
                <a href="https://instagram.com/matteu.hernandez" target="_blank">
                    <i class="banner__icon fab fa-instagram-square"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCrVETZ5fRVgV7mgUnDw0jdQ" target="_blank">
                    <i class="banner__icon fab fa-youtube-square"></i>
                </a>
            </div>

        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-surface">{{ __('WEBSITES/WEBAPPS I\'VE BEEN WORKING ON') }}</h2>
        <div class="card--on-surface">
            <p>{{ __('Here\'s a complete list of all the websites/webapps I\'ve been developing with a few friends in my spare time and in my coding time. Most of these are passion projects, and some of them are commissions.') }}</p>
        </div>

        <section class="container--grid">

            @if(!$works->count())
                <div class="card--on-surface">
                    <h2 class="title-bar--on-card">WORK IS COMING SOON!</h2>
                    <p>Just give it some time for Matt to finish preparing it I guess...</p>
                </div>
            @else
                @foreach($works as $work)
                    <x-card-y
                        title="{{ $work->name }}"
                        subtitle="{!! $work->description !!}"
                        image="{{ $work->image }}"
                        to="{{ $work->url }}"
                    />
                @endforeach
            @endif

        </section>

        <h2 class="title-bar--on-surface" style="text-align: center; margin: 20px 0">
            TECHNOLOGIES HE USES
        </h2>

        <section class="container--flex--small">

            <img class="technology__logo" src="https://cdn.jsdelivr.net/npm/programming-languages-logos/src/html/html.svg" height="50" alt="HTML Logo">
            <img class="technology__logo" src="https://cdn.jsdelivr.net/npm/programming-languages-logos/src/css/css.svg" height="50" alt="CSS logo">
            <a href="https://sass-lang.org">
                <img class="technology__logo" src="https://sass-lang.com/assets/img/logos/logo-b6e1ef6e.svg" height="50" alt="Sass/Scss Logo">
            </a>
            <img class="technology__logo" src="https://cdn.jsdelivr.net/npm/programming-languages-logos/src/javascript/javascript.svg" height="50" alt="Javascript Logo">
            <a href="https://vuejs.org" target="_blank">
                <img class="technology__logo" src="https://vuejs.org/images/logo.svg" height="50" alt="Vue Logo">
            </a>
            <a href="https://php.net" target="_blank">
                <img class="technology__logo" src="https://cdn.jsdelivr.net/npm/programming-languages-logos/src/php/php.svg" height="50" alt="PHP Logo">
            </a>
            <a href="https://laravel.com" target="_blank">
                <img class="technology__logo" src="https://laravel.com/img/logomark.min.svg" height="50" alt="Laravel Logo">
            </a>
            <a href="https://nuxtjs.org" target="_blank">
                <img class="technology__logo" src="https://nuxtjs.org/logos/nuxt-square.svg" height="50" alt="Nuxt Logo">
            </a>
        </section>

    </section>

@endsection
