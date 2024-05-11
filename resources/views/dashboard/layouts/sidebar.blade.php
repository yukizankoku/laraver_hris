<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/karyawan*') ? 'active' : '' }}" href="/dashboard/employees">
            <span data-feather="file-text"></span>
            Daftar Karyawan
          </a>
        </li>
      </ul>
      <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mb-1 mt-3 text-muted">
        <span>Configuration</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/department*') ? 'active' : '' }}" href="/dashboard/department">
            <span data-feather="users"></span>
            Department
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/jabatan*') ? 'active' : '' }}" href="/dashboard/jabatan">
            <span data-feather="users"></span>
            Jabatan
          </a>
        </li>
      </ul>      
    </div>
  </nav>