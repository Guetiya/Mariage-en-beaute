<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar categoría </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">

<form name="contactform" action="/admin/categories/agregarCategory" method ="post" id="formAgregarCategory" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="row form-group">
      <!-- <label for="fname">First Name</label> -->
      <h1>Formulario para agregar una nueva categoria</h1>
    Nombre de la categoria: <input type="text" name="name" value="{{old('name')}}" required="required">
    {{-- <div class="row form-group">
      <div class="col-md-6 col-md-offset-3">
        <!-- <label for="email">Email</duration1label> -->
        <input type="text" id="duration" class="form-control" value="{{old('duration')}}" placeholder="Duration en hora" name="duration" required="required">
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
    </div>--}}
  </div>
<div class=" row form-group">
    {{-- <div class="col-md-6 col-md-offset-3"> --}}
      Descripción : <textarea type="text" id="description" class="form-control" value="{{old('description')}}" placeholder="Descripcion" name="description" required="required"></textarea>
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
  {{-- </div> --}}

  <div class="row form-group">
	    <label for="image">Image</label>
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
    </div>
  {{-- <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="fname">First Name</label> -->
      <input type="text" id="category_id" class="form-control" value="{{old('category_id')}}" placeholder="category_id" name="category_id">
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
  </div> --}}

  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group" id="sendButton">
        <input type="submit" value="Enviar" class="btn btn-primary" style="background-color:#ff9980;border:none;">
      </div>
    </div>
  </div>
</form>
</div>
</body>
