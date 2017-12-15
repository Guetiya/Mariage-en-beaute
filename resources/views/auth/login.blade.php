@extends("layouts.miLayout")

@section("contenido")
  <title>Login</title>
      <div class="container main" id="color">
      <form id='registro' action='{{ route('login') }}' method='post' enctype="multipart/form-data">
        {{ csrf_field() }}
              <input type='hidden' name='submitted' id='submitted' value='1'/>
                  <div class="form-group">
                    <label class="col-xs-3" for=""></label>
                      <div class="col-xs-9">

                        <span style="color: red" type="center" class='error'>
                          @if (count($errors) > 0)
                               <div class="alert alert-danger">
                                   <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                  </ul>
                             </div>
                          @endif
                        </span>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                      <div class="formulario">
                        <h2 class="text-center">Login</h2>
                        <!--<form action="script.php" method="post"><!ver el formulario-->
                          <div class="Formulario_registro form-horizontal">
                            <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                              <label class="col-xs-3" for="email"> Correo electrónico : </label>
                              <div class="col-xs-9">
                                <input type="email" placeholder="Correo electrónico" id="email" name="email" class="campos" value="{{ old('email') }}">
                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                              </div>
                            </div>
                            <div class="form-group" {{ $errors->has('password') ? ' has-error' : '' }}>
                              <label class="col-xs-3" for="password" class="Formulario_registro"> Contraseña : </label>
                              <div class="col-xs-9">
                                <input type="password" placeholder="Contraseña" name="password"  class="campos" value="" id="password">
                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                              </div>
                            </div>
                            <div class="form-group">
                               <div class="col-sm-offset-3 col-sm-9">
                                 <div class="checkbox">
                                   <label>
                                     <input type="checkbox" name="remember" class="" id="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                                   </label>
                                 </div>
                               </div>
                             </div>

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="login" onclick="myFunction" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Login </button>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <a href="{{ route('password.request') }}" class="Formulario_registro"> ¿Has olvidado tu contraseña? </a>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
    @endsection
