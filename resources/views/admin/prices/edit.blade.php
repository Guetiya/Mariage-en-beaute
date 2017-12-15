@extends("layouts.miLayout")
@section("contenido")
  <title>Modificar servicios</title>
  <body>
    <div class="container main" id="color">
    <h1>Modificar servicios</h1>
    <form class="col-md-12" action="/admin/price" method="post">
      {{ csrf_field() }}
      {{ method_field('patch') }}
        <div class="form-group col-xs-4">
            @foreach ($services as $key => $service)
              <label for="name">Name</label>
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
            @endforeach
        </div>

      <div class="form-group col-xs-4">
          @foreach ($services as $key => $service)
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" value="{{$service->duration}}" class="form-control">
            @if ($errors->has('duration'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get('duration') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          @endforeach
      </div>

      <div class="form-group col-xs-4">
          @foreach ($services as $key => $service)
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{$service->price}}" class="form-control">
            @if ($errors->has('price'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get('price') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          @endforeach
      </div>
      <div class="form-group">
        <form action="/admin/price" method="post" >
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <button type="submit" name="button" class="btn btn-primary">Editar</button>
        </form>
      </div>
  </form>
</div>
</body>
@endsection
