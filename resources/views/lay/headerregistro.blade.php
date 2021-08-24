<header>
    <div class="container">
      <!-- <i class="fas fa-bars open_menu"></i> -->

      <span class="logo">
          <a href="{{route('listadoRegistros')}}">
                <img src="https://www.sailinginversiones.com/images/logo.png" alt="Logo" class="logo">
          </a>
      </span>

      <nav>
        <i class="fas fa-times close_menu"></i>
        <ul class="cuenta">
          @if(isset($editCotitulares))
            @if($editCotitulares)
              <li>
                <a href="{{route('editarCotitulares')}}" class="cotitular">Editar Cotitulares</a>
              </li>
            @endif
          @endif
          @if(isset($usuario_nuevo))
            @if($usuario_nuevo)
              <li><a href="{{route('inicioCamino',['nuevoTitular'])}}" class="abrir">Abrí tu cuenta</a></li>
            @else
              <li><a href="{{ url("/inicioCamino/nuevoCotitular/") }}" class="login">Agregar Co-Titular</a></li>
              <li><a href="{{route('inicioCamino',['editarTitular'])}}" class="login">Editar titular</a></li>
            @endif
          @endif

          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item logout">
              <i class="icon-switch2"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
    </div>
</header>
