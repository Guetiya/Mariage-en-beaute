@extends('layouts.miLayout')
@section("contenido")
    <title> {{$articulo->titulo}}</title>
  <div class="container main" id="color">

    <div class="rowBelleza">
      <div class="contenidoArticulos col-sm-12">
          <h5 style="text-align:center;">{{$articulo->titulo}}</h5>
          <p>Delphine B / <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">{{ $articulo ->created_at->format('d.m.Y')}}</time></p>

          <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
      </div>
    </div>

    <div class="rowBelleza">
      <div class="articulos col-sm-12">
        <p><em> {{$articulo->resumen}} </em></p>
        {{-- <p>Avant de choisir les produits de maquillage, il convient de bien préparer la peau pour optimiser la tenue de celui-ci le jour J. </p> --}}
      </div>
    </div>

    <div class="rowBelleza">
      <div class="articulos col-sm-12">
        <p><em>{{$articulo->contenido}}
        </em></p>
        {{-- <p>Avant de choisir les produits de maquillage, il convient de bien préparer la peau pour optimiser la tenue de celui-ci le jour J. </p> --}}
      </div>
    </div>
    <div class="rowBelleza">
      <div class="articulos col-sm-9">
        <a href="/galeria"><img src="images/fotomaquillaje.jpg" alt="" width="200px" height="250px"></a>
        <img src="{{ asset('storage/' . $articulo->image) }}" alt="" width="100px">
        <h3>Et vous? </h3>
        <p></p>
      </div>
    </div>
  </div>

@endsection
