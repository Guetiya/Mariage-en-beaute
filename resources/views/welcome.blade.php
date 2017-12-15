@extends("layouts.miLayout")

@section("contenido")
  <title>Mariage en beauté</title>
  <div class="container main" id="color">
      <div class="row">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/galeria/Andrea.jpg" alt="" width="200px" height="200px">
            <div class="carousel-caption">
              <a href="/quienSoy">
                <h3>¿Tienes una ceremonia?</h3>
                <p>¿Te falta inspiración para tu peinado, maquillaje, e incluso tu vestuario? <strong> <em>Mariage en beauté </em></strong> te brinda consejos de belleza y te ofrece prestaciones personalizadas.
                <!-- <strong><em>Mariage en beauté</em></strong> juega sobre la combinación de un estilo adaptado con colores adecuadamente escogidos para resaltar tu belleza, con el fin de que irradies el día D.--> <br>
                Porque cada uno merece una belleza a medida, <strong><em>Mariage en beauté</em></strong> contribuye a descubrir la tuya.
              </a>
            </div>
          </div>
          <div class="item">
            <img src="images/galeria/Andrea3.jpg" alt="" width="294px">
            <div class="carousel-caption">
              <a href="/peinados">
                <h3>Peinados</h3>
                <p>Del pelo rizado a tieso, de largo a corto…. <strong><em>Mariage en beauté</em></strong>
                  te crea el peinado a tu medida, <br>solamente para vos, para ese día tan esperado.</p>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="images/galeria/Andrea4.jpg" alt="" width="247px">
            <div class="carousel-caption">
              <a href="/maquillaje">
                <h3>Maquillaje</h3>
                <p>Maquillaje natural o uno más atrevido…. A través de su práctica y sus paletas de
                  colores, <br><strong><em>Mariage en beauté</em></strong> escoge los que intensifican tus rasgos
                  para que tu cara se ilumine el día D.</p>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="images/robe.jpg" alt="" width="200px" height="266px">
            <div class="carousel-caption">
              <a href="/asesoriaDeImagen">
                <h3>Asesoria de imagen</h3>
                <p><strong><em>Mariage en beauté</em></strong> combina las formas, las texturas, los estilos
                y los colores con el fin de que <br>estén plenamente acorde a tu vestuario.</p>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="images/fotoNut.jpg" alt="" width="260px" height="">
            <div class="carousel-caption">
              <a href="/nutricion">
                <h3>Nutrición</h3>
                <p><strong><em>Mariage en beauté</em></strong> asocia tambien el bien estar porque la belleza empieza a partir de lo que <br>
                hay adentro de vos. Cuidar su interior para cuidar su belleza.</p>
              </a>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
      </div>

      <div class="row">
        <div class="articulosWelcome col-sm-4">
          <a href="/article/category" style="text-decoration:none;"><h2 style="text-align:center;" id="articulos">Artículos welcome</h2></a>
            @foreach ($articulos as $key => $articulo)
              <h4><span class="glyphicon glyphicon-heart"></span>Categoría Belleza</h4>
              <h3 class="tituloBelleza">{{$articulo->titulo}}</h3>
              <p>{{$articulo->resumen}}poner el ultimo articulo de la categoria belleza...<a href="/article/{{$articulo->id}}">leer más</a></p>
            @endforeach
            <a href="/article/category/4" style="text-decoration:none;"><h4><span class="glyphicon glyphicon-apple"></span>Categoría Nutrición</h4></a>
            <h3 class="tituloBelleza">{{$articulo->titulo}}</h3>
            <p>{{$articulo->resumen}}... <a href="/article/{{$articulo->id}}">leer más</a></p>
        </div>

        @include('layouts.posteos.posteosVista')
        <div class="testimonios col-sm-4">
          <h2 class=""> Novedades </h2>
{{--dommage c'est sympa mais la chanson démarre toute seule--}}
          {{-- <div class="media col-lg-12">
            <div class="media-left">
              <iframe width="250" height="200" src="videos/gregoire.webm" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Un tigre domestique dans son canapé</h4>
              Admirez ce noble animal...
            </div>
          </div> --}}
          <video width="250" height="200" controls poster="videos/gregoire.jpg" >
              <source src="videos/gregoire.webm" type="video/webm" >
              [ fallback text ]
          </video>
        </div>
      </div>
  </div>
@endsection