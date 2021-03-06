<li class="nav-item">
    <a class='sidebar-link' href="{{ route('admin.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 fa fa-pie-chart"></i>
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

@can('plants.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('plants.index') }}">
        <span class="icon-holder">
            <i class="c-green-800 fa fa-envira"></i>
        </span>
        <span class="title">Plantas</span>
    </a>
</li>
@endcan

@can('withdrawals.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('withdrawals.index') }}">
        <span class="icon-holder">
            <i class="c-cyan-500 fa fa-exchange"></i>
        </span>
        <span class="title">Solicitud de Retiro</span>
    </a>
</li>
@endcan

@can('processes.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('processes.index') }}">
        <span class="icon-holder">
            <i class="c-lime-700 ti-bar-chart"></i>
        </span>
        <span class="title">Procesos</span>
    </a>
</li>
@endcan

@can('losses.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('losses.index') }}">
        <span class="icon-holder">
            <i class="c-red-700 fa fa-long-arrow-down"></i>
        </span>
        <span class="title">Control Perdida</span>
    </a>
</li>
@endcan

@can('employees.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('employees.index') }}">
        <span class="icon-holder">
            <i class="c-blue-grey-800 fa fa-users"></i>
        </span>
        <span class="title">Personal</span>
    </a>
</li>
@endcan

@can('bags.index')
<li class="nav-item">
    <a class='sidebar-link' href="{{ route('bags.index') }}">
        <span class="icon-holder">
            <i class="c-brown-700 ti-bag"></i>
        </span>
        <span class="title">Bolsas</span>
    </a>
</li>
@endcan