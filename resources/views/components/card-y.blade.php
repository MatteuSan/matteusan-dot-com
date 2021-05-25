<div class="card--y mdc-elevation--z2">
    <a href="{{ $to }}" target="_blank">
        <img alt="CardY image" class="card--y__img" src="{{ asset($image) }}">
        <div class="card--y__info">
            <div class="wrap--text">
                <h4>{{ $title }}</h4>
                <h5>{{ $subtitle }}</h5>
                <a href="{{ $to }}" target="_blank">
                    <button class="card--y__button">{{ __('Check it out!') }}</button>
                </a>
            </div>
        </div>
    </a>
</div>

