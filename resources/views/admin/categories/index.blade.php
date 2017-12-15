<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar las categorias</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Las categorias son :</h1>
      @if (count($categories))
          <ul class="list-group">
              @foreach($categories as $category)
                  <li class="list-group-item">
                      <a href="/admin/categories/{{$category->id}}">{{$category->name}}</a>
                  </li>
              @endforeach
          </ul>
      @else
          <p>No hay categorias asociadas!</p>
      @endif
    </div>
  </body>
</html>
