@extends('layouts.miLayout')

@section('contenido')
  <title>Registrarse</title>
  <div class="container main" id="color">
  <!-- empieza el registro -->
  <form id='registro' onsubmit="return validacionjs();" action='/register' method='post' enctype="multipart/form-data">
      {{csrf_field()}}
      <input type='hidden' name='submitted' id='submitted' value='1'/>
        <div class="form-group">
          <label class="col-xs-3" for=""></label>
          <!-- <div class="alert alert-danger"> -->
            <!-- <strong>Erreur !</strong> message d'erreur <i>alert-danger</i>. -->
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
          <!-- </div> -->
          <!-- a este no le hice verificacion -->
        <div id="div-id" style="color: red" type="center" class='error'> </div>
        </div>
          <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
              <div class="formulario">
                <h2 class="text-center">Registrarse</h2>

                  <div class='short_explanation'>* Campos requeridos</div>
                  <br/>
                  <div class="Formulario_registro form-horizontal">
                    <div class="form-group">
                      <label class="col-xs-3" for="apellido">Apellido* : </label>
                      <div class="col-xs-9">
                        <input type="text" onfocus="return validar_apellido();"onchange="clear_apellido();"placeholder="apellido" id="apellido" name="apellido"  class="campos" maxlength="40" value="{{old("apellido")}}" id="apellido" required />
                      <!-- esto hace que muestre el dialogo de error -->  <div id="error_apellido"class="val_error"></div>
                        <!-- <span style="color: red"  class='error'>
                          <?php
                              // if (isset($errores['apellido'])) {
                              //     echo "El apellido ingresado no es valido";
                              // }
                          ?>

                        </span> -->
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-xs-3" for="nombre">Nombre* : </label>
                      <div class="col-xs-9">
                        <input type="text" onclick="return validar_nombre();" onchange="clear_nombre();"placeholder="nombre" id="nombre" name="nombre" class="campos" maxlength="40"   value="{{old("nombre")}}" required>
                        <div id="error_nombre"class="val_error"></div>

                        <!-- <span style="color: red"  class='error'>
                          <?php
                              // if (isset($errores['nombre'])) {
                              //     echo "El nombre ingresado no es valido";
                              // }
                          ?>
                        </span> -->
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-xs-3" for="genero">Genero : </label>
                      <div class="col-xs-9">
                        <select class="campos" name="genero" required>
                          @foreach ($generos as $genero)
                              @if ($genero == old($genero))
                                <option value="{{$genero}}" selected>
                                  {{$genero}}
                                </option>
                              @else
                                <option value="{{$genero}}">
                                  {{$genero}}
                                </option>
                              @endif
                          @endforeach
                        </select>
                        <!-- <select name="genero" value="genero" class="campos">
                          <option value="genero">Hombre</option>
                          <option value="genero">Mujer</option>
                        </select> -->

                          <!--<div id="error_genero"class="val_error"></div>-->

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-xs-3" for="correo">Correo electrónico* : </label>
                      <div class="col-xs-9">
                        <input type="email" onclick="return validar_correo();" onchange="clear_correo();"placeholder="correo electrónico" id="correo" name="correo" class="campos" maxlength="40"  value="{{old("correo")}}" required >
                        <div id="error_mail"class="val_error"></div>

                        <!-- <span style="color: red"  class='error'>
                          <?php
                            // if (isset($errores['correo'])) {
                            //   echo "El correo ingresado no es valido";
                            // }
                          ?>
                        </span> -->
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-xs-3" for="contrasena">Contraseña* : </label>
                      <div class="col-xs-9">
                        <input type="password" onclick="return validar_contrasena();" onchange="clear_contrasena();"placeholder="contraseña" name="contrasena" class="campos" maxlength="40" required>
                        <div id="error_contrasena"class="val_error"></div>

                        <!-- <span style="color: red"  class='error'>
                          <?php
                            // if (isset($errores['contrasena'])) {
                            //   echo "La contraseña ingresada no es valida";
                            // }
                          ?>
                        </span> -->
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-xs-3" for="contrasena">Repetir contraseña* : </label>
                      <div class="col-xs-9">
                        <input type="password" onclick="return validar_repetirContrasena();" onchange="clear_repetirContrasena();" placeholder="contraseña" name="contrasena_confirmation" class="campos" maxlength="40" required  >
                        <div id="error_repetirContrasena"class="val_error"></div>

                        <!-- <span style="color: red"  class='error'>
                          <?php
                            // if (isset($errores['contrasena'])) {
                            //   echo "La contraseña ingresada no es valida";
                            // }
                          ?>
                        </span> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-3" for="fotoPerfil">Foto perfil: </label>
                      <div class="col-xs-9">
                        <input type='file'   name='imgPerfil' required><br/>
                        <span id='register_username_errorloc' class='error'></span>

                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="Formulario_registro" value="Me registro" id="submit" style="background-color:white;border-radius:80px;border-color:#FCA28D;" > Registrarme </button>
                    <button type="reset" class="Formulario_registro" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Borrar </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </form>
  </div>
@endsection
