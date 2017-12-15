<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categoría {{$category->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Editar {{$category->name}}</h1>
    <form class="col-md-5" action="/admin/categories/{{$category->id}}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{ method_field('patch') }}
      <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control">
          @if ($errors->has('name'))
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->get('name') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>

      <div class="form-group">
          <label for="description">Descripción</label>
          <input type="text" name="description" id="description" value="{{$category->description}}" class="form-control">
          @if ($errors->has('description'))
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->get('description') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>

      <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" id="image" class="form-control">
          <img src="{{ asset('storage/' . $category->image) }}" alt="" width="" height="250px">
          {{-- <input type="text" name="image" id="image" value="{{$category->image}}" class="form-control"> --}}
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

      <div class="form-group">
        <form action="/admin/categories/{{$category->id}}" method="post" >
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <button type="submit" name="button" class="btn btn-primary">Editar</button>
        </form>
      </div>

      <div class="form-group">
        <form action="/admin/categories/{{$category->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit" name="button" class="btn btn-primary">Borrar</button>
        </form>
      </div>
    </form>
  </body>
</html>
