@extends("layouts.miLayout")

@section("contenido")
        <div class="container main" id="color">
          <div class="row">
            <div class="contenidoMaquillaje col-sm-12">
                <h2 style="text-align:center;">Nutrición</h2>
                <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
            </div>
          </div>
          <div class="row">
            <div class="contenidoMaquillaje col-sm-8">
              <h4 class="tituloNut">Descripción :</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="foto col-sm-4">
              <a href="/galeria"><img src="images/fotoNut.jpg" alt="" width="" height="250px"></a>
              <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a href="/articulosBelleza" style="color:#ff9980"> Articulos </a></p>
              <p><span class="glyphicon glyphicon-hand-right"style="color:#ff9980"></span><a href="/posteos" style="color:#ff9980"> Testimonios</a></p>
            </div>
          </div>
          <div class="row">
            <div class="prestacionesMaquillaje col-sm-12">
              <h2>Prestaciones</h2>
              <hr noshade>
              <!-- <hr size=4 width=50% align=center >  -->
              <ul>
                <li><span>Consultación privada</span> : duración 1 hora</li>
              </ul>
              <a class="btn btn-primary btn-lg" href="/precio#nutricion" role="button" style="background-color:#ff9980;border:none;">Ver Precios</a>
            </div>
            </div>
          </div>
      </div>
@endsection
