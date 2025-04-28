      <!DOCTYPE html>
      <html lang="en">

        <head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

          <title>Sal de Apuros</title>

          <!-- Bootstrap core CSS -->
          <link type=text/css href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


          <!-- Additional CSS Files -->
          <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/fontawesome.css">
          <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/templatemo-cyborg-gaming.css">
          <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/owl.css">
          <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/animate.css">
          <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>



          <link rel="icon" href="<?=base_url()?>public/assets/images/icono.png" type="image/png">
          <style>
          body {
            margin: 0;
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
          }

          .main-nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #1e1e1e;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
          }

          .main-nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
          }

          .logo img {
            width: 25%;
          }

          .nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
          }

          .nav li a {
            color: #bcbcbc;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease;
          }

          .nav li a:hover {
            color: #ff4081;
          }

          .menu-trigger {
            display: none;
            cursor: pointer;
            color: white;
          }

          .menu-trigger span {
            font-size: 1.2rem;
          }

          /* Menú móvil */
          .mobile-menu {
            display: none;
            flex-direction: column;
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            background-color: #1e1e1e; /* Color sólido, opaco */
            z-index: 999;
            padding: 20px;
            animation: dropDown 0.3s ease-out;
          }

          .mobile-menu.active {
            display: flex;
          }

          .mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
          }

          .mobile-menu ul li {
            margin: 10px 0;
          }

          .mobile-menu ul li a {
            display: block; /* Todo el bloque es clickable */
            background-color: #2a2a2a;
            color: white;
            text-decoration: none;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 18px;
            transition: background-color 0.3s ease;
          }

          .mobile-menu ul li a:hover {
            background-color: #3b3b3b;
          }

          @keyframes dropDown {
            from {
              opacity: 0;
              transform: translateY(-20px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          @media (max-width: 991px) {
            .nav {
              display: none;
            }

            .menu-trigger {
              display: block;
            }
          }
        </style>
      </head>

      <body>
        <!-- Navbar -->
        <nav class="main-nav">
          <div class="container">
            <a href="<?= base_url() ?>" class="logo">
              <img src="<?= base_url() ?>public/assets/images/logo-t2.png" alt="Logo Intranet Sorteos" style="width: 14%;">
            </a>

            <ul class="nav">
              <li><a href="<?= base_url() ?>">Inicio</a></li>
              <li><a href="<?= base_url('browse') ?>">Nosotros</a></li>
              <li><a href="<?= base_url('details') ?>">Beneficios</a></li>
              <li><a href="<?= base_url('streams') ?>">Tienda</a></li>
              <?php if($this->session->userdata('logueado')): ?>
                <li><a href="<?= base_url('eventos') ?>">Eventos</a></li>
                <li><a href="<?= base_url('logout') ?>">Cerrar Sesión</a></li>
              <?php else: ?>
                <li><a href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
              <?php endif; ?>
            </ul>

            <div class="menu-trigger" id="menuBtn"><span>☰</span></div>
          </div>
        </nav>

        <!-- Menú móvil -->
        <div class="mobile-menu" id="mobileMenu">
          <ul>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li><a href="<?= base_url('browse') ?>">Nosotros</a></li>
            <li><a href="<?= base_url('details') ?>">Beneficios</a></li>
            <li><a href="<?= base_url('streams') ?>">Tienda</a></li>
            <?php if($this->session->userdata('logueado')): ?>
              <li><a href="<?= base_url('eventos') ?>">Eventos</a></li>
              <li><a href="<?= base_url('logout') ?>">Cerrar Sesión</a></li>
            <?php else: ?>
              <li><a href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
            <?php endif; ?>
          </ul>
        </div>


        <!-- JS -->
        <script>
          const menuBtn = document.getElementById('menuBtn');
          const mobileMenu = document.getElementById('mobileMenu');

          menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
          });

          window.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
              mobileMenu.classList.remove('active');
            }
          });
        </script>

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-content">

        <!-- ***** Banner Carousel Start ***** -->
        <style>
              /* Banner Style */
              .main-banner {
                  background-image: url("<?= base_url('public/assets/images/baner2.svg'); ?>");
                  background-position: center center;
                  background-size: cover;
                  min-height: 380px;
                  border-radius: 23px;
                  padding: 80px 60px;
                  color: #fff;
                  transition: background 0.3s ease;
              }

              .main-banner h6 {
                  font-size: 20px;
                  font-weight: 400;
                  margin-bottom: 25px;
              }

              .main-banner h4 {
                  font-size: 45px;
                  text-transform: uppercase;
                  margin-bottom: 25px;
              }

              .main-banner h4 em {
                  font-style: normal;
                  color:rgb(34, 31, 32);
              }

              .main-button a {
                  background-color:rgb(43, 20, 28);
                  padding: 12px 30px;
                  color: #fff;
                  text-decoration: none;
                  border-radius: 5px;
                  font-weight: 500;
                  transition: background-color 0.3s ease;
              }

              .main-button a:hover {
                  background-color:rgb(180, 168, 112);
              }

              /* Controles del carrusel */
              .carousel-control-prev,
              .carousel-control-next {
                  top: 50%;
                  transform: translateY(-50%);
                  width: 40px;
                  height: 40px;
                  background-color: rgba(41, 39, 39, 0.4); /* Fondo semitransparente */
                  border-radius: 50%;
                  z-index: 1001;
              }

              .carousel-control-prev {
                  left: -50px;
              }

              .carousel-control-next {
                  right: -50px;
              }

              .carousel-control-prev-icon,
              .carousel-control-next-icon {
                  filter: invert(1); /* Hace los íconos blancos */
              }

              /* Responsive Design */
              @media (max-width: 767px) {
                  .main-banner {
                      padding: 50px 20px;
                  }

                  .main-banner h4 {
                      font-size: 30px;
                  }

                  .main-button a {
                      padding: 10px 20px;
                  }
              }
          </style>
      </head>

          <!-- Carrusel -->
          <div id="bannerCarousel" class="carousel slide main-banner" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="carousel-item active">
                      <div class="row">
                          <div class="col-lg-7">
                              <div class="header-text">
                                  <h6>Bienvenido a Sal de Apuros</h6>
                                  <h4><em>Sorteos</em> regalos <br>y mucho más</br></h4>
                                  <div class="main-button">
                                      <a href="browse.html">¡Suscríbete ya!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Slide 2 -->
                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-lg-7">
                              <div class="header-text">
                                  <h6>Bienvenido a Sal de Apuros</h6>
                                  <h4><em>Sorteos</em> regalos <br>y mucho más</br></h4>
                                  <div class="main-button">
                                      <a href="browse.html">¡Suscríbete ya!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Slide 3 -->
                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-lg-7">
                              <div class="header-text">
                                  <h6>Bienvenido a Sal de Apuros</h6>
                                  <h4><em>Sorteos</em> regalos <br>y mucho más</br></h4>
                                  <div class="main-button">
                                      <a href="browse.html">¡Suscríbete ya!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Controles del carrusel -->
              <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </button>
          </div>

          <!-- JS de Bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      </head>
      <body>
      <div class="container py-4">
      <section class="most-popular">
  <div class="container">
    <div class="row" id="productos-container">
      <?php foreach ($productos as $index => $producto): ?>
        <?php $extra_class = ($index >= 8) ? 'hidden-producto d-none' : ''; ?>
        <div class="col-lg-3 col-sm-6 <?= $extra_class ?>">
          <div class="item">
            <img src="<?= base_url('public/assets/images/' . $producto->foto) ?>" alt="<?= $producto->titulo ?>">
            <h4><?= $producto->titulo ?><br><span><?= substr($producto->detalle, 0, 20) ?>...</span></h4>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-4">
      <button id="ver-mas-btn" class="btn btn-primary">Ver más</button>
      <button id="ver-menos-btn" class="btn btn-secondary d-none">Ver menos</button>
    </div>
  </div>
