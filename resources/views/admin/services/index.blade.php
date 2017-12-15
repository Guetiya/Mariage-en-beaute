<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar los servicios</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Los servicios son :</h1>
        <div class="form-group col-xs-3">
          @if (count($services))
              <ul class="list-group">
                  @foreach($services as $service)
                      <li class="list-group-item">
                          <a href="/admin/service/{{$service->id}}">{{$service->name}}</a>
                      </li>
                  @endforeach
              </ul>
          @else
              <p>No hay servicios asociadas!</p>
          @endif
        </div>
        <div class="form-group col-xs-3">
          @if (count($services))
              <ul class="list-group">
                  @foreach($services as $service)
                      <li class="list-group-item">
                          <a href="">{{$service->duration}}</a>
                      </li>
                  @endforeach
              </ul>
          @endif
        </div>
        <div class="form-group col-xs-3">
          @if (count($services))
              <ul class="list-group">
                  @foreach($services as $service)
                      <li class="list-group-item">
                          <a href="">{{$service->price}}</a>
                      </li>
                  @endforeach
              </ul>
          @endif
        </div>
    </div>
  </body>
</html>
