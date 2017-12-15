<form name="contactform" action="/admin/category/agrgegarContenu" method ="post" id="formAgregarContenu" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="row form-group">
      <!-- <label for="fname">First Name</label> -->
      <h1>Formulario para agregar un nuevo servicio</h1>
    Nombre del servicio: <input type="text" name="nameService" value="{{old('nameService')}}" required="required">
    <div class="row form-group">
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
    </div>

    <div class="col-md-6 col-md-offset-3">
      <input type="text" id="price" class="form-control" value="{{old('price')}}" placeholder="Precio" name="price" required="required">
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
  </div>

  <div class="row form-group">
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
  </div>
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="email">Email</label> -->
      <input type="text" id="people_id" class="form-control" value="{{old('people_id')}}" placeholder="people_id" name="people_id">
          @if ($errors->has('people_id'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('people_id') as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group" id="sendButton">
        <input type="submit" value="Enviar" class="btn btn-primary" style="background-color:#ff9980;border:none;">
      </div>
    </div>
  </div>
</form>
