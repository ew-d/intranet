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
            height: 100%;
        }
        .evento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .evento-card img {
            max-width: 100%;
            border-radius: 15px;
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .acceso-denegado {
            text-align: center;
            padding: 100px 0;
        }
        .evento-title {
            min-height: 60px;
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
    <div class="container mt-5 mb-5">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-white">Eventos Exclusivos</h1>
                <p class="text-muted">Descubre nuestros próximos eventos especiales</p>
            </div>
        </div>
        
        <div class="row">
            <?php if (!empty($eventos)): ?>
                <?php foreach ($eventos as $evento): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="evento-card">
                            <img src="<?= base_url('uploads/' . $evento['imagen']) ?>" alt="<?= htmlspecialchars($evento['titulo']) ?>" class="img-fluid mb-3">
                            <h3 class="evento-title"><?= htmlspecialchars($evento['titulo']) ?></h3>
                            <p class="text-muted"><?= substr(htmlspecialchars($evento['descripcion']), 0, 100) ?>...</p>
                            <p><strong>Fecha:</strong> <?= date('d/m/Y', strtotime($evento['fecha'])) ?></p>
                            <a href="<?= base_url('eventos/detalle/' . $evento['id']) ?>" class="btn btn-warning">Ver más detalles</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="acceso-denegado">
                        <h2 class="text-danger"><i class="fa fa-calendar-times"></i> No hay eventos disponibles</h2>
                        <p class="text-white">Actualmente no hay eventos programados. ¡Vuelve pronto para descubrir nuevas experiencias!</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white py-4 bg-dark">
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
