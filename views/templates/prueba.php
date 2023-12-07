


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="views/static/css/carousel.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>


  <div id=exbody>
    <script>
      "use strict";
      if (annyang) {
        // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
        //api google AIzaSyCer2C9iE2qvsnCOm6cjGlEuYJRvqw18y0
        //buscador facebook: https://www.facebook.com/search/top/?q=
        //buscador google: https://www.google.com/search?q=
        var commandos = {

            'abajo': function() {
             window.location.href = "#abajo";

          },
            'arriba': function() {
            window.location.href = "#";

          },
            'siguiente': function() {
            document.getElementById("siguiente").click();

          },
            'anterior': function() {
            document.getElementById("anterior").click();

          },
          'cabecera': function() {
            window.location.href = "#cabecera_1";

          },
          'imagen uno': function() {
            window.location.href = "#foto_1";

          },
          'imagen dos': function() {
            window.location.href = "#foto_2";

          },
          'imagen tres': function() {
            window.location.href = "#foto_3";

          },
          'enlace uno': function() {
            document.getElementById("enlace_1").click();

          },
          'enlace dos': function() {
            document.getElementById("enlace_2").click();

          },
          'enlace tres': function() {
            document.getElementById("enlace_3").click();

          },
          'buscar': function() {
            document.getElementById("buscador").select();
            document.getElementById("start-record-btn").click();

          },
          'buscar texto': function() {
            document.getElementById("enviar").click();

          },
          'facebook': function() {
            document.getElementById("facebook").click();
		  },
          'instagram': function() {
            document.getElementById("instagram").click();
		  },
          'como llego': function() {
            document.getElementById("llegar").click();
		  },
          'contacto': function() {
            document.getElementById("contacto").click();
		  },
          'nutricion': function() {
            document.getElementById("nutricion").click();
		  },
          'iniciar': function() {
            document.getElementById("ini").click();
		  },
          'compras': function() {
            document.getElementById("compras").click();
		  },
      'video':playVideo,
      'detener':pausaVideo,   
          'eliminar texto': function cambiaValores() {
            document.getElementById("buscador").value = "";
          }

        }

        // OPCIONAL: active el modo de depuración para un registro detallado en la consola
        annyang.debug();

        // Agregamos nuestros comandos a annyang.
        annyang.addCommands(commandos);

        //Establecemos el lenguaje, en mi caso es español de México (puedes ver la lista completa de lenguajes soportados aquí).
        annyang.setLanguage("es-AR");

        // Empezmaos a escuchar.
        annyang.start();
     } else {
    $(document).ready(function() {
      $('#unsupported').fadeIn('fast');
    });
  }


  var vid=document.getElementById("myvideo");
      function playVideo() {
        //alert("reproducion");
        vid.play();
		  };
      function pausaVideo() {
        vid.pause();
		  };
     var scrollTo = function(identifier, speed) {
    $('html, body').animate({
        scrollTop: $(identifier).offset().top
    }, speed || 1000);
  }
  </script>
  <!-- 
  <title>GYM UTN FRRo | Gimnasios de Calidad</title>-->
