<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <ul class="nav nav-pills">
        <!--Para activar el rojo siempre y cuando se encuentre en la ruta-->
        @guest
            <li class="nav-item"><a class="nav-link {{setActive('home')}}" href="{{route('home')}}">Home</a></li>
        @endguest
        <li class="nav-item"><a class="nav-link  {{setActive('about')}}" href="{{route('about')}}">About</a></li>
        <!--projects.* para que cuando se seleccione proyecto se mantenga el boton activo-->
        <li class="nav-item"><a class="nav-link  {{setActive('projects.*')}}" href="{{route('projects.index')}}">Portafolio</a></li>
        <li class="nav-item"><a class="nav-link  {{setActive('contact')}}" href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>
