<a href="{{ route('home', [$code]) }}" class="drawer__language {{ App::getLocale() == $code ? 'drawer__language--active' : '' }}">
    <p>{{ $language }}</p>
</a>
