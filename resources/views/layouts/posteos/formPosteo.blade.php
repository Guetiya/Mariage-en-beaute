<form name="contactform" action="/posteos/agregar" method ="post" id="formCommentario" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="fname">First Name</label> -->
      <input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Nombre" name="name" required="required">
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
  </div>
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="email">Email</label> -->
      <input type="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Correo" name="email" required="required">
          @if ($errors->has('email'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('email') as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="message">Message</label> -->
      <textarea name="message" id="message" cols="30" rows="10" value="{{old('message')}}" class="form-control" placeholder="Mensaje" required="required"></textarea>
          @if ($errors->has('message'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('message') as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <label for="avatarPath">Imagen de perfil</label>
      <input type="file" name="avatarPath" id="avatarPath" class="form-control">
        @if ($errors->has('avatarPath'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('avatarPath') as $error)
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