</section>

<!-- Script para Ver más / Ver menos -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const verMasBtn = document.getElementById('ver-mas-btn');
  const verMenosBtn = document.getElementById('ver-menos-btn');
  const productosOcultos = document.querySelectorAll('.hidden-producto');

  verMasBtn.addEventListener('click', function() {
    productosOcultos.forEach(producto => producto.classList.remove('d-none'));
    verMasBtn.classList.add('d-none');
    verMenosBtn.classList.remove('d-none');
  });

  verMenosBtn.addEventListener('click', function() {
    productosOcultos.forEach(producto => producto.classList.add('d-none'));
    verMasBtn.classList.remove('d-none');
    verMenosBtn.classList.add('d-none');
  });
});
</script>
      </div>

      <style>
        /* Animación de Hover para las imágenes */
        .thumb {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .thumb:hover {
            transform: scale(1.05); /* Hace que la imagen se amplíe un poco */
            box-shadow: 0 4px 20px rgba(0,0,0,0.2); /* Sombra suave */
        }

        .thumb img {
            width: 100%;
            height: auto;
            transition: all 0.3s ease;
        }

        .thumb:hover img {
            transform: scale(1.1); /* Aumenta el tamaño de la imagen en hover */
        }

        /* Animación de las letras al pasar el mouse */
        .hover-effect h6 {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .thumb:hover .hover-effect h6 {
            opacity: 1;
        }

        /* Carrusel */
        .owl-carousel .item {
            transition: transform 0.5s ease;
        }

        /* Transiciones suaves */
        .owl-carousel .owl-stage-outer {
            overflow: hidden;
        }

        .owl-carousel .owl-item {
            transition: transform 0.3s ease;
        }

        /* Títulos de las secciones */
        .heading-section h4 {
            font-size: 30px;
            font-weight: bold;
        }

        /* Estilo para los premios */
        .owl-carousel .item h4 {
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }

        .owl-carousel .item ul {
            list-style: none;
            padding: 0;
            margin-top: 5px;
        }

        .owl-carousel .item ul li {
            font-size: 14px;
        }
        
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Ganadores Start ***** -->
                    <section class="ganadores">
    <h4>Nuestros Ganadores</h4>
    <div class="owl-carousel owl-theme">
        <!-- Ganador 1 -->
        <div class="item">
            <div class="thumb">
                <video class="video" controls id="video1">
                    <source src="<?= base_url() ?>public/assets/images/lucia.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <h4 class="nombre-ganador">Lucía Martínez</h4>
            </div>
        </div>

        <!-- Ganador 2 -->
        <div class="item">
            <div class="thumb">
                <video class="video" controls id="video2">
                    <source src="<?= base_url() ?>public/assets/images/mari.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <h4 class="nombre-ganador">Mary González</h4>
            </div>
        </div>

        <!-- Ganador 3 -->
        <div class="item">
            <div class="thumb">
                <video class="video" controls id="video3">
                    <source src="<?= base_url() ?>public/assets/images/sarita.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <h4 class="nombre-ganador">Sarita López</h4>
            </div>
        </div>

        <!-- Ganador 4 -->
        <div class="item">
            <div class="thumb">
                <video class="video" controls id="video4">
                    <source src="<?= base_url() ?>public/assets/images/cintia.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <h4 class="nombre-ganador">Cintia Ramírez</h4>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        var owl = $(".owl-carousel");

        // Inicializa el carrusel
        owl.owlCarousel({
            items: 3, // Mostrar tres elementos a la vez
            loop: true, // Hacerlo infinito
            autoplay: false, // Desactivamos el autoplay automático
            autoplayTimeout: 5000, // Tiempo entre slides
            autoplayHoverPause: true, // Pausar en hover
            dots: true, // Mostrar puntos de navegación
            nav: true, // Mostrar flechas de navegación
            margin: 10, // Separación entre elementos
        });

        // Desactivar el avance mientras un video se está reproduciendo
        owl.on('changed.owl.carousel', function(event) {
            // Pausar todos los videos cuando el carrusel cambie
            $('video').each(function() {
                this.pause();
            });

            var currentItem = event.item.index;
            var currentVideo = $('#video' + (currentItem + 1))[0];

            // Reproducir el video actual
            currentVideo.play();
            currentVideo.onended = function() {
                owl.trigger('next.owl.carousel'); // Avanzar al siguiente ganador cuando termine el video
            };
        });

        // Detener todos los videos cuando se haga clic en uno para evitar que se reproduzcan al mismo tiempo
        $('video').on('play', function() {
            // Pausar los otros videos si no son el actual
            $('video').each(function() {
                if (this !== $(this)[0]) { // Verificar si el video no es el actual
                    this.pause(); // Pausar los otros videos
                }
            });
        });

        // Iniciar el primer video al cargar
        $('#video1')[0].play();
    });
