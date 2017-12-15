@extends("layouts.miLayout")

@section("contenido")
    <section id="carousel">
    	<div class="container main" id="color">
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2">
            <h2>Testimonios</h2>
            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
    				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
    				  <!-- Carousel indicators -->
                <ol class="carousel-indicators">
      				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
      				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
      				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
    				    </ol>
    				  <!-- Carousel items -->
    				    <div class="carousel-inner">
      				    <div class="active item">
                    <img class="profile-circle" src="images/Cath.jpg">
      				    	<blockquote>
      				    		<p>"Ce témoignage concerne surtout les filles, les ados, les femmes mais aussi les hommes qui souhaitent faire plaisir à leur moitié. <br>
                      Delphine est une amie qui sait donner le sourire grâce à ses doigts de fée.<br>
                      Elle m'aidait  pour mes cours lorsque j'étais au lycée mais les cours se terminaient toujours par une coiffure 😁
                      Tout simplement car elle en avait envie et qu'elle voulait faire bouger ses doigts dans mes cheveux!!!<br>
                      Je les avais courts mais elle réussissait toujours à faire une coiffure exceptionnelle!!!  Elle est d'une créativité débordante.<br>
                      Elle me coiffait pour un mariage, une cérémonie, des sorties entre amis ou même pour aucune occasion. Le simple fait qu'elle me coiffe était pour moi un pur bonheur.<br>
                      Un regret?? Oui j'en ai un... qu'elle soit si loin et ne puisse pas discuter avec son amie en me coiffant (elle serait contente, aujourd'hui mes cheveux dépassent mes épaules 😉😀 )<br>
                      Delphine, je crois en toi et tu vas arriver à ce que tu as toujours rêvé.<br>
                      Ne seriez-vous pas tenter de sortir et de vous sentir belle??<br>
                      Laissez vos cheveux et vote visage à Delphine. Vous ne le regreterai pas. Vous serez rayonnante!"</p>
                      <p class="firmaClient">Cath, une amie française de Lorraine</p>
      				    	</blockquote>
      				    </div>
      				    <div class="item">
                    <img class="profile-circle" src="images/Nelly.jpg">
      				    	<blockquote>
      				    		<p>"Delphine a toujours été à l'écoute de mes envies mais a également su me proposer des coiffures (chignons et tresses) utilisant le potentiel de mes cheveux pour les mettre en valeur avec de belles
                        réalisations adaptées pour les occasions indiquées. Delphine a su me mettre à l'aise, transmettre sa passion, parler de son métier et des techniques employées simplement ainsi que me donner des conseils
                        de soins pour l'entretien de mes cheveux suite à une permanente."</p>
                      <p class="firmaClient">Nelly</p>
                    </blockquote>
      				    </div>
      				    <div class="item">
                    <img class="profile-circle" src="images/fotomaquillaje1.jpg">
      				    	<blockquote>
      				    		<p>Delphine a toujours été à l'écoute de mes envies mais a également su me proposer des coiffures (chignons et tresses) utilisant le potentiel de mes cheveux pour les mettre en valeur avec de belles réalisations adaptées pour les occasions indiquées. Delphine a su me mettre à l'aise, transmettre sa passion, parler de son métier et des techniques employées simplement ainsi que me donner des conseils de soins pour l'entretien de mes cheveux suite à une permanente.</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <img class="profile-circle" src="images/fotomaquillaje1.jpg">
          			    <blockquote>
      				    		<p>Je connaissais à peine Delphine mais quand je l'entendais parler de sa passion pour les chignons, le jour où j'ai appris mon mariage j'ai tout de suite pensé à elle...et avec bcp de plaisir pour un résultat sans fautes.</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <img class="profile-circle" src="images/fotomaquillaje1.jpg">
          			    <blockquote>
      				    		<p>Pour mon mariage à venir je vais choisir ma petite soeur pour le maquillage et la coiffure...Je ne sais pas comment elle va faire pour coiffer le reste de la famille mais je m'en fiche JE PASSE LA PREMIERE!!!</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <img class="profile-circle" src="images/fotomaquillaje1.jpg">
        			    	<blockquote>
    				    		  <p>A toutes celles qui hésitent encore pour leurs coiffures, Delphine c'est la passion du chignon elle est née avec un peigne dans les mains, en plus son truc c'est qu'elle respecte le silence quand elle bosse et ça c'est chouette. C'est aussi une confidente à qui je peux tout dire car je sais qu'elle n'a pas de jugement et en plus d'être bien coiffée, je ressors avec le morale remonté. :)</p>
    				    	</blockquote>
    				    </div>
    				  </div>
    				</div>
    			</div>
    		</div>
<!--commentaires -->

  <h2><span class="fa fa-comment fa-x"></span>Deja tu commentario aqui</h2>
  <form name="contactform" action="/posteos/create" method ="post" id="formCommentario">
    <div class="row form-group">
      <div class="col-md-6 col-md-offset-3">
        <!-- <label for="fname">First Name</label> -->
        <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" required="required">
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6 col-md-offset-3">
        <!-- <label for="email">Email</label> -->
        <input type="email" id="email" class="form-control" placeholder="Correo" name="email" required="required">
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6 col-md-offset-3">
        <!-- <label for="message">Message</label> -->
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Mensaje" required="required"></textarea>
      </div>
    </div>
    <div class="form-group" id="sendButton">
      <input type="submit" value="Enviar" class="btn btn-primary" style="background-color:#ff9980;border:none;">
    </div>
  </form>

    	</div>
    </section>
@endsection
