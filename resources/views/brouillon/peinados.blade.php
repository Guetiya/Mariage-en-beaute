@extends("layouts.miLayout")

@section("contenido")
        <div class="container main" id="color">
          <div class="row">
            <div class="contenidoMaquillaje col-sm-12">
                <h2 style="text-align:center;">Peinados</h2>
                <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
            </div>
          </div>
          <div class="row">
            <div class="contenidoMaquillaje col-sm-8">
              <h4 class="tituloNut">Descripción : </h4>
              <p>Chaque cérémonie reste un moment privilégié pour bénéficier d'une attention particulière pour se cheveux et j'ai toujours le plaisir de faire une coiffure selon les occasions pour dorloter et relaxer la personnes.</p>
            </div>
            <div class="foto col-sm-4">
              <a href="/galeria"><img src="images/coiffeuse.jpg" alt="" width="200px" height="250px"></a>
              <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a class="link" href="/articulosBelleza" style="color:#ff9980"> Articulos </a></p>
              <p><span class="glyphicon glyphicon-hand-right"style="color:#ff9980"></span><a class="link" href="/posteos" style="color:#ff9980"> Testimonios</a></p>
            </div>
          </div>
          <div class="row">
            <div class="prestacionesMaquillaje col-sm-12">
              <h2>Prestaciones</h2>
              <hr noshade>
              <!-- <hr size=4 width=50% align=center >  -->
              <ul>
                <li><span>Peinado de día</span> : duración 1 hora</li>
                <li><span>Peinado de noche</span> : duración 1 hora</li>
                <li><span>Peinado de novia</span> : duración 1 hora el día D (+ 2 pruebas)</li>
                <li><span>Peinado de niñas</span></li>
                <li><span>Cours d'auto-maquillage</span> : duración 1 hora </li>
                <li><span>Taller en grupo</span> : pedir informaciones </li>
              </ul>
              <a class="btn btn-primary btn-lg" href="/precio" role="button" style="background-color:#ff9980;border:none;">Ver Precios</a>
            </div>
            </div>
          </div>
      </div>
@endsection