<h1 style="text-align: center;">EMPIEZA A SENTIRTE BIEN</h1>
<h3 style="text-align: center;">Esta pagina esta adaptada para personas que tengan disminucion visual. DI el titulo de cada seccion y te llevara solo con la voz a ellos.</h3>
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src=<?= "$URL/enlace1.jpg" ?> alt="Primer contenido">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Enlace 1</h1>
                <p>Prueba diciendo "enlace uno" para ir al enlace de stio UTN ROSARIO.</p>
                <p><a id="enlace_1" class="btn btn-lg btn-primary" href="https://www.frro.utn.edu.ar/" role="button">Saber mas aqui!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src=<?= "$URL/enlace2.jpg" ?> alt="Segundo contenido" >
            <div class="container">
              <div class="carousel-caption">
                <h1>Enlace 2</h1>
                <p>Prueba diciendo "enlace dos" para ir a mi facebook</p>
                <p><a id="enlace_2" class="btn btn-lg btn-primary" href="https://www.facebook.com/" role="button">UTN FRRo Facebook</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src=<?= "$URL/enlace3.jpg" ?> alt="Tercer contenido">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Enlace 3</h1>
                <p>Prueba diciendo "enlace tres" para ir a google con la busqueda.</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.google.com/maps/dir/-32.9383936,-60.6666752/utn+rosario/@-32.9463722,-60.6750393,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x95b7ab11d0eb49c3:0x11f1d3d54f950dd0!2m2!1d-60.6437319!2d-32.9544347" role="button">Google UTN Rosario</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" id="anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" id="siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>



      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4" id="cabecera_1">
            <img class="rounded-circle" src=<?= "$URL/imagen1.jpg" ?> alt="Generic placeholder image" width="140" height="140">
            <h2>Body Combat</h2>
            <p>El body combat es un programa de ejercicios cardiovasculares que se realiza en grupo y consiste en realizar movimientos de diferentes artes marciales como el taekwondo, karate, capoeira, muay thay (boxeo tailandés), tai chi o boxeo, entre otros, a través de coreografías con música en la que se pueden ejercitar brazos, hombros, espalda, piernas y abdominales, permitiendo así mejorar la flexibilidad, la fuerza, la coordinación y la resistencia cardiovascular.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src=<?= "$URL/imagen2.jpg" ?> alt="Generic placeholder image" width="140" height="140">
            <h2>Spinning</h2>
            <p>Con el spinning se trabajan múltiples músculos del cuerpo al mismo tiempo. Además de trabajar la parte cardiovascular y la masa muscular, las bicicletas indoor mejoran la parte física en general. Entrenamientos de bajo impacto, lo que significa que no habrá pesión sobre articulaciones y rodillas. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src=<?= "$URL/imagen3.jpg" ?> alt="Generic placeholder image" width="140" height="140">
            <h2>Zumba</h2>
            <p>zumba es una mezcla de ritmos latinos salsa, merengue, flamenco o bachata y ejercicios aeróbicos que se ha convertido en una de las rutinas de moda para perder peso.</p>
            <p><a class="btn btn-secondary" href="https://www.google.com/maps/dir/-32.9383936,-60.6666752/utn+rosario/@-32.9463722,-60.6750393,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x95b7ab11d0eb49c3:0x11f1d3d54f950dd0!2m2!1d-60.6437319!2d-32.9544347" role="button">Ver detalles &raquo;</a></p>
          </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette" id="foto_1">
          <div class="col-md-7">
            <h2 class="featurette-heading">Imagen 1. <span class="text-muted">"Imagen uno"</span></h2>
            <p class="lead">Con el comando de voz al decir Imagen uno, te llevara a esta imagen o contenido de imagen.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src=<?= "$URL/imagenGenerica.jpg" ?> alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="foto_2">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Imagen 2. <span class="text-muted">"Imagen dos"</span></h2>
            <p class="lead">Con el comando de voz al decir Imagen dos, te llevara a esta imagen o contenido de imagen.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src=<?= "$URL/imagengenerica2.jpg" ?> alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="foto_3">
          <div class="col-md-7">
            <h2 class="featurette-heading">Imagen 3. <span class="text-muted">"Imagen tres"</span></h2>
            <p class="lead">Con el comando de voz al decir Imagen tres, te llevara a esta imagen o contenido de imagen.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src=<?= "$URL/imagengenerica3.jpg" ?> alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Video 4. <span class="text-muted">"Video cuatro"</span></h2>
            <p class="lead">Con el comando de voz al decir video, te llevara a esta video o contenido de video.</p>
          </div>
          <div class="col-md-5 order-md-1">
<video width="300" height="300" id="myvideo" controls>
  <source src="video.mp4" type="video/mp4"/>
</video>

          </div>
        </div>

        <hr class="featurette-divider">

      </div>

<!--   
      <footer class="container" id="abajo">
        <button class="btn btn-outline-success my-2 my-sm-0" id="start-record-btn" title="Start Recording">Iniciar</button>
        <p id="recording-instructions">Iniciar <strong>Reconocimiento de voz</strong>.</p>
        <p class="float-right"><a href="#" id="arriba">Ir Arriba</a></p>
        <p>&copy; 2015-2018 JCWebMaster. &middot;</p>
      </footer>-->
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="script.js"></script>
</div>
