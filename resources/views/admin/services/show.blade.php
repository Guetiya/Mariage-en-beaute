<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categoría {{$service->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Contenido de {{$service->name}}</h1>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{$service->name}}" class="form-control">
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

      <div class="">
          Duración : {{$service->duration}}
      </div>

      <div class="">
          Precio : {{$service->price}}
      </div>

      <div class="">
          Categoría_id : {{$service->category_id}}
      </div>

      <div class="">
          Group_id : {{$service->group_id}}
      </div>

      <form action="/admin/service/{{$service->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit">Borrar</button>
      </form>
  </body>
</html>
