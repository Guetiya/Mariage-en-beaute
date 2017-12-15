<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar servicio</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="container">
			<h1>Agregar servicio</h1>
			<form class="col-md-5" action="/admin/service/agregarService" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
	              @if ($errors->has('name'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('name') as $error)
	          					    <li>{{ $error }}</li>
	          					@endforeach
	          				</ul>
	          			</div>
	          		@endif
				</div>
	      <div class="form-group">
					<label for="duration">Duración</label>
					<input type="text" name="duration" id="duration" value="{{old('duration')}}" class="form-control">
	              @if ($errors->has('duration'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('duration') as $error)
	          					    <li>{{ $error }}</li>
	          					@endforeach
	          				</ul>
	          			</div>
	          		@endif
				</div>
				<div class="form-group">
					<label for="price">Precio</label>
					<input type="text" name="price" id="price" value="{{old('price')}}" class="form-control">
	              @if ($errors->has('price'))
	          			<div class="alert alert-danger">
	          				<ul>
	          					@foreach ($errors->get('price') as $error)
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
					<label for="group_id">Group</label>
	        <select name="group_id">
	          @foreach ($groups as $group)
	            <option value="{{$group->id}}">{{$group->name}}</option>
	          @endforeach
	        </select>
	              @if ($errors->has('group_id'))
	                <div class="alert alert-danger">
	                  <ul>
	                    @foreach ($errors->get('group_id') as $error)
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
