<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eventos Exclusivos | <?= $this->config->item('site_name') ?></title>
    
    <!-- Incluye TODOS tus estilos originales -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link type=text/css href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/fontawesome.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/owl.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    <!-- Estilos personalizados (opcional) -->
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
    <!-- ***** Preloader ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <!-- ***** Header (Navbar original) ***** -->
    <?php $this->load->view('navbar'); ?>

    <!-- ***** Contenido Principal ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    
                    <!-- Verificación de Sesión -->
                    <?php if($this->session->userdata('logueado')): ?>
                        
                        <!-- Título -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h2><em>Eventos</em> Exclusivos</h2>
                                <p class="text-white-50">Solo disponibles para usuarios registrados</p>
                            </div>
                        </div>

                        <!-- Lista de Eventos -->
                        <div class="row">
                            <!-- Evento 1 -->
                            <div class="col-lg-4">
                                <div class="evento-card">
                                    <img src="<?=base_url()?>public/assets/images/evento-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
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
                                    <img src="<?=base_url()?>public/assets/images/evento-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
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
                                    <img src="<?=base_url()?>public/assets/images/evento-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 20px;">
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
                        <!-- Mensaje si no está logueado -->
                        <div class="acceso-denegado">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="text-danger"><i class="fa fa-lock"></i> Acceso Restringido</h2>
                                    <p class="text-white">Debes <a href="<?=base_url('login')?>" style="color: #f5a425;">iniciar sesión</a> para ver los eventos exclusivos.</p>
                                    <div class="main-border-button mt-4">
                                        <a href="<?=base_url('login')?>">Ir al Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer ***** -->
    <?php $this->load->view('footer'); ?>

    <!-- Scripts (Importa TODOS tus scripts originales) -->
    <script type=text/javascript src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
    <script type=text/javascript src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type=text/javascript src="<?=base_url()?>public/assets/js/isotope.min.js"></script>
    <script type=text/javascript src="<?=base_url()?>public/assets/js/owl-carousel.js"></script>
    <script type=text/javascript src="<?=base_url()?>public/assets/js/tabs.js"></script>
  <script type=text/javascript src="<?=base_url()?>public/assets/js/popup.js"></script>
  <script type=text/javascript src="<?=base_url()?>public/assets/js/custom.js"></script>

  </body>

</html>

