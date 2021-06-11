@extends('layouts.app')

@section('meta')

    <title>{{ __('TOOLS') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Tools') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('TOOLS') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Tools') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('TOOLS') !!} </h1>
            <h5>{{ __('Usually calculators and stuff for school') }}</h5>

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

        <h2 class="title-bar--on-surface">{{ __('TOOLS LIBRARY') }}</h2>

        <div class="container--grid">
            <x-card-y
                title="{{ __('Probability Distribution') }}"
                subtitle="{!! __('a simple probability distribution calculator') !!}"
                image="img/tools/prob-dist.jpg"
                to="{{ route('tools.probdist', App::getLocale()) }}"
            />
        </div>

    </section>

@endsection
