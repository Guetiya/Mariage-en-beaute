<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar articulo</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Agregar fotos en galería</h1>
		<form class="col-md-5" action="/admin/galeria/agregar" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
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
			<div class="form-group">
				<button type="submit" name="button" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>
