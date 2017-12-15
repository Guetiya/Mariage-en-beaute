@extends('layouts.miLayout')
@section("contenido")
  <title>Artículos</title>
  <div class="container main" id="color">
    <div class="row">
      <div class="contenidoArticulos col-sm-12">
          <h2 style="text-align:center;">Artículos</h2>
          <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
      </div>
    </div>
    <div class="row">
      @foreach ($categories as $key => $category)
          <div class="rowBelleza">
            <div class="articulos col-sm-10">
              <a href="/article/category/{{$category->id}}" style="text-decoration:none;"><h4 class="categoria"> <span class="glyphicon glyphicon-heart"></span> Categoría {{$category->name}}</h4></a>
                  @foreach ($category->articulos as $key => $articulo)
                    <h3 class="titulo">{{$articulo->name}}</h3>
                  @endforeach
                  <p class="author"><strong>por Delphine B </strong>/ <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">{{$articulo->created_at->format('d.m.Y')}}</time>

              {{-- <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">{{ $articulo ->created_at->format('d.m.Y')}}</time> --}}
              {{-- <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time> --}}
      {{-- <hr width="50%">  --}}
              <p>{{$articulo->resumen}}...<a href="/article/{{$articulo->id}}" style="color:#ff9980">leer más</a></p></p>

            </div>
            <div class="fotoArticulosBelleza col-sm-2">
              <img src="{{ asset('storage/' . $category->image) }}" alt="" width="" height="150px">
            </div>
          </div>
      @endforeach
    </div>
  </div>
@endsection
