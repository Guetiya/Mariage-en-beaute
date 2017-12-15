<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$service->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
        <h1>{{$service->name}}</h1>
        <form class="col-md-5" action="/admin/service/{{$service->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('patch') }}
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

          <div class="form-group">
              <label for="duration">Duración</label>
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
          </div>

          <div class="form-group">
              <label for="price">Precio</label>
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
          </div>

          <div class="form-group">
              <label for="category_id">Category_id actual</label>
              <input type="text" name="category_id" id="category_id" value="{{$service->category_id}}" class="form-control">
              @if ($errors->has('category_id'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('category_id') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          </div>

          <div class="form-group">
              <select name="category_id">
                  @foreach ($categories as $category)
                      @if ($category->id == $service->id)
                          <option value="{{$category->id}}" selected>{{$category->name}}</option>
                      @else
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endif
                  @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="group_id">Group_id actual</label>
              <input type="text" name="group_id" id="group_id" value="{{$service->group_id}}" class="form-control">
              @if ($errors->has('group_id'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('group_id') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          </div>

          <div class="form-group">
              <select name="group_id">
                  @foreach ($groups as $group)
                      @if ($group->id == $service->id)
                          <option value="{{$group->id}}" selected>{{$group->name}}</option>
                      @else
                          <option value="{{$group->id}}">{{$group->name}}</option>
                      @endif
                  @endforeach
              </select>
          </div>

          <div class="form-group">
            <form action="/admin/service/{{$service->id}}" method="post" >
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <button type="submit" name="button" class="btn btn-primary">Editar</button>
            </form>
          </div>

          <div class="form-group">
            <form action="/admin/service/{{$service->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" name="button" class="btn btn-primary">Borrar</button>
            </form>
          </div>
      </form>
    </div>
  </body>
</html>
