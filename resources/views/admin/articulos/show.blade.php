<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> {{$articulo->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Contenido de {{$articulo->name}} n'est pas utile</h1>

      <div class="form-group">
          <label for="titulo">Nombre</label>
          <input type="text" name="titulo" id="titulo" value="{{$articulo->name}}" class="form-control">
          @if ($errors->has('titulo'))
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->get('titulo') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>

      <div class="">
          Resumen : {{$articulo->resumen}}
      </div>

      <div class="">
          Contenido : {{$articulo->contenido}}
      </div>

      <div class="">
          Categoría_id : {{$articulo->category_id}}
      </div>

      <div class="">
          <img src="{{ asset('storage' . $articulo->image) }}" alt="" width="100px">
      </div>

      <form action="/admin/article/{{$articulo->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit">Borrar</button>
      </form>

    </div>
  </body>
</html>
