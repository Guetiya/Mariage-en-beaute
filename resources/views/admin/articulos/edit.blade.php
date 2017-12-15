<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$articulo->titulo}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>{{$articulo->titulo}}</h1>
      <form class="col-md-5" action="/admin/article/{{$articulo->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" value="{{$articulo->titulo}}" class="form-control">
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

        <div class="form-group">
            <label for="resumen">Resumen</label>
            <input type="text" name="resumen" id="resumen" value="{{$articulo->resumen}}" class="form-control">
            @if ($errors->has('resumen'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get('resumen') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea id="contenido" rows="12" cols="80" class="form-control" placeholder="contenido" name="contenido">{{$articulo->contenido}}</textarea>
            @if ($errors->has('contenido'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get('contenido') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="form-group">
            <select name="category_id">
                @foreach ($categories as $category)
                    @if ($category->id == $articulo->id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($errors->has('image'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get('image') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <img src="{{ asset('storage/' . $articulo->image) }}" alt="" width="100px">

        <div class="form-group">
          <form action="/admin/article/{{$articulo->id}}" method="post" >
              {{ csrf_field() }}
              {{ method_field('patch') }}
              <button type="submit" name="button" class="btn btn-primary">Editar</button>
          </form>
        </div>

        <div class="form-group">
          <form action="/admin/article/{{$articulo->id}}" method="post">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <button type="submit" name="button" class="btn btn-primary">Borrar</button>
          </form>
        </div>
      </form>
    </div>
  </body>
</html>
