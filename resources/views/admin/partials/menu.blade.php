<li class="nav-item">
    <a class='sidebar-link' href="{{ route('admin.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>

@can('users.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('users.index') }}">
        <span class="icon-holder">
            <i class="c-pink-400 ti-user"></i>
        </span>
        <span class="title">Usuarios</span>
    </a>
</li>
@endcan

@can('roles.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('roles.index') }}">
        <span class="icon-holder">
            <i class="c-yellow-800 ti-panel"></i>
        </span>
        <span class="title">Roles</span>
    </a>
</li>
@endcan

@can('roles.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('plants.index') }}">
        <span class="icon-holder">
            <i class="c-green-800 fa fa-envira"></i>
        </span>
        <span class="title">Plantas</span>
    </a>
</li>
@endcan

@can('roles.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('users.index') }}">
        <span class="icon-holder">
            <i class="c-cyan-500 fa fa-exchange"></i>
        </span>
        <span class="title">Solicitud de Retiro</span>
    </a>
</li>
@endcan

@can('roles.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('users.index') }}">
        <span class="icon-holder">
            <i class="c-red-700 fa fa-long-arrow-down"></i>
        </span>
        <span class="title">Control Perdida</span>
    </a>
</li>
@endcan

@can('staffs.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('staffs.index') }}">
        <span class="icon-holder">
            <i class="c-blue-grey-800 fa fa-users"></i>
        </span>
        <span class="title">Personal</span>
    </a>
</li>
@endcan

@can('roles.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-700 ti-bag"></i>
        </span>
        <span class="title">Bolsas</span>
    </a>
</li>
@endcan