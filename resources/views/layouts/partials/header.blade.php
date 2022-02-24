<header>
      <h1>Codigo Misa</h1>
      <nav>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            <?php
                // dump(request()->routeIs('home'));
            ?>

            {{-- @dump(request()->routeIs('home')) --}}

        </li>
        <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            {{-- @dump(request()->routeIs('cursos.index')) --}}
        </li>
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            {{-- @dump(request()->routeIs('nosotros')) --}}
        </li>
      </nav>
    </header>
