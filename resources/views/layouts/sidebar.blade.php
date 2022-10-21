        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Registros</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->

                        <li class="nav-item">
                            <a href="{{route('register.index')}}" class="nav-link menu-link" role="button">
                                <i class="mdi mdi-magnify"></i><span data-key="t-dashboards">Buscar Registro</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register.create')}}" class="nav-link menu-link" role="button">
                                <i class="mdi mdi-sticker-text-outline"></i><span data-key="t-dashboards">Registrar nuevo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-background"></div>
        </div>