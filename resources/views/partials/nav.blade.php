<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Concesionario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                @if(Auth::user()->rol->nombre == 'Administrador')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vehiculos.index') }}">Vehículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ventas.index') }}">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios.index') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inventario.index') }}">Inventario</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" style="margin-left: auto">
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.show', \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()) }}">
                            <img src="{{ @asset('/assets/images/perfil.png') }}" class="img-fluid"
                                 style="width: 40px; height: 40px;" alt="Perfil" title="Perfil">
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ @asset('/assets/images/apagar.png') }}" class="img-fluid"
                             style="width: 40px; height: 40px;" alt="Cerrar sesión" title="Cerrar sesion">
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
