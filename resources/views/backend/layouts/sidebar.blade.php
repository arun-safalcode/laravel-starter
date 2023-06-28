<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Starter</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ Route::currentRouteNamed('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @canany('Role access', 'Role add', 'Role edit', 'Role delete')
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.roles.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                @endcanany
                @canany('Permission access', 'Permission add', 'Permission edit', 'Permission delete')
                    <li class="nav-item">
                        <a href="{{ route('admin.permissions.index') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.permissions.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Permissions</p>
                        </a>
                    </li>
                @endcanany
                @canany('User access', 'User add', 'User edit', 'User delete')
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.users.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Users</p>
                        </a>
                    </li>
                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
