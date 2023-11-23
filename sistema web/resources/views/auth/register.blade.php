<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/assets/img/seafi-logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Registro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Registrarse</h2>
                <div class="text-center mb-5 text-dark">Control Vehicular</div>
                <div class="card my-5">

                    <form action="{{ route('register') }}" method="POST" class="card-body cardbody-color p-lg-5">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('assets/img/seafi-logo.png') }}"
                                class="img-fluid profile-image-pic img-thumbnail rounded-cube my-4" width="80px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" placeholder="Ingresar nombre"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="Username" placeholder="Ingrese correo"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="Username" placeholder="Ingrese contraseña"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password"
                                placeholder="Confirmar contraseña" name="password_confirmation">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-5 mb-5 w-100">Registrarse</button>
                            <div class="form-text text-center mb-5 text-dark">Ya tienes una cuenta? <a
                                    href="{{ route('login') }}" class="text-dark fw-bold"> Inicia sesion</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Pie de página -->
    <footer class="bd-footer md-5 mt-5 bg-body-tertiary">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Control Vehicular y de contribuyentes</span>
            </div>
            <div style="margin-left: 2rem">
                <a href="https://www.facebook.com/profile.php?id=100091860857796&mibextid=ZbWKwL"
                    class="me-4 link-secondary">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/seaficamp" class="me-4 link-secondary">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="https://seafi.campeche.gob.mx/" class="me-4 link-secondary">
                    <i class="bi bi-google"></i>
                </a>
                <a href="https://github.com/CimaJuan" class="me-4 link-secondary">
                    <i class="bi bi-github"></i>
                </a>
            </div>

        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Servicio de control vehicular
                        </h6>
                        <p>
                            Ser una organización que fomente el cumplimiento voluntario de las obligaciones tributarias
                            de los ciudadanos a través de servicios de calidad.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Gobierno
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Gobierno del estado</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Comité de ética</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Alta de notificaciones</a>
                        </p>

                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Contribuyentes
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Avisos de privacidad</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xs-3 mx-auto mb-4" style="text-align:center">

                        <h6 class="text-uppercase fw-bold mb-4">Contactanos</h6>
                        <p>
                            <i class="bi bi-geo-alt me-2 text-secondary"></i> Calle 49-C o Circuito Baluartes No. 39
                            C.P. 24010
                        </p>
                        <p>
                            <i class="bi bi-phone me-2 text-secondary"></i> 9818119200 ext 52503 y 52604.
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <div class="text-center p-4">
            © 2023 Copyright:
            <p class="text-reset fw-bold">Ing. Juan Emanuel Cima Rabanales</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