</script>

<style>
    .ganadores {
        text-align: center;
        margin: 40px 0;
    }

    h4 {
        margin-bottom: 30px; /* Añadir margen inferior para separar del contenido */
        font-size: 28px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Sombra en el texto */
    }

    .thumb {
        position: relative;
        overflow: hidden;
        width: 100%;
        max-width: 250px; /* Ajustar el tamaño de los videos */
        margin: 0 auto;
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        background-color: #fff; /* Fondo blanco */
    }

    .video {
        width: 100%;
        height: auto; /* Mantener la proporción original */
        border-radius: 10px; /* Bordes redondeados */
    }

    .nombre-ganador {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
        text-transform: uppercase; /* Convertir a mayúsculas */
        padding: 5px 0;
        background-color: #f5f5f5; /* Fondo gris suave */
        border-radius: 5px; /* Bordes redondeados */
        margin-bottom: 20px; /* Espaciado en la parte inferior */
    }

    /* Estilo responsivo */
    @media (max-width: 768px) {
        .owl-carousel .item {
            max-width: 80%;
        }
        .nombre-ganador {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .owl-carousel .item {
            max-width: 100%;
        }
        .nombre-ganador {
            font-size: 14px;
        }
    }
</style>

                    <!-- ***** Ganadores End ***** -->

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de jQuery y OwlCarousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Inicialización de OwlCarousel -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 3,
                margin: 10,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                },
                smartSpeed: 1000,  // Añade suavidad al deslizamiento
                nav: true, // Añadir controles de navegación
                navText: ["<", ">"], // Opcional: personaliza los textos de navegación
            });
        });
    </script>

