<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eventos Exclusivos | <?= $this->config->item('site_name') ?></title>

    <!-- Fuentes y Estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        .evento-card {
            background: #1f2122;
            border-radius: 23px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s;
        }
        .evento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .acceso-denegado {
            text-align: center;
            padding: 100px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="main-nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-4">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('public/assets/images/logo.png') ?>" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('tienda') ?>">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('eventos') ?>">Eventos</a></li>
                    <?php if ($this->session->userdata('logueado')): ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('perfil') ?>"><?= htmlspecialchars($this->session->userdata('nombre')) ?></a></li>
                        <li class="nav-item"><a class="btn btn-outline-warning ms-2" href="<?= base_url('logout') ?>">Cerrar sesión</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="btn btn-outline-light ms-2" href="<?= base_url('login') ?>">Iniciar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    
                    <?php if ($this->session->userdata('logueado')): ?>

                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <h2><em>Eventos</em> Exclusivos</h2>
                                <p class="text-white-50">Solo disponibles para usuarios registrados</p>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Evento 1 -->
                            <div class="col-lg-4">
                                <div class="evento-card">
                                    <img src="<?= base_url() ?>public/assets/images/evento-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
                                    <h4>Torneo de Gaming</h4>
                                    <span class="badge bg-primary">Presencial</span>
                                    <p class="mt-3">Participa en nuestro torneo mensual con premios en efectivo.</p>
                                    <div class="main-border-button">
                                        <a href="#">Inscribirse</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Evento 2 -->
                            <div class="col-lg-4">
                                <div class="evento-card">
                                    <img src="<?= base_url() ?>public/assets/images/evento-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
                                    <h4>Workshop de Streamers</h4>
                                    <span class="badge bg-success">Online</span>
                                    <p class="mt-3">Aprende a monetizar tu contenido de gaming.</p>
                                    <div class="main-border-button">
                                        <a href="#">Reservar Cupo</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Evento 3 -->
                            <div class="col-lg-4">
                                <div class="evento-card">
                                    <img src="<?= base_url() ?>public/assets/images/evento-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
                                    <h4>Lanzamiento Exclusivo</h4>
                                    <span class="badge bg-warning">Próximamente</span>
                                    <p class="mt-3">Prueba antes que nadie nuestro nuevo juego.</p>
                                    <div class="main-border-button">
                                        <a href="#">Lista de Espera</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else: ?>
                        <div class="acceso-denegado">
                            <h2 class="text-danger"><i class="fa fa-lock"></i> Acceso Restringido</h2>
                            <p class="text-white">Debes <a href="<?= base_url('login') ?>" style="color: #f5a425;">iniciar sesión</a> para ver los eventos exclusivos.</p>
                            <div class="main-border-button mt-4">
                                <a href="<?= base_url('login') ?>">Ir al Login</a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white py-4">
        <p>&copy; <?= date('Y') ?> <?= $this->config->item('site_name') ?>. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/isotope.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url() ?>public/assets/js/tabs.js"></script>
    <script src="<?= base_url() ?>public/assets/js/popup.js"></script>
    <script src="<?= base_url() ?>public/assets/js/custom.js"></script>
</body>
</html>
