<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Tipografías Delphine-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans|Parisienne">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Estilos principales-->
    <link rel="stylesheet" href="/css/styles-main.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  </head>
  <body id="top">
    <header>
      <div class="container main" id="">
        <div class="row">
          <div class="col-xs-6">
            <aside class="left-col">
              <div class="language">
                <ul class="lang-selector">
                  <li class="fr"> <a href="#">Francés</a><span class="separator">|</span></li>
                  <li class="es"> <a href="#">Español</a><span class="separator"></li>
                  {{-- <li class="en"> <a href="#">Inglés</a></li> --}}
                  {{-- <li class="contar">Ya somos <span id="contar"></span>usuarios</li> --}}
                  {{-- <li class="contar">Ya somos <span id="">{{$user->id}}</span> usuarios</li> --}}

                </ul>
                <ul class="social">
                  <li><a href="https://www.facebook.com/delphine.bertin.coiffure" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
                  <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
                  <li><a href="https://www.youtube.com" target="new"><i class="fa fa-youtube fa-2x"></a></i></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-xs-6">
            <aside class="right-col ">
              <ul class="login">
              @guest
                  <li><a href="{{ route('login') }}" class="listanavegacion">Login</a><span class="separator">|</span></li>
                  <li><a href="{{ route('register') }}" class="listanavegacion">Registrarse</a></li>
              @else
                  <li class="dropdown">
                    {{-- <img src="{{ asset('storage/' . $users->avatar) }}" alt="" width="" height="250px"> --}}
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endguest
              </ul>
              <div class="row">
                <div class="col-md-6 pull-right">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
<a href="mailto:mariageenbeaute@gmail.com"><span>mariageenbeaute@gmail.com</span></a>
                  {{-- <div class="form-group search">
                    <input type="text" class="form-control" id="" placeholder="Escribí tu pregunta">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div> --}}
                </div>
              </div>
            </aside>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="center">
              <p class="main-description text-center">Mariage en beauté</p>
              <p class="sign">par Delphine B.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <!--<nav class="navegacion">-->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class = "active"> <a href="/">Inicio</a> </li>
                    <li role="presentation"> <a href="/quienSoy">¿Quién soy?</a> </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      role="button" aria-haspopup="true" aria-expanded="false">Prestaciones <span class="caret"></span></a>

                      <ul class="dropdown-menu">
                        <li><a href="/service/category/1">Peinados</a></li>
                        <li><a href="/service/category/2">Maquillaje</a></li>
                        <li><a href="/service/category/3">Asesoria de imagen</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/service/category/4">Nutrición</a></li>
                      </ul>
                    <li role="presentation"> <a href="/galeria">Galería</a> </li>
                    <li role="presentation"> <a href="/contacto">Contacto</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main class="main_registro">
      @yield("contenido")
    </main>
    <footer>
      <div class="container">
        <div class="row" id="color">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-5">
                <aside class="left-col">
                  <div class="language">
                    <ul class="lang-selector">
                      <li class="fr"> <a href="#"> Francés </a><span class="separator">|</span></li>
                      <li class="es"> <a href="#"> Español </a><span class="separator"></li>
                  {{-- <li class="en"> <a href="#"> Inglés </a></li> --}}
                    </ul>
                    <ul class="social">
                      <li><a href="https://www.facebook.com/delphine.bertin.coiffure" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
                      <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
                      <li><a href="https://www.youtube.com" target="new"><i class="fa fa-youtube fa-2x"></a></i></li>
                    </ul>
                  </div>
                </aside>
              </div>
              <div class="col-xs-7">
                <aside class="right-col">
                  <ul class="copyright">
                    <li>&copy; Copyright<span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                    --><li>Menciones legales</li>|</span></li>
                    <button type="button" name="button" value="Cambiar el tema" id="cambiar_tema">Cambiar el tema</button>
                    <a href="#top"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></a></i>
                  </ul>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/funciones.js" charset="utf-8"></script>
  </body>
</html>
