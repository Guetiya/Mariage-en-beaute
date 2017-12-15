@extends("layouts.miLayout")

@section("contenido")
  <title>¿Quién soy?</title>
      <div class="container main" id="color">
          <div class="row">
            <div class="contenidoQuienSoy col-sm-12">
                <h2 style="text-align:center;"><span class="miNombre">Mariage en Beauté</span>...</h2><!-- retirer le display inline block pour le centrer à h2 -->
                <hr noshade>
            </div>
          </div>
          <div class="row">
            <div class="fotoChampagne col-sm-4">
                <img src="images/coupesChampagne.jpg" alt="" width="250px" > <!-- contour de foto rond!!!!! -->
            </div>
            <div class="articulos col-md-8">
              <h4><span class="glyphicon glyphicon-heart"></span>¿Cómo nació <span class="miNombre">Mariage en beauté</span>?</h4>
              <p>Mariage en beauté es l'alliance de plusieurs passions : la coiffure, le maquillage, la nutrition
              et le développement personnel. C'est un projet qui a mis du temps à voir le jour car il a fallu qu'il grandisse en moi, murisse, évolue pour répondre aux besoins des jeunes mariés.</p>
              <h4><span class="glyphicon glyphicon-star"></span>Las especificidades de <span class="miNombre">Mariage en beauté</span></h4>
              <p>Para lograr esto Mariage en beauté propone un concepto que une los oficios de la belleza física con la belleza interior
              basándose sobre el desarrollo personal.</p>
              <h4><span class="glyphicon glyphicon-star"></span>¿Cuál es el concepto?</h4>
              <p>Para ayudar a los nuevos casados a prepararse fisicamente y mentalmente. También para mostrar Porque cada persona puede encontrar
              su forma asi que vas a encontrar ahi
              Las ceremonias son momentos  asociadas a la felicidad de un nuevo camino y mi experiencia como ayudante me mostro como el estrés se invitaba a la boda.
              Entonces seria transformar esas emociones molestas para que las personas disfruten de su dia.</p>
              {{-- <h4><span class="glyphicon glyphicon-education"></span></h4>
              <p> je me demande d'où tu viens <br>
                tu es avec tou le te<br>
                et alors le temps <br>
                pourquoi <br>
              </p> --}}
            </div>
          </div>
          <div class="row">
            <div class="contenidoQuienSoy col-sm-12">
                <h2 style="text-align:center;">¿Quién es <span class="miNombre">Delphine B.</span>?</h2><!-- retirer le display inline block pour le centrer à h2 -->
                <hr noshade>
            </div>
          </div>
          <div class="row">
            <div class="articulos col-sm-8">
              <h4><span class="glyphicon glyphicon-heart"></span>Ce qu'elle souhaite accomplir</h4>
              <p>Su primer meta es ayudar a la gente verlos crecer en su vida como pudo hacerlo. Para ella ayudar
              con el tema de la belleza como de la salud le permite prendre en charge de manière complète la personne dans son intégralité.
              </p>
              <h4><span class="glyphicon glyphicon-star"></span>Ses talents</h4>
              <p>Attenta a lo que quieren los demás Delphine sabe escuchar para consejar de manera justa lo que quiere
              la gente. Su manera de hacer las preguntas le permite contestar a los pedidos. j'ai une ^rétention dans la vie : travailler de ce que j'aime!</p>
              <h4><span class="glyphicon glyphicon-education"></span>Ses formations et ses compétences</h4>
              <p>Nutricionista francesa desde hace 15 años, esa especializada en los desordenes alimentarios
              y en la obesidad de los niños y adolescentes trabajó en Francia en clínicas, en varias asociaciones y como profesional
              independiente. A lo largo de su práctica se acerco también de la sanación por la energía para intervenir
              sobre la parte emocional que impregna el cuerpo e impacta sobre los desordenes alimentarios y problema de salud.
              </p>
            </div>
            <div class="foto_Delphine col-sm-4">
                <img src="images/fotoDelphine1.jpg" alt="" width="300px" > <!-- contour de foto rond!!!!! -->
                <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a class="link" href="/article/category" style="color:#ff9980"> Articulos</a></p><!-- index.php#articulos -->
                <p><span class="glyphicon glyphicon-hand-right" style="color:#ff9980"></span><a class="link" href="/posteos" style="color:#ff9980"> Testimonios</a></p>
            </div>
          </div>
      </div>
  @endsection
