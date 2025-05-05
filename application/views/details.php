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
