<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Acceso restringido</title>
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1f2122;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }
        .card {
            background-color: #2a2a2a;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            display: inline-block;
            max-width: 600px;
        }
        .icono {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .text-verificacion {
            color: #ffc107; /* Amarillo para verificación */
        }
        .text-rechazado {
            color: #dc3545; /* Rojo para rechazado */
        }
    </style>
</head>
<body>
    <div class="card">
        <?php if ($usuario->estado_cuenta == 2): ?>
            <div class="icono text-verificacion">
                <i class="fas fa-hourglass-half"></i>
            </div>
            <h2 class="text-verificacion">Cuenta en Verificación</h2>
        <?php else: ?>
            <div class="icono text-rechazado">
                <i class="fas fa-times-circle"></i>
            </div>
            <h2 class="text-rechazado">Cuenta Rechazada</h2>
        <?php endif; ?>
        
        <p><?= $mensaje ?></p>
        <a href="<?= base_url() ?>" class="btn btn-outline-light mt-3">Volver al inicio</a>
    </div>
</body>
</html>