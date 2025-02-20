<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">SISTEMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Almacen
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('categorias.index')}}">Categorias</a></li>
                  <li><a class="dropdown-item" href="{{route('productos.create')}}">Productos</a></li>
                  <li><a class="dropdown-item" href="#">Ingresos</a></li>
              </ul>
              </li>


              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                          </form>
                          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Cerrar sesión
                      </a>
                      </li>
                      </ul>
                  </li>



              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Seguridad
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('user.index')}}">Usuarios</a></li>
              </ul>
              </li>
          </ul>
      </div>
  </div>
</nav>