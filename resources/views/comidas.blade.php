<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comidas</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>



<div class="content mt-5">
	

<h1 class="text-center">Como Eliminar Multiples Registros con Laravel</h1>

<h4 class="text-center">
	LISTA DE COMIDAS <strong> ({{ count($comidas) }})</strong>
</h4>

<center>
<div class="body">

<form method="POST" action="{{ route('comidadeletemultiple') }}">
    {{ csrf_field() }}

 <div class="table-responsive">
    <table class="table table-striped table-hover" style="width: 85% !important">
		<thead>
			<tr>
				<th>#</th>
				<th>Comida</th>
				<th>Likes</th>
				<th><input type="submit" class="btn btn-primary waves-effect" value="Eliminar"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($comidas as $comida)
			<tr>
				<td>
                    <input type="checkbox" value="{{ $comida->id }}" id="{{ $comida->id }}" name="borrarRegistros[]">
                	{{ $comida->id }}
                </td>

				<td>{{ $comida->nombre }}</td>
				<td>{{ $comida->like }}</td>
				<td>- - - - -</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

</form>

</div>
</center>
</div>



<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>