<style>
        /* Estilos generales para la sección */
        #pasos-suscripcion {
            background-color: #f7f7f7;
            padding: 40px 0;
        }

        .step {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        .step:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .step-title {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .step p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }

        .step-icon {
            font-size: 3rem;
            color: #007bff;
            margin-top: 20px;
        }

        /* Estilo para hacer la sección más atractiva */
        #pasos-suscripcion .row {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        /* Para dispositivos móviles */
        @media (max-width: 768px) {
            #pasos-suscripcion .row {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Animación de entrada */
        .step.animate {
            transform: translateY(0);
            opacity: 1;
            transition: all 0.5s ease-out;
        }

        .step {
            transform: translateY(50px);
            opacity: 0;
        }
    </style>
</head>
<body>

<style>
        /* Estilos generales para la sección */
        #pasos-suscripcion {
            background-color:rgb(41, 39, 39); /* Fondo gris suave */
            padding: 60px 0; /* Espaciado superior e inferior */
            font-family: 'Arial', sans-serif; /* Tipografía moderna */
            border-radius: 20px; /* Bordes redondeados */
        }

        /* Estilo para cada paso (card) */
        .step {
            background-color:rgb(255, 255, 255); /* Fondo blanco para cada card */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra sutil */
            transition: all 0.3s ease-in-out; /* Transición para el efecto hover */
            text-align: center; /* Alineación centrada del texto */
            padding: 30px; /* Espaciado dentro de la card */
            margin-bottom: 20px; /* Espaciado entre las cards */
            margin-left: 30px; /* Espaciado a la izquierda */
            margin-right: 30px; /* Espaciado a la derecha */
        }

        /* Efecto al pasar el mouse sobre el paso (hover) */
        .step:hover {
            transform: translateY(-15px); /* Mueve la card hacia arriba */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); /* Aumenta la sombra */
        }

        /* Estilo para el título dentro de cada paso */
        .step-title {
            font-size: 1.6rem; /* Tamaño del texto más grande */
            color: #007bff; /* Color azul para los títulos */
            margin-bottom: 15px; /* Espaciado debajo del título */
            font-weight: bold; /* Negrita para el título */
        }

        /* Estilo para la descripción del paso */
        .step p {
            font-size: 1.1rem; /* Tamaño del texto para la descripción */
            color: #666; /* Color gris para el texto */
            margin-bottom: 20px; /* Espaciado inferior */
            line-height: 1.6; /* Altura de línea para mejor lectura */
        }

        /* Estilo para los íconos dentro de cada paso */
        .step-icon {
            font-size: 4rem; /* Tamaño grande para los íconos */
            color: #007bff; /* Color azul para los íconos */
            margin-top: 20px; /* Espaciado superior del ícono */
            transition: transform 0.3s ease; /* Transición para el efecto hover */
        }

        /* Efecto al pasar el mouse sobre el ícono */
        .step:hover .step-icon {
            transform: scale(1.1); /* Aumenta el tamaño del ícono */
        }

        /* Estilo para la disposición de las cards */
        #pasos-suscripcion .row {
            display: flex; /* Usamos flexbox para la distribución */
            justify-content: space-evenly; /* Espaciado uniforme entre las cards */
            margin-top: 30px; /* Espaciado superior de las cards */
        }

        /* Estilos para dispositivos móviles */
        @media (max-width: 768px) {
            #pasos-suscripcion .row {
                flex-direction: column; /* Apilamos las cards verticalmente */
                align-items: center; /* Centra las cards */
            }

            .step {
                width: 100%; /* Las cards ocupan todo el ancho disponible */
                margin-bottom: 30px; /* Espaciado entre las cards */
            }
        }

        /* Animación para los pasos cuando entran en vista */
        .step.animate {
            transform: translateY(0); /* Restablece la posición al hacer scroll */
            opacity: 1; /* Hace visible el paso */
            transition: all 0.5s ease-out; /* Transición suave */
        }

        /* Estilo inicial para los pasos antes de que entren en vista */
        .step {
            transform: translateY(50px); /* Desplaza los pasos hacia abajo inicialmente */
            opacity: 0; /* Hace invisible el paso inicialmente */
        }

    </style>
