@extends('layouts.app')

@section('meta')

    <title>{{ __('MUSIC') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Matteu\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('MUSIC') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Matt\'s creative sharing platform. Here is where you can find his works in music and web development.') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('MUSIC') !!} </h1>
            <h5>{{ __('Here you can find Matt\'s work in music as a composer, arranger, orchestrator, and music copyist') }}</h5>

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

    <main class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-surface">{{ __('MY MUSIC WORK') }}</h2>
        <div class="card--on-surface">
            <p>{{ __('Here are some of the music work I\'ve been doing for the past 6 years. Includes all of my arrangements, orchestrations, and copywork for various institutions such as local school orchestras, the local theatre company, a few online orchestras, and for my personal amusement.') }}</p>
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

        <h2 class="title-bar--on-surface" style="margin: 10px auto; text-align: center">{{ __('SOFTWARES HE\'S USING') }}</h2>
        <section class="container--flex--small">

            <a href="https://musescore.org">
                <img class="technology__logo" src="http://s.musescore.org/about/images/musescore-mu-logo-bluebg.svg" height="50" alt="Musescore Logo">
            </a>

            <a href="https://www.finalemusic.com/">
                <img class="technology__logo" src="https://www.finalemusic.com/wp-content/themes/finale/assets/images/favicons/apple-icon-180x180.png" height="50" alt="Finale Logo">
            </a>

            <a href="https://reaper.fm">
                <img class="technology__logo" src="https://www.reaper.fm/v5img/logo.jpg" height="50" alt="Reaper Logo">
            </a>
        </section>

    </main>

@endsection
