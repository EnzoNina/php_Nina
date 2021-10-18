<?php
/*Datos*/
  $numero=9360088335;
  $correo="ninaenzo70@gmail.com";
  $direccion="Tacna y Arica 160, Arequipa 04001";
  $autor="Enzo Nina";
  $empresa="SolMath";
  /*Cursos*/
  $servicio1="Introduccion a la matematica para Ingenieria";
  $servicio2="Matematica para Ingenieros I";
  $servicio3="Matematica para Ingenieros II";
  $servicio4="Calculo Para la Toma de Decisiones";
  /*Cursos introduccion*/ 
  $maintro1="Vectores";
  $maintro2="Numeros Complejos";
  $maintro3="Funciones";
  $maintro4="Limites";
  $maintro5="Derivadas";
  $maintro6="Integrales";
  /*Cursos mate 1*/
  $mateuno1="Funciones Reales";
  $mateuno2="Limites y Continuidad";
  $mateuno3="Derivada";
  $mateuno4="Integral Indefinida";
  $mateuno5="Integral Definida";
  $mateuno6="Aplicaciones de la Derivada";
  /*Cursos mate 2*/
  $matedos1="Integrales Especiales";
  $matedos2="Coordenadas Polares";
  $matedos3="Superficies en R3";
  $matedos4="Centro de Masa";
  $matedos5="Area de una Superficie";
  $matedos6="Integrales Triples";
  /*Cursos Calculo*/
  $cal1="Ecuaciones Diferenciales de Primer Orden";
  $cal2="Ecuaciones Diferenciales de Orden Superior";
  $cal3="La Transformada de Laplace";
  $cal4="Ecuaciones Lineales";  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SolMath</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
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

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i><?php echo "$correo"?></a></li>
            <li><a href="#"><i class="fa fa-phone"></i><?php echo "$numero"?></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
              <li class="scroll-to-section"><a href="#about">Acerca</a></li>
              <li class="scroll-to-section"><a href="#services">Servicios</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Proyectos</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="#contact">Contactanos</a></li> 
              <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Cotiza aqui</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>SolveMath</h6>
                    <h2>Resolvemos tu tarea de Matematica</h2>
                    <p>Envianos tu tarea a traves de un mensaje y se la mandaremos resulenta en un plazo de 1 dia</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Cotiza aqui</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec-v2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/about-dec-v2.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>Acerca</h6>
                  <h4>Que es Solve<em>Math</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>Somos una empresa con mas de 5 años de experiencia dedicada a la solucion de tareas de matematica. Por motivos de seguridad nuestros trabajadores y clientes seran de forma anonima</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Confiable</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Incognito</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Recomendado</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Nuestros Servicios</h6>
            <h4>Que soluciones <em>Proporcionamos</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        <?php echo "$servicio1"; ?>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-02.png" alt=""></span>
                        <?php echo "$servicio2"; ?>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        <?php echo "$servicio3"; ?>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                        <?php echo "$servicio4"; ?>
                      </div>
                    </div>
                    
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                              <?php echo "<h4>$servicio1</h4>";?>                                
                                <p>Base lógica y teórica que desarrolla el pensamiento abstracto y las capacidades de razonamiento lógico matemático necesarios para la solución de problemas de ingeniería.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> <?php echo  "$maintro1"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$maintro2"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$maintro3"; ?></span>
                                  <span><i class="fa fa-check"></i><?php echo  "$maintro4"; ?></span> <span><i class="fa fa-check"></i> <?php echo  "$maintro5"; ?></span> <span><i class="fa fa-check"></i> <?php echo  "$maintro6"; ?></span></div>                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                              <?php echo "<h4>$servicio2</h4>";?>
                                <p>Desarrollar habilidades y destrezas para el análisis, interpretación y aplicación de herramientas matemáticas orientados a elaborar modelos explicativos de la gran variedad de fenómenos físicos que faciliten la solución de problemas a un nivel científico en el campo de la ingeniería </p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> <?php echo  "$mateuno1"; ?></span> <span><i class="fa fa-check"></i> <?php echo  "$mateuno2"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$mateuno3"; ?> </span>
                                  <span><i class="fa fa-check"></i> <?php echo  "$mateuno4"; ?>  </span> <span><i class="fa fa-check"></i> <?php echo  "$mateuno5"; ?>  </span> <span><i class="fa fa-check"></i> <?php echo  "$mateuno6"; ?> </span></div>                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-02.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                              <?php echo "<h4>$servicio3</h4>";?>
                                <p> La formación básica de las técnicas del cálculo de una variable y varias variables que permita a los estudiantes resolver problemas afines a su especialidad. Así mismo la interpretación e implementación de modelos matemáticos relacionados al campo de la ingeniería.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> <?php echo  "$matedos1"; ?>  </span> <span><i class="fa fa-check"></i> <?php echo  "$matedos2"; ?>  </span> <span><i class="fa fa-check"></i> <?php echo  "$matedos3"; ?> </span>
                                  <span><i class="fa fa-check"></i> <?php echo  "$matedos4"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$matedos5"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$matedos6"; ?>  </span></div>                              
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                              <?php echo "<h4>$servicio4</h4>";?>
                                <p>Desarrollo de un pensamiento analítico en relación a la modelación de problemas en el ámbito de la ingeniería. El estudiante podrá brindar soluciones a diversas situaciones complejas descritas a través de los temas desarrollados, con lo cual adicionará a su perfil profesional un interesante criterio científico.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> <?php echo  "$cal1"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$cal2"; ?> </span> <span><i class="fa fa-check"></i> <?php echo  "$cal3"; ?> </span>
                                  <span><i class="fa fa-check"></i> <?php echo  "$cal4"; ?> </span></div>                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-04.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>                    
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Nuestros Trabajos</h6>
            <h4>Mira nuestros recientes <em>Trabajos</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/matematica1.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Matematica Basica</h4>                  
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/matematica2.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Derivadas</h4>                  
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/matematica3.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Integrales</h4>                  
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/matematica4.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Numeros Complejos</h4>                  
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/matematica5.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Ecuaciones Diferenciales</h4>                  
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contactanos</h6>
            <h4> Con solo 1 clic <em>Ahora</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <!--Formulario con el metodo post-->
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v2.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.3131792238187!2d-71.54266875018506!3d-16.40891334268316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424af6f9123759%3A0x36d3c64416898a86!2sUniversidad%20Tecnol%C3%B3gica%20del%20Peru%20(SALO)!5e0!3m2!1ses-419!2spe!4v1634225903830!5m2!1ses-419!2spe" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#"><?php echo "$numero" ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#"> <?php  echo "$correo" ?> </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#"><?php echo "$direccion" ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Nombre" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu correo electronico" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Asunto" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Mensaje" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button  name="register" type="submit" id="form-submit" class="main-button "> Envia tu mensaje ahora </button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- Formulario base de datos-->
  <?php 
    include("registrar.php");
  ?>
</body>
</html>