<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="pt-5 position-sticky sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
                    <span data-feather="user" class="align-text-bottom"></span>
                    My Profile
                </a>
            </li>
        </ul>

        {{-- Administrator --}}
        @can('admin')
            <h6 class="px-3 mt-4 mb-1 sidebar-heading d-flex justify-content-between align-items-center text-muted">
                <span>-- ADMINISTRATOR --</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                        href="/dashboard/categories">
                        <span data-feather="file-text"></span>
                        Post Categories
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>
