@extends("layouts.miLayout")

@section("contenido")
      <div class="container main" id="color">
        <div class="row">
          <div class="contenidoArticulos col-sm-12">
              <h2 style="text-align:center;">Ultimos artículos</h2>
              <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
          </div>
        </div>
        <div class="row">
          <div class="articulos col-sm-8">
            <h4 id="belleza"><span class="glyphicon glyphicon-heart"></span>Categoría Belleza</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a class="btn btn-primary btn1-lg" href="./articulosBelleza.php" role="button" style="background-color:#ff9980;border:none;">Leer más</a>
          </div>
          <div class="foto col-sm-4">
            <img src="images/fotomaquillaje.jpg" alt="" width="150px" height="200px">
          </div>
        </div>
        <div class="row">
          <div class="articulos col-sm-8">
            <h4 id="nutricion"><span class="glyphicon glyphicon-apple"></span>Categoría nutrición</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <!-- <img src="images/fotomaquillaje.jpg" alt="" width="200px" height="250px"> -->
            <a class="btn btn-primary btn1-lg" href="#" role="button" style="background-color:#ff9980;border:none;">Leer más</a>
          </div>
          <div class="fotoNutricion col-sm-4">
            <img src="images/fotoNutricion.jpg" alt="" width="150px" height="200px">
          </div>

        </div>
      </div>
  @endsection
