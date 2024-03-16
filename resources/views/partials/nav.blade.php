<nav>
    <a href="{{ route('index') }}">Inicio</a>
    <a href="{{ route('map') }}">Mapa</a>
    @if (isset(Auth::user()->name))
        <a href="{{ route('map') }}">Salas</a>
        <a href="{{ route('map') }}">Personajes</a>
    @endif
</nav>
