<form name="contactform" action="/admin/service/agregarPresentation" method ="post" id="formCommentario" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="row form-group">

      <!-- <label for="fname">First Name</label> -->
    Nombre de la nueva categoría: <input type="text" name="nameCategory" value="{{old('nameCategory')}}" required="required">

    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="fname">First Name</label> -->
      <input type="text" id="question1" class="form-control" value="{{old('question1')}}" placeholder="Question 1" name="question1" required="required">
          @if ($errors->has('question1'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('question1') as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
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
        <input type="text" id="question2" class="form-control" value="{{old('question2')}}" placeholder="Question 2" name="question2">
            @if ($errors->has('question2'))
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->get('question2') as $error)
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
    {{-- <div class="row form-group">
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
    </div> --}}

    <div class="col-md-6 col-md-offset-3">
      <input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Titulo 1" name="name" required="required">
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
      <!-- <label for="email">Email</duration1label> -->
      <input type="text" id="duration" class="form-control" value="{{old('duration')}}" placeholder="Duration 1" name="duration" required="required">
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
  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <!-- <label for="fname">First Name</label> -->
      <input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Titulo 2" name="name">
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
      <input type="text" id="duration" class="form-control" value="{{old('duration')}}" placeholder="Duration 2" name="duration">
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

  <div class="row form-group">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group" id="sendButton">
        <input type="submit" value="Enviar" class="btn btn-primary" style="background-color:#ff9980;border:none;">
      </div>
    </div>
  </div>
</form>
