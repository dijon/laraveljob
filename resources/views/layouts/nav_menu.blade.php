<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TOP Rent a Car</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Начало</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('images') }}">Изображения</a>
            </li>
            @if( auth()->check() )
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Качи изображение</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">Изход</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">Влизане</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('register') }}">Регистрация</a>
            </li>
            @endif
        </ul>
    </div>
</nav>