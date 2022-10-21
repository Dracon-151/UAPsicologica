<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Inicio de sesión | Unidad Atención Psicológica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a class="d-inline-block auth-logo">
                                    <img src="images/logo-light.png" alt="" width="100%">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Iniciar sesión</h5>
                                    <p class="text-muted">Acceso a la plataforma</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" required="" placeholder="Ingrese un email">
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Contraseña</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input @error('login') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="* * * * *" aria-describedby="passwordInput" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                                        </div>
                                    </form>                                                
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Módulo Reportes Unidad Atención Psicológica <i class="mdi mdi-heart text-danger"></i> by Demian Alexis Alvarado Palacios
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- particles js -->
    <script src="{{ asset('libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('js/pages/particles.app.js') }}"></script>
    <!-- validation init -->
    <script src="{{ asset('js/pages/form-validation.init.js') }}"></script>
    <!-- password create init -->
    <script src="{{ asset('js/pages/passowrd-create.init.js') }}"></script>

    <script type="text/javascript">
        // Desactiva click derecho
        document.oncontextmenu = function(){ return false }

        // Toggle password
        const togglePassword = document.getElementById("toggle-password");
        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
            let x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            });
        }

        function validateLogin(target){
            if (grecaptcha.getResponse()){

                var token_google = grecaptcha.getResponse();
                $("#token_google").val(token_google)
                return true

            }else{
                Swal.fire(
                    '',
                    'Es necesario verificar la casilla',
                    'warning'
                )
                return false;
            }
        }

        /*hola*/
        console.clear();
        var cssRule =
            "color: rgb(0, 0, 0);" +
            "font-size: 60px;" +
            "font-weight: bold;" +
            "text-shadow: 1px 1px 5px rgb(0, 0, 0);" +
            "filter: dropshadow(color=rgb(0, 0, 0), offx=1, offy=1);";
        console.log("%c¡Detente!", cssRule);
        setTimeout(console.log.bind(console, '%cEsta función del navegador está pensada para desarrolladores. Si alguien te indicó que copiaras y pegaras algo aquí para habilitar una función de E-commerce o para ´hackear´ la cuenta de alguien, se trata de un fraude. Si lo haces, esta persona podrá acceder a tu cuenta.', 'color: #9e202ad1;font-size: 30px;'), 0);
    </script>
</body>

</html>