</head>
<body>

   <!-- Sección de los pasos para suscribirse -->
<section id="pasos-suscripcion" class="py-5">
    <!-- Título de la sección -->
    <h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: white;">Pasos para Suscribirte</h2>
    
    <!-- Contenedor de los pasos (imagenes) -->
    <div class="row">
        <!-- Paso 1: Registrarse -->
        <div class="col-md-4 mb-4">
            <div class="step shadow-sm p-4">
            <img src="<?= base_url() ?>public/assets/images/12.svg" alt="Paso 1: Registrarse" class="img-fluid step-img">
            </div>
        </div>

        <!-- Paso 2: Yapear -->
        <div class="col-md-4 mb-4">
            <div class="step shadow-sm p-4">
            <img src="<?= base_url() ?>public/assets/images/13.svg" class="img-fluid step-img">
            </div>
        </div>

        <!-- Paso 3: ¡Listo! -->
        <div class="col-md-4 mb-4">
            <div class="step shadow-sm p-4">
            <img src="<?= base_url() ?>public/assets/images/14.svg" alt="Paso 3: ¡Listo!" class="img-fluid step-img">
            </div>
        </div>
    </div>
</section>

<!-- Script para animación de los pasos cuando entran en vista -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pasos = document.querySelectorAll('.step'); // Selecciona todas las cards de pasos
        window.addEventListener('scroll', function() { // Detecta el scroll
            const scrollPosition = window.scrollY + window.innerHeight; // Posición actual del scroll
            pasos.forEach(function(paso) { // Recorre cada paso
                // Si el paso está dentro del área visible del viewport
                if (scrollPosition > paso.offsetTop + 100) {
                    paso.classList.add('animate'); // Añade la clase 'animate' para que aparezca
                }
            });
        });
    });
