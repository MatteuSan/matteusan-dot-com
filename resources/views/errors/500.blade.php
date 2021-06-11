@extends('layouts.app')

@section('meta')

    <title>{{ __('500 SERVER ERROR!') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Whoopsies! Looks like we messed up the code somewhere...') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('500 SERVER ERROR!!') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Whoopsies! Looks like we messed up the code somewhere...') }}" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('500 - Server error!') !!} </h1>
            <h5>{{ __('Yikes!') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-surface">{{ __('WHOOPS!') }}</h2>
        <div class="card--on-surface">
            <p>Looks like we need to fix something... please contact <a href="mailto:support@matteusan.com">support@matteusan.com</a> if issues persist.</p>
        </div>

    </section>

@endsection
