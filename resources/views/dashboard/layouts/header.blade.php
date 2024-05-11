<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class="d-flex align-items-center">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="50" height="50">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">HRIS PT. David Roy Indonesia</a>
    </div>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-0 text-light">Logout <span data-feather="log-out"></span></button>
            </form>
        </div>
    </div>
</header>
