<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href= "home">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href= "admin.doctors.index">
                        <i class="fas fa-user-md nav-icon">
                        </i>
                        <p>
                            {{ trans('cruds.doctor.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin.schedules.index">
                        <i class="fas fa-calendar-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('cruds.schedule.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href= "admin.appointments.index">
                        <i class="far fa-calendar-check nav-icon">
                        </i>
                        <p>
                            {{ trans('cruds.appointment.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin.articles.index">
                        <i class="far fa-newspaper nav-icon">
                        </i>
                            {{ trans('cruds.article.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin.categories.index">
                        <i class="fas fa-folder-open nav-icon">
                        </i>
                        <p>
                            {{ trans('cruds.category.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/departments">
                        <i class="fas fa-building nav-icon">
                        </i>
                        <p>
                            {{ trans('cruds.department.title') }}
                        </p>
                    </a>
                </li>


              <!--  @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('doctor_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.doctors.index") }}" class="nav-link {{ request()->is("admin/doctors") || request()->is("admin/doctors/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.doctor.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('schedule_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.schedules.index") }}" class="nav-link {{ request()->is("admin/schedules") || request()->is("admin/schedules/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.schedule.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('appointment_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.appointments.index") }}" class="nav-link {{ request()->is("admin/appointments") || request()->is("admin/appointments/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.appointment.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('article_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.articles.index") }}" class="nav-link {{ request()->is("admin/articles") || request()->is("admin/articles/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.article.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('category_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.category.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('department_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.departments.index") }}" class="nav-link {{ request()->is("admin/departments") || request()->is("admin/departments/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.department.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        -->

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
