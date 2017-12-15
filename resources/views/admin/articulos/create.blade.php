<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar articulo</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="container">
			<h1>Agregar articulo</h1>
			<form class="col-md-5" action="/admin/article/agregarArticulo" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="titulo">Título</label>
					<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" class="form-control">
	              @if ($errors->has('titulo'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('titulo') as $error)
	          					    <li>{{ $error }}</li>
	          					@endforeach
	          				</ul>
	          			</div>
	          		@endif
				</div>
	      <div class="form-group">
					<label for="resumen">Resumen</label>
					<textarea type="text" name="resumen" id="resumen" value="{{old('resumen')}}" class="form-control"></textarea>
	              @if ($errors->has('resumen'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('resumen') as $error)
	          					    <li>{{ $error }}</li>
	          					@endforeach
	          				</ul>
	          			</div>
	          		@endif
				</div>
				<div class="form-group">
					<label for="contenido">Contenido</label>
					<textarea type="text" name="contenido" id="contenido" value="{{old('contenido')}}" class="form-control"></textarea>
	              @if ($errors->has('contenido'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('contenido') as $error)
	          					    <li>{{ $error }}</li>
	          					@endforeach
	          				</ul>
	          			</div>
	          		@endif
				</div>

	      <div class="form-group">
					<label for="category_id">Categoría</label>
	        <select name="category_id">
	          @foreach ($categories as $category)
	            <option value="{{$category->id}}">{{$category->name}}</option>
	          @endforeach
	        </select>
	              @if ($errors->has('category_id'))
	                <div class="alert alert-danger">
	                  <ul>
	                    @foreach ($errors->get('category_id') as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                  </ul>
	                </div>
	              @endif
				</div>
				<div class="form-group">
				    <label for="image">Imagen</label>
				    <input type="file" name="image" id="image" class="form-control">
				    @if ($errors->has('image'))
				        <div class="alert alert-danger">
				            <ul>
				                @foreach ($errors->get('image') as $error)
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