</script>

<style>
    /* Estilo de las imágenes de los pasos */
    .step-img {
        width: 100%; /* Asegura que la imagen ocupe todo el ancho disponible */
        height: auto; /* Mantiene la proporción de la imagen */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra suave alrededor de las imágenes */
    }

    /* Estilo responsivo */
    @media (max-width: 768px) {
        .step-img {
            max-width: 90%; /* Reducción del tamaño de las imágenes en pantallas pequeñas */
        }
    }
</style>

<!-- Sección de Planes Vigentes -->
<section id="planes-vigentes" class="py-5" style="background-color: #f3f4f7;">
    <h2 class="text-center mb-4" style="font-family: 'Roboto', sans-serif; color: #333; font-weight: bold;">Nuestros Planes Premium</h2>
    
    <div class="row justify-content-center">
        <!-- Plan Mensual -->
        <div class="col-md-5 col-lg-4 mb-4">
            <div class="card shadow-lg rounded-4 border-0 p-4" style="background: linear-gradient(135deg, #6c7ae0, #5d64de); color: white;">
                <h3 class="card-title text-center mb-4" style="font-size: 1.8rem;">Plan Mensual</h3>
                <p class="text-center mb-4" style="font-size: 1.1rem;">Accede a todo el contenido exclusivo de manera mensual</p>
                <h4 class="text-center mb-4" style="font-size: 2.5rem; font-weight: bold;">$15.00</h4> <!-- Precio -->
                <ul class="text-center" style="font-size: 1.1rem;">
                    <li>Participación en sorteos mensuales</li>
                    <li>Acceso a 2 productos exclusivos cada mes</li>
                    <li>10% de descuento en productos seleccionados</li>
                    <li>Asistencia prioritaria 24/7</li>
                </ul>
                <div class="text-center mt-4">
                    <button class="btn btn-light text-primary px-5 py-2 rounded-pill" style="font-weight: 600;">Suscríbete</button>
                </div>
            </div>
        </div>

        <!-- Plan Anual -->
        <div class="col-md-5 col-lg-4 mb-4">
            <div class="card shadow-lg rounded-4 border-0 p-4" style="background: linear-gradient(135deg, #f46b45, #eea849); color: white;">
                <h3 class="card-title text-center mb-4" style="font-size: 1.8rem;">Plan Anual</h3>
                <p class="text-center mb-4" style="font-size: 1.1rem;">Obtén acceso ilimitado a todos los beneficios por un año entero</p>
                <h4 class="text-center mb-4" style="font-size: 2.5rem; font-weight: bold;">$150.00</h4> <!-- Precio -->
                <ul class="text-center" style="font-size: 1.1rem;">
                    <li>Participación en sorteos mensuales y anuales</li>
                    <li>Acceso ilimitado a todos los productos</li>
                    <li>25% de descuento en productos seleccionados</li>
                    <li>Soporte VIP garantizado en 24 horas</li>
                </ul>
                <div class="text-center mt-4">
                    <button class="btn btn-light text-primary px-5 py-2 rounded-pill" style="font-weight: 600;">Suscríbete</button>
                </div>
            </div>
        </div>
    </div>

</section>

