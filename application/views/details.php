<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link type=text/css href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/fontawesome.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/owl.css">
    <link rel="stylesheet" type=text/css href="<?=base_url()?>public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<style>
    /* Estilo para el Navbar */
      .main-nav {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #1e1e1e;
        z-index: 1000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease-in-out;
      }

      /* Estilo para el contenedor dentro del navbar */
      .main-nav .container {
        max-width: 100% !important;
        padding-left: 40px;
        padding-right: 40px;
      }

      /* Cuando hace scroll, agrandar el navbar */
      .main-nav.scrolled {
        padding: 15px 0;
        background-color: #111 !important;
      }

      /* Estilo del logo */
      .logo img {
        width: 25%;
        transition: all 0.3s ease;
      }

      /* Menú de navegación */
      .navbar-nav .nav-link {
        color: #bcbcbc !important;
        margin: 0 15px;
        transition: color 0.3s ease;
      }

      .navbar-nav .nav-link.active,
      .navbar-nav .nav-link:hover {
        color: #ff4081 !important;
      }

      

      /* animación al buscar */
      .search-input input {
        background-color: #222;
        border: none;
        color: white;
      }

      .search-input i {
        color: white;
      }

      /* desplazamiento */
      .main-nav {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #1e1e1e !important;
        opacity: 1 !important;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        
      }

      /* Espaciado del navbar 
      .header-area {
        background-color: #1e1e1e !important;
      }*/

      
      .main-nav * {
        background-color: transparent !important;
      }

      .navbar {
        padding: 20px 40px;
        border-radius: 0 0 25px 25px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        width: 100%;
      }

  
      .navbar-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
      }

      .navbar-nav li {
        display: inline-block;
      }
    </style>
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->

 <!-- ***** Header Area Start ***** -->
<header class="header-area">
    <nav class="main-nav navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center container-fluid">
            <!-- Logo (sin cambios) -->
            <a href="<?= base_url() ?>" class="logo">
                <img src="<?= base_url() ?>public/assets/images/logo-t2.png" alt="" style="width: 25%;">
            </a>

            <!-- Buscador (sin cambios) -->
            <div class="search-input">
                <form id="search" action="#">
                    <input type="text" placeholder="Escribe algo" id='searchText' name="searchKeyword" />
                    <i class="fa fa-search"></i>
                </form>
            </div>

            <!-- Menú Principal (optimizado) -->
            <ul class="nav">
              <!-- Elementos existentes (no los modifiques) -->
              <li><a href="<?= base_url() ?>">Inicio</a></li>
              <li><a href="<?= base_url('browse') ?>">Nosotros</a></li>
              <li><a href="<?= base_url('details') ?>">Beneficios</a></li>
              <li><a href="<?= base_url('streams') ?>">Tienda</a></li>
              
    <!-- Nuevo: Eventos SOLO para logueados -->
    <?php if($this->session->userdata('logueado')): ?>
        <li><a href="<?= base_url('eventos') ?>">Eventos</a></li>
    <?php endif; ?>
    
    <!-- Botón de Login/Logout (sin cambiar estructura) -->
    <?php if($this->session->userdata('logueado')): ?>
        <li><a href="<?= base_url('logout') ?>">Cerrar Sesión</a></li>
    <?php else: ?>
        <li><a href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
    <?php endif; ?>
</ul>
        </div>
    </nav>
</header>

          <!-- Botón de menú móvil -->
          <a class='menu-trigger'>
            <span></span>
          </a>
        </div>
      </nav>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- Aquí puedes añadir el resto de tu contenido -->
    <div class="content">
      <!-- Contenido aquí -->
    </div>

    <!-- Scripts de Bootstrap y JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      // Añadir la clase 'scrolled' al navbar cuando se haga scroll
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('.main-nav').addClass('scrolled');
        } else {
          $('.main-nav').removeClass('scrolled');
        }
      });
    </script>



  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="<?= base_url() ?>public/assets/images/feature-left.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-8">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/feature-right.jpg" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>Fortnite Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>Fortnite</h4>
                          <span>Sandbox</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                          <li><i class="fa fa-server"></i> 36GB</li>
                          <li><i class="fa fa-gamepad"></i> Action</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <img src="<?= base_url() ?>public/assets/images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="<?= base_url() ?>public/assets/images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="<?= base_url() ?>public/assets/images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="#">Download Fortnite Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="<?= base_url() ?>public/assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
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
