<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">ERythm</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container-fluid">
            <ul class="navbar-nav float-end">
                <li class="nav-item px-2 dropdown active">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastros</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/usuario') }}">Usuário</a></li>
                        <li><a class="dropdown-item" href="{{ url('/disco') }}">Disco</a></li>
                        <li><a class="dropdown-item" href="{{ url('/pedido') }}">Pedido</a></li>
                    </ul>
                </li>

                <li class="nav-item px-2"><a class="nav-link disabled" href="{{ url('/leitura') }}">Leitura</a></li>

                <li class="nav-item px-2"><a class="nav-link disabled" href="{{ url('/mac') }}">Mac</a></li>

                <li class="nav-item px-2"><a class="nav-link disabled" href="{{ url('/sensor') }}">Sensor</a></li>
                
                <li class="nav-item px-2">
                    @guest
                        <li class="nav-item px-2">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Logar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item px-2">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                            </li>
                        @endif
                        @else
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='fas fa-user'></i> {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"> <i class='fas fa-user-cog'></i> Perfil</a>
                                <a class="dropdown-item" href="#"><i class='fas fa-cog'></i> Configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class='fas fa-sign-out-alt'></i> {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest

                </li>
            </ul>       
        </div>

    </div>
</nav>