<style>
    /* Diseño general */
    #planes-vigentes {
        background-color: #f3f4f7; /* Fondo gris claro */
        padding: 80px 0;
        border-radius: 12px; /* Bordes redondeados */
    }

    .card {
        border-radius: 12px; /* Bordes más redondeados */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra suave */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-left: 20px; /* Espaciado a la izquierda */
        margin-right: 20px; /* Espaciado a la derecha */
    }

    .card:hover {
        transform: translateY(-10px); /* Efecto hover: eleva la card */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Aumenta la sombra */
    }

    .card-title {
        font-size: 1.6rem; /* Título grande */
        font-weight: bold;
        color: white;
        margin-bottom: 15px;
    }

    .card ul {
        list-style: none;
        padding-left: 0;
        font-size: 1rem;
        line-height: 1.8;
    }

    .card ul li {
        margin-bottom: 10px; /* Espaciado entre los elementos de la lista */
    }

    .card h4 {
        font-size: 2.5rem; /* Tamaño de texto para el precio */
        font-weight: bold;
        color: #fff; /* Color blanco para el precio */
        margin-bottom: 20px; /* Espaciado debajo del precio */
    }

    .btn-primary {
        background-color: #007bff; /* Color azul para el botón */
        border: none;
        padding: 10px 20px;
        border-radius: 30px; /* Bordes redondeados */
        font-weight: bold;
        letter-spacing: 1px;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Color más oscuro al hacer hover */
    }

    .btn-light {
        background-color: white;
        color: #007bff;
        font-weight: 600;
    }

    .btn-light:hover {
        background-color: #f0f0f0;
    }

    /* Para hacer los planes más responsivos */
    @media (max-width: 768px) {
        .card {
            padding: 20px; /* Reducción de padding en pantallas pequeñas */
        }

        .card-title {
            font-size: 1.5rem; /* Reducir tamaño del título en pantallas pequeñas */
        }

        .card h4 {
            font-size: 2rem; /* Reducir tamaño del precio en pantallas pequeñas */
        }
    }

    @media (max-width: 576px) {
        .col-md-5 {
            margin-bottom: 15px; /* Ajuste del espaciado entre cards */
        }

        .card-title {
            font-size: 1.4rem; /* Ajustar aún más el tamaño de los títulos en pantallas muy pequeñas */
        }

        .card h4 {
            font-size: 1.8rem; /* Reducir más el precio en pantallas pequeñas */
        }
    }
</style>

<!-- Sección de Próximos Sorteos para No Suscriptores -->
<section id="proximos-sorteos" class="py-5" style="background-color: #f4f6fc;">
    <h2 class="text-center mb-4" style="font-family: 'Roboto', sans-serif; color: #2C3E50; font-weight: bold; font-size: 2rem;">Próximos Sorteos</h2>
    <p class="text-center mb-5" style="font-size: 1.1rem; color: #34495E;">¡Participa en nuestros sorteos para ganar premios increíbles! Solo necesitas seguirnos y realizar algunas acciones simples.</p>

    <div class="row justify-content-center">
        <!-- Sorteo 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded-4 border-0" style="background-color: #ffffff; transition: transform 0.3s ease;">
                <img src="<?= base_url() ?>public/assets/images/acer.png" class="card-img-top" alt="Sorteo 1" style="border-radius: 12px; object-fit: cover; height: 200px; width: 100%; max-height: 250px;">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold; color: #2C3E50;">Super Smartphone</h5>
                    <p class="card-text text-center" style="font-size: 1.1rem; color: #7F8C8D;">Participa por un Smartphone de última generación. ¡Solo tienes que seguirnos!</p>
                    <p class="text-center" style="font-size: 1rem; color: #95A5A6;"></p>
                </div>
            </div>
        </div>

        <!-- Sorteo 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded-4 border-0" style="background-color: #ffffff; transition: transform 0.3s ease;">
                <img src="<?= base_url() ?>public/assets/images/camarapro.jpg" class="card-img-top" alt="Sorteo 2" style="border-radius: 12px; object-fit: cover; height: 200px; width: 100%; max-height: 250px;">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold; color: #2C3E50;">Cámara Profesional</h5>
                    <p class="card-text text-center" style="font-size: 1.1rem; color: #7F8C8D;">Participa por una cámara profesional de alta calidad.</p>
                    <p class="text-center" style="font-size: 1rem; color: #95A5A6;"></p>
                </div>
            </div>
        </div>

        <!-- Sorteo 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded-4 border-0" style="background-color: #ffffff; transition: transform 0.3s ease;">
                <img src="<?= base_url() ?>public/assets/images/viaje.jpg" class="card-img-top" alt="Sorteo 3" style="border-radius: 12px; object-fit: cover; height: 200px; width: 100%; max-height: 250px;">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold; color: #2C3E50;">Viaje Todo Pago</h5>
                    <p class="card-text text-center" style="font-size: 1.1rem; color: #7F8C8D;">Gana un viaje todo pago a un destino turístico espectacular.</p>
                    <p class="text-center" style="font-size: 1rem; color: #95A5A6;"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Instrucciones para participar -->
    <div class="text-center mt-5">
        <h3 style="font-family: 'Roboto', sans-serif; color: #2C3E50; font-size: 1.8rem;">¡Es fácil participar!</h3>
        <ul class="list-unstyled" style="font-size: 1.1rem; color: #34495E; line-height: 1.8;">
            <li><i class="fas fa-thumbs-up" style="color: #5D6D7E;"></i> Da "Me gusta" a nuestra página</li>
            <li><i class="fas fa-share" style="color: #5D6D7E;"></i> Comparte nuestros sorteos en tus redes</li>
            <li><i class="fas fa-heart" style="color: #5D6D7E;"></i> Recomienda a tus amigos para ganar más oportunidades</li>
        </ul>
        <p style="font-size: 1.1rem; color: #2C3E50;"><strong>¡No te lo pierdas!</strong> Solo tienes que seguir estos pasos para tener la oportunidad de ganar.</p>
    </div>
