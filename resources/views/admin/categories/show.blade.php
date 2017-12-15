<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categoría {{$category->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Contenido de {{$category->name}}</h1>
      <h3>Articulos : </h3>
      <li>Poner los titulos de los articulos que corresponden</li>

      <h3>Descripción : </h3>
      <li>{{$category->description}}</li>

      <h3>Image : </h3>
      <img src="{{ asset('storage/' . $category->image) }}" alt="" width="100px">

      <h3>Servicios : </h3>
      <div class="row col-md-12 ">
          <div class="prestacionesMaquillaje col-sm-4">
            <ul>
              @foreach ($services as $key => $service)
                <li>{{$service->name}}</li>
              @endforeach
            </ul>
          </div>

          <div class="prestacionesMaquillaje col-sm-2">
            <ul>
              @foreach ($services as $key => $service)
                <li>{{$service->duration}}</li>
              @endforeach
            </ul>
          </div>

          <div class="prestacionesMaquillaje col-sm-2">
            <ul>
              @foreach ($services as $key => $service)
                <li>${{$service->price}}</li>
              @endforeach
            </ul>
          </div>

          <div class="prestacionesMaquillaje col-sm-2">
            <ul>
              @foreach ($services as $key => $service)
                <li>{{$service->category_id}}</li>
              @endforeach
            </ul>
          </div>

          <div class="prestacionesMaquillaje col-sm-2">
            <ul>
              @foreach ($services as $key => $service)
                <li>{{$service->group_id}}</li>
              @endforeach
            </ul>
          </div>
      </div>
    </div>
  </body>
</html>
