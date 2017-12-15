@extends('layouts.miLayout')
@section("contenido")
  {{-- <title>Artículos {{$category->name}}</title> --}}
  <div class="container main" id="color">
      <div class="rowBelleza">
        <div class="contenidoArticulos col-sm-12">
            {{-- <h2 style="text-align:center;">Artículos {{$category->name}}</h2> --}}
            <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
        </div>
      </div>
    @foreach ($articulos as $articulo)
      <div class="rowBelleza">
        <div class="articulos col-sm-10">
            <h3 class="tituloNut"><span class="glyphicon glyphicon-apple"></span>{{$articulo->titulo}}</h3>
            {{-- <a href="/article/{{$articulo->id}}" style="text-decoration:none;"><h3 class="titulo">{{$articulo->titulo}}</h3></a> --}}
            <p class="author"><strong>por Delphine B </strong>/ <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">{{$articulo->created_at->format('d.m.Y')}}</time>
            <p>{{$articulo->resumen}}...<a href="/article/{{$articulo->id}}" style="color:#ff9980">leer más</a></p>
        </div>
        <div class="articulos col-sm-2">
            <img class="img-circle" src="{{ asset('storage/' . $articulo->image) }}" alt="" width="" height="100px">
        </div>
      </div>
    @endforeach
  </div>
@endsection
