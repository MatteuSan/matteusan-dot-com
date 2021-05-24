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
            <h5>{{ __('I do a lot of stupid stuff here lmao') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">
        <h2 class="title-bar--on-surface">HUMMUNAH HUMMUNAH</h2>
        <div class="card--on-surface">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque doloribus facilis fuga incidunt iste, magni modi natus nisi obcaecati odit porro quo, ut vitae, voluptatibus! Assumenda eveniet iure ut?</p>
        </div>
    </section>

@endsection
