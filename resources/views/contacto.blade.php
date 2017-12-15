@extends("layouts.miLayout")

@section("contenido")
  <title>Contacto</title>
      <div class="container main" id="color">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">

            <?php
              if (isset($errores)){
              echo "<ul>";
              foreach ($errores as $key => $error) {
                echo '<li>'. $error . "</li>";
              }
              echo "</ul>";
              }
            ?>

            <h2>Contactarme</h2>
            <form name="contactform" action="contacto.php" method ="post" id="frmContact">
								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="fname">First Name</label> -->
										<input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre" required="required">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email</label> -->
										<input type="email" id="correo" class="form-control" placeholder="Correo" name="correo" required="required">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="message">Message</label> -->
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Consulta" required="required"></textarea>
									</div>
								</div>

								<div class="form-group" id="sendButton">
									<input type="submit" value="Envía tu consulta" class="btn btn-primary" style="background-color:#ff9980;border:none;">
								</div>
								<div class="form-group" id="sendButtonWait" style="display:none;">
									<img src="/images/loader2.gif" height="64">
								</div>
							</form>

          </div>
        </div>
      </div>
  @endsection
