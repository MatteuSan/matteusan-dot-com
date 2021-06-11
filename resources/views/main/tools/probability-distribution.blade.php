@extends('layouts.app')

@section('meta')

    <title>{{ __('TOOLS') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Tools') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('TOOLS') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Tools') }}" />

    <script type="text/javascript" src="{{ asset('js/fusioncharts/fusioncharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts/fusioncharts.charts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts/themes/fusioncharts.theme.ocean.js') }}"></script>

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('PROBABILITY DISTRIBUTION') !!} </h1>
            <h5>{{ __('Simple calculator for probability distribution with data visualization') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        @livewire('probability-dist-calculator')

    </section>

@endsection
