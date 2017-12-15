@extends("layouts.miLayout")

@section("contenido")
    <section id="carousel">
    	<div class="container">
        <!--commentaires -->
        <h2>Formulario</h2>
        <form name="contactform" action="/admin/peliculas/{id}" method ="post" id="formArticulo">
          {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6 col-md-offset-3">
                <!-- <label for="fname">First Name</label> -->
                <input type="text" id="titulo" class="form-control" placeholder="Titulo" name="titulo" required="required">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6 col-md-offset-3">
                <select class="form-control" name="category_id" value="">
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6 col-md-offset-3">
                <!-- <label for="email">Email</label> -->
                <textarea id="resumen" class="form-control" placeholder="resumen" name="resumen" required="required"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6 col-md-offset-3">
                <!-- <label for="message">Message</label> -->
                <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="contenido" required="required"></textarea>
              </div>
            </div>
            <div class="form-group" id="sendButton">
              <input type="submit" value="Enviar" class="btn btn-primary" style="background-color:#ff9980;border:none;">
            </div>
          </form>
    	</div>
    </section>
@endsection
