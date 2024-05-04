<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ url('dashboard-default') }}">
            <img src="{{ URL::asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-3 font-weight-bold">Vonteq</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                @impersonating()
                    <li class="nav-item text-center">
                        <a href="{{ route('users.stop-impersonate') }}" class="btn btn-warning btn-sm">Stop Impersonating</a>
                    </li>
                @endImpersonating
                <x-sidebar.general-management />
                @role('admin')
                <x-sidebar.admin-menu />
                @endrole
                <x-sidebar.products-management />
                <x-sidebar.performance />
                <x-sidebar.feed-management />
                <x-sidebar.account-management />
            </ul>
        </div>
        <div class="sidenav-footer mx-3 mt-3 pt-3">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background" style="background-image: url('assets/img/curved-images/white-curved.jpeg')"></div>
                <div class="card-body text-start p-3 w-100">
                    <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
                    </div>
                    <div class="docs-info">
                    <h6 class="text-white up mb-0">Ai nevoie de ajutor?</h6>
                        <p class="text-xs font-weight-bold">Please check our docs</p>
                        <a href="/documentation/getting-started/overview.html" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                    </div>
                </div>
            </div>
        </div>
</aside>