{{-- {{dd($services)}} --}}
@extends("layouts.miLayout")
@section("contenido")
  <title>Prestación {{$category->name}}</title>
  <div class="container main" id="color">
      <div class="row">
        <div class="contenidoMaquillaje col-sm-12">
            <h2 style="text-align:center;">{{$category->name}}</h2>
            <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
        </div>
      </div>
      <div class="row">
        <div class="contenidoMaquillaje col-sm-8">
          <h4 class="tituloNut">Descripción : </h4>
            <p>{{$category->description}}</p>
        </div>
        <div class="foto col-sm-4">
          <a href="/galeria"><img src="{{ asset('storage/' . $category->image) }}" alt="" width="" height="250px"></a>
          <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a class="link" href="/article/category" style="color:#ff9980"> Articulos </a></p>
          <p><span class="glyphicon glyphicon-hand-right"style="color:#ff9980"></span><a class="link" href="/posteos" style="color:#ff9980"> Testimonios</a></p>
        </div>
      </div>

      <div class="row">
        <div class="prestacionesMaquillaje col-sm-12">
          <h2>Prestaciones</h2>
          <hr noshade>
          <!-- <hr size=4 width=50% align=center >  -->
          <div class="row col-md-6 col-md-offset-1">
              <div class="prestacionesMaquillaje col-sm-6">
                <ul>
                  @foreach ($services as $key => $service)
                    <li><span>{{$service->name}}</span></li>
                  @endforeach
                </ul>
              </div>
              <div class="prestacionesMaquillaje col-sm-6">
                <ul>
                  @foreach ($services as $key => $service)
                    <li>{{$service->duration}}</li>
                  @endforeach
                </ul>
              </div>
          </div>
          <a class="btn btn-primary btn-lg" href="/precios" role="button" style="background-color:#ff9980;border:none;">Ver Precios</a>
        </div>
      </div>
  </div>
@endsection
