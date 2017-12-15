<form name="contactform" action="/admin/service/agregar" method ="post" id="formCommentario" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="fname">First Name</label> -->
      <input type="text" id="titulo1" class="form-control" value="{{old('titulo1')}}" placeholder="Titulo 1" name="titulo1" required="required">
          @if ($errors->has('titulo1'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('titulo1') as $error)
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
      <textarea type="text" id="respuesta1" class="form-control" value="{{old('respuesta1')}}" placeholder="Respuesta 1" name="respuesta1" required="required"></textarea>
          @if ($errors->has('respuesta1'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('respuesta1') as $error)
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
      <input type="text" id="titulo2" class="form-control" value="{{old('titulo2')}}" placeholder="Titulo 2" name="titulo2">
          @if ($errors->has('titulo2'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('titulo2') as $error)
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
      <textarea type="text" id="respuesta2" class="form-control" value="{{old('respuesta2')}}" placeholder="Respuesta 2" name="respuesta2"></textarea>
          @if ($errors->has('respuesta2'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('respuesta2') as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <label for="foto">Foto</label>
      <input type="file" name="foto" id="foto" class="form-control">
        @if ($errors->has('foto'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('foto') as $error)
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