</section>

<!-- Incluir FontAwesome para los íconos -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
    /* Estilo para la sección de sorteos */
    #proximos-sorteos {
        background-color: #f4f6fc;
        padding: 60px 0;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #2C3E50;
    }

    .card-body {
        padding: 20px;
    }

    .card-text {
        font-size: 1.1rem;
        color: #7F8C8D;
    }

    .text-center ul {
        padding-left: 0;
        font-size: 1.1rem;
        color: #34495E;
        list-style: none;
    }

    .text-center ul li {
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .text-center ul li i {
        margin-right: 10px;
        color: #5D6D7E;
    }

    /* Responsividad */
    @media (max-width: 768px) {
        .col-md-4 {
            margin-bottom: 15px;
        }
    }
</style>

        <!-- ***** Banner Start ***** -->
        <style>
        /* Banner solo con imagen */
        .image-banner {
            position: relative;
            background-image: url('<?= base_url() ?>public/assets/images/baner1.svg'); 
            background-size: cover;
            background-position: center;
            height: 500px; 
            margin-top: 100px; 
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        /* Responsive */
        @media (max-width: 768px) {
            .image-banner {
                height: 350px; /* Ajusta la altura del banner en dispositivos móviles */
            }
        }
    </style>
</head>
<body>

<div class="image-banner"></div> <!-- Solo la imagen, sin texto -->

</body>
        <!-- ***** Banner End ***** -->

              </div>
            </div>
          </div>
        </div>

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <p>Copyright © 2025 <a href="#">INTRANET</a> Company. Todos los derechos reservados. 
                <br>Hecho por Digital Go Perú. <a href="https://templatemo.com" target="_blank" title="free CSS templates"></a> <a href="https://themewagon.com" target="_blank" ></a></p>
              </div>
            </div>
          </div>
        </footer>

        <!-- Scripts -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/tabs.js"></script>
        <script src="assets/js/popup.js"></script>
        <script src="assets/js/custom.js"></script>

      </body>

      </html>

        <!-- Bootstrap core JavaScript -->
        <script type=text/javascript src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
        <script type=text/javascript src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script type=text/javascript src="<?=base_url()?>public/assets/js/isotope.min.js"></script>
        <script type=text/javascript src="<?=base_url()?>public/assets/js/owl-carousel.js"></script>
        <script type=text/javascript src="<?=base_url()?>public/assets/js/tabs.js"></script>
        <script type=text/javascript src="<?=base_url()?>public/assets/js/popup.js"></script>
        <script type=text/javascript src="<?=base_url()?>public/assets/js/custom.js"></script>


        </body>

      </html>
