<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar articulos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Los articulos son :</h1>
      @if (count($articulos))
          <ul class="list-group">
              @foreach($articulos as $articulo)
                  <li class="list-group-item">
                      <a href="/admin/article/{{$articulo->id}}">{{$articulo->titulo}}</a>
                  </li>
              @endforeach
          </ul>
      @else
          <p>No hay articulos asociados!</p>
      @endif
    </div>
  </body>
</html>
