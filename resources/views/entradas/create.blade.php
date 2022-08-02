<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Company Form - Laravel 9 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Agregar entradas</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('entradas.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('entradas.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nombre:</strong>
<input type="text" name="nombre" class="form-control" placeholder="Entrada nombre">
@error('nombre')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Entrada Name:</strong>
<input type="text" name="name" class="form-control" placeholder="Entrada Name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Descripcion</strong>
<input type="text" name="descripcion" class="form-control" placeholder="Entrada descripcion">
@error('descripcion')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Description</strong>
<input type="text" name="description" class="form-control" placeholder="Entrada description">
@error('description')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>precio</strong>
<input type="number" name="precio" class="form-control" placeholder="Precio">
@error('precio')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>