<a href="{{ route('home', [$code]) }}" class="footer__language {{ App::getLocale() == $code ? 'footer__language--active' : '' }}">
    <p>{{ $language }}</p>
</a>
