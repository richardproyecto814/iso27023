<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Badge</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
  

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
                
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <h4 class="name">Richard Mosquera</h4>
                    <a href="#">Cerrar sesión </a>
                </div>
           
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li>
                            <a href="{{ url('/HOMEISO') }}">
                                <i class="fas fa-chart-bar"></i>  HOMEISO-IT</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>iSO 27032</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{ url('/identificar') }}">IDENTIFICAR</a>
                                    
                                </li>
                                <li>
                                    <a href="{{ url('/proteger') }}">PROTEGER</a>
                                </li>

                                <li>
                                  <a href="{{ url('/detecter') }}">DETECTAR</a>
                            </li>
                                <li>
                                     <a href="{{ url('/responder') }}">RESPONDER</a>
                                </li>
                                <li>
                                     <a href="{{ url('/recuperar') }}">RECUPERAR</a>
                                </li>
                            </ul>
                        </li>
                     
                      
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>REGISTRO USUARIOS</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">INGRESO</a>
                                </li>
                                <li>
                                    <a href="register.html">REGISTRAR</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">OLVIDO DE CLAVE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>INFORME EVALUACION</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                
                                <a href="{{ url('/identificar') }}">IDENTIFICAR</a>
                            </li>
                            <li>
                                <a href="{{ url('/proteger8') }}">PROTEGER</a>
                            </li>

                            <li>
                                  <a href="{{ url('/detectar8') }}">DETECTAR</a>
                            </li>
                            <li>
                                 <a href="{{ url('/responder8') }}">RESPONDER</a>
                            </li>
                            <li>
                                 <a href="{{ url('/recuperar') }}">RECUPERAR</a>
                            </li>
                            <li>
                                 <a href="{{ url('/informegeneral') }}">INFORME GENERAL</a>
                            </li>
                            </ul>
                        </li>
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>AYUDA</a>
                                
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{ url('/ayuda') }}">Politicas de seguridad </a>
                                </li>
                                <li>
                                    <a href="badge.html">contactenos</a>
                                </li>
                                <li>
                                    <a href="tab.html">Manual</a>
                                </li>
                               
                               
                              
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                            
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Richard Mosquera</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Richard Mosquera</a>
                                                    </h5>
                                                    <span class="email">richardmosquera@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configuracion</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Cerrar sesion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                </header>
      <!-- HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">

                <div class="card">
                  <div class="card-header">
                   
                    <small>
                    <div class="card-header">
                    <strong>CASA ISO 27032</strong>
                  </div>
                      <img src="images/icon/logo richard.jpg" alt="John Doe" />
                      
                    </small>
                  </div>
                  
                </div>
                <!-- /# card -->


               

              </div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Politica de datos</strong>
                  </div>
                  <div class="card-body">
                    <p class="text-muted m-b-15">Este sitio web utiliza cookies propias y de terceros con el propósito de garantizar el correcto funcionamiento y la 
                      óptima visualización del contenido por parte de los usuarios. Además, las cookies nos permiten recopilar estadísticas que contribuyen a mejorar nuestros servicios, 
                      como se detalla en nuestra política de cookies disponible en la sección "Finalidad". Al continuar navegando en nuestro sitio, aceptas el uso de estas cookies. 
                      Si deseas cambiar tus preferencias de cookies o obtener más información sobre cómo las utilizamos,
                      te invitamos a explorar nuestra política de cookies en la sección correspondiente.
                      
                    <button type="button" class="btn btn-danger m-l-10 m-b-15">
                    <li>
                                
                                <a href="{{ url('/ayuda') }}">Enlace a la Política de Cookies</a>
                            </li>

                      <span class="badge badge-light"></span>
                    </button>
                  </div>

                <div class="card">
                  <div class="card-header">
                  <img src="images/icon/iso27032.jpg" alt="John Doe" />
                    
                  </div>
                
                  
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->

  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="vendor/slick/slick.min.js">
  </script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/animsition/animsition.min.js"></script>
  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="vendor/circle-progress/circle-progress.min.js"></script>
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
