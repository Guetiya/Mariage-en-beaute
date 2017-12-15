@extends("layouts.miLayout")

@section("contenido")
  <title>Precio</title>
    <div class="container main" id="color">
        <div class="row">
          <div class="precioTitulo col-xs-12">
            @foreach ($categories as $key => $category)
              <h2 id="">{{$category->name}}</h2>
              <hr noshade>
              <div class="row">
                <div class="prestacionesMaquillaje col-xs-6">
                  @foreach ($category->services as $key => $service)
                  <ul>
                    <li style="text-align:right;"><span>{{$service->name}}</span> ({{$service->duration}}) : </li>
                  </ul>
                  @endforeach
                </div>
                <div class="prestacionesMaquillaje col-xs-6">
                  @foreach ($category->services as $key => $service)
                  <ul>
                    <li>${{$service->price}}</li>
                  </ul>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection
