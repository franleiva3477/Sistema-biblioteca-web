<header>
    <center>
        <a href="{{route('home.index')}}" class="{{request()->routeIs('home.index') ? 'active' : ''}}">Sistema de biblioteca</a>
    </center>
        
        <hr>
        <nav>
            <ul>
                
                <li>
                    <a href="{{route('libros.index')}}" class="{{request()->routeIs('libros.*') ? 'active' : ''}}">Libros</a>
                </li>
                <li>
                    <a href="{{route('personas.index')}}" class="{{request()->routeIs('personas.*') ? 'active' : ''}}">Personas</a>
                </li>
            </ul>
        </nav> <hr>

</header>