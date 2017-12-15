@extends("layouts.miLayout")

@section("contenido")
      <div class="container main" id="color">
        <div class="row">
          <div class="contenidoArticulos col-sm-12">
            <h5>La préparation de la peau</h5>
            <p>par Delphine B / <time class="entry-date published" datetime="2017-03-18T18:42:40+00:00">6 meses atrás</time></p>
            <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
          </div>
        </div>
        
        <div class="rowBelleza">
          <div class="articulos col-sm-12">
            <p><em>Votre maquillage ne tient pas, le fond de teint vous fait la sensation d’un masque ? Vous avez des
            éruptions cutanées ? Des marques d’acné ?...si vous observez ces types d’inconfort cet article vraiment vous intéresser. <br>
            J’aborderai les origines de ses désagréments et les solutions. <br>
            Pour répondre à ces questions j‘ai consulté une cosmétologue qui m’a livré ses connaissances. Séduite par
            les règles basiques qu’elle m’a enseignées sans entrer dans la surconsommation des produits que les laboratoires
            peuvent proposer, j’ai décidé de vous livrer ses propos.
            </em></p>
            <p>Avant de choisir les produits de maquillage, il convient de bien préparer la peau pour optimiser la tenue de celui-ci le jour J. </p>
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-9">
            <ul><u>Bénéfices d’un bon entretien</u> :
              <li>Grain de peau affiné </li>
              <li>Peau bien hydratée</li>
              <li>Sécrétion de sébum contrôlée </li>
              <li>Bonne tenue du maquillage</li>
              <li>Sensation de peau légère et lumineuse</li>
            </ul>
            <ul><u>Conséquences visibles d’une peau qui souffre</u> :
              <li>Eczéma</li>
              <li>Acné, boutons</li>
              <li>Pores dilatés</li>
              <li>Points noirs, points blancs</li>
              <li>Maquillage qui ne tient pas </li>
              <li>Peau qui tire</li>
              <li>Allergies</li>
              <li>Rougeurs</li>
              <li>...</li>
            </ul>
            <a href="/galeria"><img src="images/fotomaquillaje.jpg" alt="" width="200px" height="250px"></a>
            <ul><u>Ce qui modifie l’état de votre peau</u> :
              <li>Mauvais diagnostique de votre peau donc utilisation de produits non adaptés</li>
              <li>Fréquence d’utilisation des produits non adaptée</li>
              <li>Utiliser des doses d’essaies non adaptées à votre peau</li>
              <li>L’exposition au soleil </li>
              <li>Utiliser des agressifs entraine une surproduction de sébum et un épaississement de la peau. </li>
              <li>Fumer</li>
              <li>La pollution</li>
              <li>La surconsommation de sucrerie et de graisses </li>
            </ul>


            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="images/fotomaquillaje.jpg" alt="" width="90px" height="100px">

            <h3>Et vous? </h3>
            <p>Comment prenez-vous soin de votre peau? Qu'êtes-vous prêtes à faire, à mettre en place, à changer pour avoir la peau que vous souhaitez?</p>
          </div>
        </div>
        <div class="rowBelleza">
          <div class="col-sm-3">
            <div class="citacion">
              <h3>Pensamiento</h3>
              <span class="fa fa-quote-left"></span>
              <p><em>Atrás el arte hay pasión y atrás la pasión hay amor de este arte.
              Y no hay más hermosa pasión que el arte de amar.</em></p>
              <p><span class="glyphicon glyphicon-hand-right"style="color:#ff9980"></span><a href="#" style="color:#ff9980"> Testimonios</a></p>
              <p><span class="glyphicon glyphicon-share-alt"style="color:#ff9980"></span><a href="#" style="color:#ff9980"> Compartir el artículo</a></p>
            </div>
          </div>
          <!-- <div class="row">
            <div class="articulos col-sm-3">
              <div class="fotoArticulosBelleza">
              </div>
            </div>
        </div> -->
      </div>
    </div>
  @endsection
