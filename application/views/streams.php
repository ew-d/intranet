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

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Live</em> Streams</h4>
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
                      <img src="<?= base_url() ?>public/images/featured-02.jpg" alt="">
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
            <div class="col-lg-4">
              <div class="top-streamers">
                <div class="heading-section">
                  <h4><em>Top</em> Streamers</h4>
                </div>
                <ul>
                  <li>
                    <span>01</span>
                    <img src="<?= base_url() ?>public/assets/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; margin-right: 15px;">
                    <h6><i class="fa fa-check"></i> LahutaM</h6>
                    <div class="main-button">
                      <a href="#">Follow</a>
                    </div>
                  </li>
                  <li>
                    <span>02</span>
                    <img src="<?= base_url() ?>public/assets/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; margin-right: 15px;">
                    <h6><i class="fa fa-check"></i> Kengan</h6>
                    <div class="main-button">
                      <a href="#">Follow</a>
                    </div>
                  </li>
                  <li>
                    <span>03</span>
                    <img src="<?= base_url() ?>public/assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; margin-right: 15px;">
                    <h6><i class="fa fa-check"></i> Areluwa</h6>
                    <div class="main-button">
                      <a href="#">Follow</a>
                    </div>
                  </li>
                  <li>
                    <span>04</span>
                    <img src="<?= base_url() ?>public/assets/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; margin-right: 15px;">
                    <h6><i class="fa fa-check"></i> Omeg</h6>
                    <div class="main-button">
                      <a href="#">Follow</a>
                    </div>
                  </li>
                  <li>
                    <span>05</span>
                    <img src="<?= base_url() ?>public/assets/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; margin-right: 15px;">
                    <h6><i class="fa fa-check"></i> GangTeam</h6>
                    <div class="main-button">
                      <a href="#">Follow</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

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
                    <img src="<?= base_url() ?>public/assets/images/stream-05.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> Kengan Omeg</span>
                    <h4>Just Talking With Fans</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-06.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> LahutaMalc</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-07.jpg" alt="">
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
                    <img src="<?= base_url() ?>public/assets/images/stream-08.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> NewGangTeam</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-07.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> Kengan Omeg</span>
                    <h4>Just Talking With Fans</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-08.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> LahutaMalc</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-05.jpg" alt="">
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
                      <<img src="<?= base_url() ?>public/assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="<?= base_url() ?>public/assets/images/stream-06.jpg" alt="">
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
                    <span><i class="fa fa-check"></i> NewGangTeam</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="streams.html">Load More Streams</a>
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
