@extends('layouts.app')

@section('meta')

    <title>HOME - MatteuSan</title>

    <!-- BASIC META -->
    <meta name="description" content="The official website of the Luwal Sining-Pagganap" />

    <!-- OPENGRAPH -->
    <meta property="og:title" content="Home - Luwal Sining-Pagganap" />
    <meta property="og:description" content="The official website of the Luwal Sining-Pagganap" />
    <meta property="og:image" content="https://luwal-sining.xyz/img/ogphoto.png" />

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{{ __('WELCOME!') }}</h1>
            <h5>{{ __('I do a lot of stuff (especially in the frontend)') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-surface">{{ __('WEBSITES/WEBAPPS I\'VE BEEN WORKING ON') }}</h2>
        <div class="card--on-surface">
            <p>{{ __('Here\'s a complete list of all the websites/webapps I\'ve been developing/developing with a few friends in my spare time and in my coding time.') }}</p>
        </div>

        <div class="container--grid">
            <x-card-y
                title="GrowStocks"
                subtitle="Growtopia's Online Price Checker and tech solutions"
                image="img/growstocks.jpg"
                to="https://growstocks.xyz"
            />
            <x-card-y
                title="BlockCorp"
                subtitle="The platform to order Growtopia-related services"
                image="img/blockcorp.jpg"
                to="https://blockcorp.xyz"
            />
            <x-card-y
                title="Purple Cress"
                subtitle="Purple Cress Scanlation's manga reader"
                image="img/purplecress.jpg"
                to="https://purple-cress-manga-reader.web.app/"
            />
            <x-card-y
                title="Luwal Sining-Pagganap"
                subtitle="LSP's main website and performance platform"
                image="img/luwal.jpg"
                to="https://luwal-sining.xyz"
            />
            <x-card-y
                title="Stack: A Frontend Library"
                subtitle="GrowStocks' proprietary frontend library for building UIs efficiently"
                image="img/stack.jpg"
                to="https://github.com/GrowStocks/stack"
            />
        </div>

    </section>

@endsection
