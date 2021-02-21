<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aimava</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="./index.php"><img src="imgs/logo.png" alt="logo_aimava" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#home">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#service">Servicios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#hiw">Como trabajamos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#wcs">Comentarios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                     </li>
                     <li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                           <input type="search" placeholder="Search">
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="imgs/slide3.jpeg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Mantiemiento Jardín</h2>
                     <h4>¡Tú jardín simpre verde!</h4>
                     <p>Con nuestro equipo de jardineros dejaremos tu jardín siempre muy vistoso y verde.</p>
                     <a class="blue_bt" href="#">Solicítalo ahora</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="imgs/slide2.jpeg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Tratamientos de agua</h2>
                     <h4>¿Te imaginas siempre tener la piscina limpia todo el año?</h4>
                     <p>Con nuestros tratamiento de agua y nuestro servicio de mantenimineto de la piscina no voleras a ver a tu piscina con ese molesto color verde.</p>
                     <a class="blue_bt" href="#">Solicítalo ahora</a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="imgs/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="imgs/right.png" alt="#" />
            </a>
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4>Sobre Aimava</h4>
                  <h3 style="text-transform: none !important">Una empresa dedicada a su cliente</h3>
                  <p>Somos una empresa familiar, nos dedicamos a el mantenimiento de jardines para comunidades grandes y particulares, llevamos el mantenimiento de las escaleras,ascensores,cristales, en general nos encargamos del mantenimiento y la limpieza de ellas.</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="imgs/about.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">Como trabajamos?</h3>
                  <p class="white_font">Tenemos a gente especializada en limpieza de las ecaleras, dejandolas brillantes y con un aroma que las demás comunidades vecinas querrán.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/blog1.jpg" alt="#" />
                  <h3 class="blog_head">Mantenimiento piscina</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/blog6.jpg" alt="#" height="345px" />
                  <h3 class="blog_head">Limpieza escaleras</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/blog3.jpg" alt="#" />
                  <h3 class="blog_head">Reparaciones</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="service" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Nuestros Servicios</h3>
                  <p>Como amamos lo que hacemos, somos los mejores en lo que hacemos, por ello marcamos la diferencia del resto de empresas.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 service_blog">
                  <img class="margin_top_30 img-responsive" src="imgs/s1.jpg" alt="#" />
                  <h3 class="blog_head">Piscinas</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="imgs/s2.jpg" alt="#" />
                  <h3 class="blog_head">Limpieza</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="imgs/s3.jpg" alt="#" />
                  <h3 class="blog_head">Reparaciones</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="imgs/s4.jpg" alt="#" />
                  <h3 class="blog_head">Jardines</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="imgs/s5.jpg" alt="#" />
                  <h3 class="blog_head">Limpieza Altura</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Contáctanos</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <form method="post">
                        <input type="text" name="nombre" placeholder="Nombre" />
                        <input type="email" name="adress" placeholder="correo" />
                        <input type="tel" name="num_telf" placeholder="Número de contacto" />
                        <input type="submit" name="register" value="Enviar">
                     </form>
                     <?php 
                     include("./actions/registrar.php");
                     ?>
                  </div>
                  
               </div>
               <div class="col-md-5 text_align_center">
                  <img class="img-responsive" src="imgs/jardinero-png.png" alt="#" />
               </div>
            </div>
         </div>
      </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <h3>Comentarios de nuestros clientes</h3>
                  <p>Estos son algunos de los comentarios que nuestros clientes dicen de nuestros servicios.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-11">
                  <div class="full testimonial_blog">
                     <p>Antonio Martinez</p>
                     <p>Antes teniamos contratada una empresa de mantenimiento de la comunidad y se nota la eficacia de la limpieza y como huele al acabar, se nota la diferencia del resto.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="imgs/logo.png" alt="#" />
                     <p style="margin-top: 5px;">Si quires saber más sobre nuestra empresa no dudes contactar.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navegación</h4>
                     <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Ubicación</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase"> Info. Contacto</h4>
                     <p><strong>Numero de contacto:</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" /><a href="tel:+34 971 103 168"> 971 103 168</a> </p>
                     <p><strong>Nuesta oficina:</strong></p>
                     <p><img src="imgs/location.png" alt="#" />Palmanyola, Calle de los Naranjos </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2021  Design by <a href="https://progra-ma.com/">PROGRA-MA</a></p>
         </div>
      </footer>
      <script>
         window.onload=function(){alert('Bienvenido a nuestra página');}
         window.onunload=function(){alert('Vuelva en otro momento');}
      </script>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
   </body>
</html>