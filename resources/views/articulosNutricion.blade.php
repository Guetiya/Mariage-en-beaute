@extends("layouts.miLayout")

@section("contenido")
  <div class="container main" id="color">
        <div class="row">
          <div class="contenidoArticulos col-sm-12">
              <h2 style="text-align:center;">Artículos Nutrición</h2>
              <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
          </div>
        </div>
        <div class="rowNutricion">
          <div class="articulos col-sm-10">
            <!-- <a href="articulosMaquillaje.php" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-apple"></span>Relación entre la comida y las emociones</h4></a> -->
<h3 class="tituloNut"><span class="glyphicon glyphicon-apple"></span>Relación entre la comida y las emociones</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>Lorem ipsum ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida id...
            <a href="/articuloBelleza3" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/diet.jpg" alt="" width="180px" height="120px">
          </div>
        </div>
        <div class="rowNutricion">
          <div class="articulos col-sm-10">
            <!-- <a href="articulosMaquillaje.php" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-apple"></span>La importancia del desayuno</h4></a> -->
<h3 class="tituloNut"><span class="glyphicon glyphicon-apple"></span>La importancia del desayuno</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>halleluia ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e
            nulla pariatur. Excepteur sint occaecat cupida id e...
            <a href="/articuloBelleza2" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/petitDej.jpg" alt="" width="150px" height="120px">
          </div>
        </div>
        <div class="rowNutricion">
          <div class="articulos col-sm-10">
            <!-- <a href="articulosMaquillaje.php" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-apple"></span>Introdución a la alimentación</h4></a> -->
<h3 class="tituloNut"><span class="glyphicon glyphicon-apple"></span>Introdución a la alimentación</h3>
            <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam,xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Excepteur sint occaecat cupida id...
            <a href="/articuloNutricion1" style="color:#ff9980">leer más</a></p>
          </div>
          <div class="fotoArticulosBelleza col-sm-2">
            <img src="images/fotoNut.jpg" alt="" width="150px" height="150px">
            <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a href="/articulosBelleza" style="color:#ff9980" class="link"> Articulos Belleza</a></p>
          </div>
        </div>
      </div>
@endsection
