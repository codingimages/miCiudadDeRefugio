<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="En miciudadderefugio.com puedes econtrar todo lo relacionado a nuestra iglesia. Dejanos amarte.">
  <meta name="keywords" content="iglesia ciudadad de refugio, pastores norma y omar quinones, dejanos amarte">
  <meta name="author" content="miciudadderefugio.com">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href=img/favicon.png>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <title>La oración es la mejor conexión</title>
</head>

<body>

  <!-- Navbar start -->
  <nav>
    <div class="nav-wrapper purple">
      <a href="" class="brand-logo left">Refugio</a>
      <a href="" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" id="navtext">
        <li class=""><a href="index.html">Inicio</a></li>
        <li class=""><a href="nosotros.html">Nosotros</a></li>
        <li class=""><a href="ministerios.html">Ministerios</a></li>
        <li class=""><a href="donaciones.html">Donaciones</a></li>
        <li class="active"><a href="contacto.php">Contacto</a></li>
        <li class=""><a href="eventos.html">Eventos</a></li>
        
      </ul>
    </div>
  </nav>

  <ul class="side-nav red-text" id="mobile-demo">
    <li><a href="index.html">Inicio</a></li>
    <li><a href="nosotros.html">Nosotros</a></li>
    <li><a href="ministerios.html">Ministerios</a></li>
    <li><a href="donaciones.html">Donaciones</a></li>
    <li class="active"><a href="contacto.php">Contacto</a></li>
    <li><a href="eventos.html">Eventos</a></li>
  </ul>
  <!-- Navbar ends -->

  <!-- Header start -->
  <div class = "materialboxed" class="container-fluid">
    <img id="banner"src="img/banner4.jpg">
  </div>
  <!-- Header ends -->



  <section class="section">
    <div class="container">
      <h3>¿Tienes preguntas?</h3>
      <p>Si tienes preguntas sobre nuestro ministerio, puedes conseguirnos a través de la siguiente información. Para nosotros es importante saber que estás bien, no dudes en comunicarte utilizando la información provista en esta página. Te esperamos.</p>
    </div>
  </section>

</head>

<body>
<div class="container formadecontacto center">
    <div class="row">
        <div class="col s12 m10">
            <div class="input-field">
                <h3 class="center">Forma de Contacto</h3>
                <div class="text-center">
                    <?php
                    
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    } else if(isset($_SESSION['msgFields'])){
                        echo $_SESSION['msgFields'];
                        unset($_SESSION['msgFields']);
                    }
                    
                    ?>
                </div>
                <form class = "col s12 m12 l12" action="SendGrid-API/f_process.php" method="post">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">person</i>
                            <label for="Name">Nombre<span>*</span></label>
                            <input type="text" name="name" class="input-field">
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <label for="Phone">Telefono<span>*</span></label>
                            <input type="text" name="phone" class="input-field">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <i class="material-icons prefix">mail</i>
                            <label for="Email">Correo Electronico<span>*</span></label>
                            <input type="text" name="email" class="input-field">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <i class="material-icons prefix">mode_edit</i>
                            <label for="Name">Mensaje<span>*</span></label>
                            <textarea class = "materialize-textarea" name="message" id="" cols="30" rows="10" class="input-field text-white"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn purple congreso">Enviar</button>
                    <br>
                </form>
            </div>
        </div>
        
    </div>
    
</div>

  <section class="section purple lighten-4">
    <div class="row">
      <div class="container">
        <div class="col s12 m4">
          <h5>Redes Sociales</h5>
          <ul>
            <li id="contacto"><a href="https://www.facebook.com/miciudadderefugio"> <i class="fab fa-facebook-f black-text flow-text"></i></a></li>
            <li id="contacto"> <a href="https://www.youtube.com/channel/UCufkwhR6pcTHY-yZUE7eJcg"><i class="fab fa-youtube black-text"></i></a></li>
          </ul>
        </div>
        <div class="col s12 m4">
          <h5 class="black-text">Teléfono</h5>
          <ul>
            <li class="black-text"><a class="black-text" href="tel:410-865-9882"><i class="material-icons">phone</i></li>
          </ul>
        </div>
        <div class="col s12 m4">
          <h5 class="black-text">Correo Electrónico</h5>
          <ul>
            <li class="white-text"><a class="black-text" href="mailto:ciudadderefugiomd16@gmail.com"><i class="material-icons">mail</i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class=" section purple lighten-5">
    <div class="container">
    <h3>Línea de Oración</h3>
    <p>Únete a nuestra cultura de oración y se parte de una iglesia que ora fervientemente a las <strong>5:00 AM</strong> de la mañana y <strong>8:30 PM</strong> de la noche.</p> <br>
    <ol>
      <li>Marca el número de teléfono <a class="purple-text" href="tel:7124510606">712-451-0606</a></li>
      <li>Ingresa el código 525298#</li>
      <li>Listo, ya eres parte de un grupo de intersesores que día tras día claman en oración al Dios de los milagros.</li>
    </ol>
    <p>Si las circunstancias te impiden unirte, oprime el siguiente botón y envíanos tu petición de oración, creemos en el Dios de los milagros.</p>
    </div>
  </section>


  <!-- Footer start -->
  <footer class="page-footer pink purple">

    <div class="container" id="footer">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Navegación</h5>
          <ul>
            <li><a class="white-text" href="index.html">Inicio</a></li>
            <li><a class="white-text" href="nosotros.html">Nosotros</a></li>
            <li><a class="white-text" href="ministerios.html">Ministerios</a></li>
            <li><a class="white-text" href="donaciones.html">Donaciones</a></li>
            <li><a class="white-text" href="contacto.php">Contacto</a></li>
            <li><a class="white-text" href="eventos.html">Eventos</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="col s12 l12">
        <h5 class="white-text">Gracias por tu apoyo</h5>
        <p class="white-text">Si somos de gran ayuda, tu también puedes ayudarnos con tus donaciones, De esta manera nos ayuda a continuar haciendo la obra que Dios nos llamó hacer. No importa la cantidad, toda donación es recibida con gran agradecimiento. Dios les bendiga.</p>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        <p> © 2018 Derechos reservados </p>
        <a class="white-text center" href="http://www.codingimages.com"> Creado por Coding Images</a>
      </div>
    </div>
  </footer>
  <!-- Footer ends -->


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    $('.pushpin-demo-nav').each(function() {
      var $this = $(this);
      var $target = $('#' + $(this).attr('data-target'));
      $this.pushpin({
        top: $target.offset().top,
        bottom: $target.offset().top + $target.outerHeight() - $this.height()
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".button-collapse").sideNav();
    });
  </script>
</body>

</html>
