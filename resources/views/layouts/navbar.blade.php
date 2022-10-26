<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{route('register.index')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo-sm.png') }}" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo-big.png') }}" alt="" height="50">
                        </span>
                    </a>

                    <a href="{{route('register.index')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo-sm.png') }}" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo-big.png') }}" alt="" height="50">
                        </span>
                    </a>
                </div>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('images/users/user-dummy-img.jpg') }}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::user()->name}}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{Auth::user()->getRoleNames()[0]}}</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Cerrar sesión</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>