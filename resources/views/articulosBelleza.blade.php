@extends("layouts.miLayout")

@section("contenido")
      <div class="container main" id="color">
        <div class="row">
          <div class="contenidoArticulos col-sm-12">
              <h2 style="text-align:center;">Artículos</h2>
              <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-10">
            <a href="articulosMaquillaje.php" style="text-decoration:none;"><h4 class="categoria"> <span class="glyphicon glyphicon-heart"></span> Categoría Peinado</h4></a>
            <h3 class="titulo">¡Taller de peinados a la moda francesa!</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>Lorem ipsum ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida id...
            <a href="/articuloPeinado1" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/coiffeuse.jpg" alt="" width="120px" height="150px">
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-10">
            <a href="/articulosMaquillaje" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-heart"></span>Categoría Maquillaje</h4></a>
<h3 class="titulo">¡Taller de peinados a la moda francesa!</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>¿Sabes que el cuido de la piel es muy importante por haber un maquillaje que te va a quedar durante un tiempo?
            ¿Saber como cuidarla? ¿Estás seguro que lo que estás haciendo esta bien?
            En este artículo vas a encontrar las respuestas a esas preguntas para que tu piel sea linda...
            <a href="/articuloMaquillaje1" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/maquillaje.jpg" alt="" width="150px" height="150px">
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-10">
            <a href="/articulosMaquillaje" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-heart"></span>Categoría CEI</h4></a>
<h3 class="titulo">¡Taller de peinados a la moda francesa!</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>¿Sabes que los colores tienen un impacto muy fuerte sobre tu cara? y según lo que estas poniendo te puede hallagar la tez.
            Te propongo conocer mas sobre el tema de la colorimetría...
            <a class="leerMas" style="color:#ff9980" href="/articuloAsesoria1">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/CEI.jpg" alt="" width="120px" height="160px">
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-10">
            <a href="articulosMaquillaje.php" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-apple"></span>Categoría alimentación</h4></a>
<h3 class="tituloNut">Introdución a la alimentación</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam,xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Excepteur sint occaecat cupida id...
            <a href="/articuloNutricion1" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/fotoNut.jpg" alt="" width="150px" height="150px">
          </div>
        </div>
      </div>
  @endsection
