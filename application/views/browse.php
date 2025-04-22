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


          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Featured</em> Games</h4>
                </div>
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-01.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-02.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-03.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-01.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-02.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="<?= base_url() ?>public/assets/images/featured-03.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- ***** TOP DOWNLOAEDE ***** -->
            <div class="col-lg-4">
              <div class="top-downloaded">
<!-- *****<div class="heading-section">
                  <h4><em>Top</em> Downloaded</h4>
                </div>
                <ul>
                  <li>
                    <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                    <h4>Fortnite</h4>
                    <h6>Sandbox</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                    <h4>CS-GO</h4>
                    <h6>Legendary</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                    <h4>PugG</h4>
                    <h6>Battle Royale</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                </ul>
                <div class="text-button">
                  <a href="profile.html">View All Games</a>
                </div>
              </div>
            </div> ***** -->
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Start Stream Start ***** -->
          <div class="start-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>How To Start Your</em> Live Stream</h4>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="<?= base_url() ?>public/assets/images/service-01.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Go To Your Profile</h4>
                    <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout.</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="<?= base_url() ?>public/assets/images/service-02.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Live Stream Button</h4>
                    <p>If you wish to support us, you can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="<?= base_url() ?>public/assets/images/service-03.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>You Are Live</h4>
                    <p>You are not allowed to redistribute this template's downloadable ZIP file on any other template collection website.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="profile.html">Go To Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Start Stream End ***** -->

          <!-- ***** Live Stream Start ***** -->
          <div class="live-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Most Popular</em> Live Stream</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-01.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="<?= base_url() ?>public/assets/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> KenganC</span>
                    <h4>Just Talking With Fans</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-02.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="<?= base_url() ?>public/assets/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> LunaMa</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-03.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="<?= base_url() ?>public/assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-04.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="<?= base_url() ?>public/assets/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> GangTm</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="streams.html">Discover All Streams</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Live Stream End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
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
