@extends('layouts.app')

@section('meta')

    <title>{{ __('HOME') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Matteu\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('HOME') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Matt\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('HI! I\'M <u>MATT!</u>') !!} </h1>
            <h5>{{ __('I\'m a frontend developer, composer, arranger, orchestrator and music copyist') }}</h5>

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

        <h2 class="title-bar--on-surface">{{ __('WEBSITE IN PROGRESS!') }}</h2>

    </section>

@endsection
