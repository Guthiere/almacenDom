<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>

    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{route('usuarios.index')}}">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>

    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Departamentos</span>
    </a>



    <a class="nav-link" href="{{route('cargos.index')}}">
        <i class=" fas fa-building"></i><span>Cargos</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Empleados</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Tecnologias</span>
    </a>

</li>
