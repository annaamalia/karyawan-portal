<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{ Request::is('users/index*') ? 'active' : '' }}" href="/users/index">
            <span data-feather="home"></span>
            Dashboard
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::is('users/create*') ? 'active' : '' }}" href="/users/create">
            <span data-feather="file"></span>
            Create Profile
        </a>
        </li>
    </ul>

    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{ Request::is('users/show*') ? 'active' : '' }}" href="/users/show">
            <span data-feather="file-text"></span>
            Data Karyawan
        </a>
        </li>
    </ul>
    @endcan
    </div>
</nav>
