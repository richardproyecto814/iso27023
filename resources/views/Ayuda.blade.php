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
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>HOMEISO-IT</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>iSO 27032</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                
                                    <a href="{{ url('/identificarnuevo') }}">IDENTIFICAR</a>
                                </li>
                                <li>
                                    <a href="{{ url('/proteger8') }}">PROTEGER</a>
                                </li>

                                <li>
                                      <a href="{{ url('/detectar') }}">DETECTAR</a>
                                </li>
                                <li>
                                     <a href="{{ url('/responder') }}">RESPONDER</a>
                                </li>
                                <li>
                                     <a href="{{ url('/recuperar') }}">RECUPERAR</a>
                                </li>
                            </ul>
                        </li>
                     
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>EMPRESA</a>
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
                                
                                <a href="{{ url('/identificarnuevo') }}">IDENTIFICAR</a>
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
                            </ul>
                        </li>
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>AYUDA</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
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
                    <strong><h4>Politica de datos</h4> </strong>

                    </div>
                    <div class="alert alert-success" role="alert">
                        
											<h4 class="alert-heading">Cookies para el funcionamiento de la web</h4>
											<p>Se utilizan para el control de la aparición y aceptación del propio aviso de gestión de cookies ("Cookies propias del aviso de gestión de cookies"), 
                                                para almacenar un identificador único de sesión ("Cookies de sesión"), 
                                                y para el correcto funcionamiento del portal ("Cookies de Batck API" y "Cookies de balanceo de carga").</p>
											<hr>
											<p class="alert-heading">
                                            <p>Banner aviso</p>
                                            <p>Siempre activas</p>
                                            <p> Cookies de balanceo de carga</p>
                                            <p>Cookies de Batch API</p>
                                            <p>Cookies de Google (reCaptcha)</p>
                                            <p>Cookies de sesión</p>
                                            <p>Cookies propias del aviso de gestión de cookies</p>
                                            </p>
					</div>
                
                  
                    <div class="alert alert-primary" role="alert">
											<h4 class="alert-heading">Cookies para elementos multimedia</h4>
											<p>Se utilizan para registrar las preferencias del reproductor de vídeo del usuario al ver vídeos incrustados de YouTube y Vimeo ("Cookies de YouTube y Vimeo"). 
                                            Se utilizan por el widget de visualización de tweets (Cookies de Twitter).</p>
											<hr>
											<p class="alert-heading">
                                            <p>Cookies de YouTube y Vimeo</p>
                                            <p>Cookies de Twitter</p>
                                        
                                            </p>
					</div>

                    <div class="alert alert-success" role="alert">
											<h4 class="alert-heading">Cookies para analítica y servicios </h4>
											<p>"Cookies de Google Analytics" se utilizan para generar un identificador de usuario único, utilizado para hacer recuento de cuántas veces visita el sitio un usuario, 
                                                así como la fecha de la primera y la última vez que visitó la web. Registran la fecha y hora de acceso a cualquiera de las páginas del portal. Comprueban la necesidad de mantener la sesión de un usuario abierta o crear una nueva. Identifican la sesión del usuario,
                                                 para recoger la ubicación geográfica aproximada del ordenador que accede al portal. "Cookies de Siteimprove" se utiliza para el funcionamiento del servicio Siteimprove. Almacena información sobre el uso del sitio web. Se utiliza para recopilar estadísticas sobre las visitas al sitio, por ejemplo, 
                                                 la última vez que visitó el sitio. 
                                                 La cookie contiene una identificación generada aleatoriamente que le permite reconocer su navegador cuando visita un sitio. La cookie no almacena ninguna información personal,
                                                 y solo se utiliza para análisis web.</p>
											<hr>
											<p class="alert-heading">
                                            <p>Cookies de Google Analytics</p>
                                            <p>Cookies de Siteimprove</p>
                                        
                                            </p>
					</div>


                      
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
                    <p class="text-muted m-b-15">
                    <div class="alert alert-success" role="alert">
                        
                    <p> <h4>1. Política de Privacidad:</h4>
- Debes tener una política de privacidad clara y accesible en tu página web. Esta política debe explicar qué datos personales recopilas, cómo los utilizas, 
cuál es la base legal para su procesamiento y cómo los usuarios pueden ejercer sus derechos de privacidad.</p>

<p><h4>2. Consentimiento Informado:</h4>
- Debes obtener el consentimiento informado de los usuarios antes de recopilar cualquier tipo de dato personal. 
Esto puede realizarse mediante un banner o pop-up que solicite el consentimiento cuando los usuarios ingresen a tu sitio.</p>

<p><h4>3. Tipos de Datos Recopilados:</h4>
- Enumera los tipos de datos que recopilas en tu página web, como direcciones IP, cookies, información de contacto, datos demográficos, etc.</p>

<p><h4>4. Propósito del Tratamiento de Datos:</h4>
- Indica claramente por qué estás recopilando los datos. Por ejemplo, puede ser para mejorar la experiencia del usuario, enviar boletines informativos, procesar pedidos, etc.</p>

<p><h4>5. Retención de Datos:</h4>
- Especifica durante cuánto tiempo conservarás los datos recopilados y los criterios para determinar dicho período.</p>

<p><h4>6. Seguridad de Datos:</h4>
- Describe las medidas de seguridad que implementas para proteger los datos de los usuarios. Esto puede incluir encriptación, acceso restringido, auditorías de seguridad, etc.

<p><h4>7. Compartir Datos:</h4>
- Si compartes datos con terceros (como proveedores de servicios o socios), detalla quiénes son esos terceros y con qué propósito se comparten los datos.</p>

<p><h4>8. Derechos de los Usuarios:</h4>
- Informa a los usuarios sobre sus derechos, como el derecho de acceso, rectificación, eliminación y oposición. Explícales cómo pueden ejercer estos derechos.</p>

<p><h4>9. Cookies y Tecnologías de Seguimiento:</h4>
- Si utilizas cookies u otras tecnologías de seguimiento, explícales qué tipos de cookies utilizas, para qué fines y cómo los usuarios pueden administrar sus preferencias de cookies.</p>

<p><h4>10. Cambios en la Política de Privacidad:</h4>
- Aclara que la política de privacidad puede actualizarse y cómo informarás a los usuarios sobre dichos cambios.</p>

<p><h4>11. Menores de Edad:</h4>
- Si tu sitio web está dirigido a menores de edad o recopila información de ellos, debes tener en cuenta las regulaciones especiales sobre protección de datos para este grupo.</p>
                      
                    
                  </div>
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
