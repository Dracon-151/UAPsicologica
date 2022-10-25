<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>
    @include('layouts.head') 
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @include('layouts.breadcrumb')

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible alert-solid alert-label-icon fade show" role="alert">
                            <i class="ri-check-double-line label-icon"></i><strong>Exito</strong>
                            - El proceso se ha realizado correctamente
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session()->has('errors'))
                        <div class="alert alert-danger alert-dismissible alert-solid alert-label-icon fade show" role="alert">
                            <i class="ri-error-warning-line label-icon"></i><strong>Error</strong>
                            - Algo ha salido mal al realizar el proceso
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('layouts.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('layouts.scripts')
</body>

</html>