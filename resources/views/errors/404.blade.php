@extends('layouts.app')

@section('meta')

    <title>{{ __('404 PAGE NOT FOUND!') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Whoopsies! Looks like the page you are trying to access does not exist or is inaccessible.') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('404 PAGE NOT FOUND!') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Whoopsies! Looks like the page you are trying to access does not exist or is inaccessible.') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('404 - Page not found!') !!} </h1>
            <h5>{{ __('Yikes!') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-surface">{{ __('WHOOPS!') }}</h2>
        <div class="card--on-surface">
            <p>I think you should check if the page is valid or not! Might be a faulty url, I guess...</p>
        </div>

    </section>

@endsection
