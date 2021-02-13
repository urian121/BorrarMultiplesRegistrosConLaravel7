<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="shortcut icon" href="{{ asset ('img/logo-mywebsite-urian-viera.svg') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>Como Eliminar Múltiples Registros con Checkbox usando Laravel :: WebDeveloper Urian Viera</title>	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style> 
        table tr th{
            background:rgba(0, 0, 0, .6);
            color: azure;
        }
        h3{
            color:crimson; 
            margin-top: 100px;
        }
        a:hover{
            cursor: pointer;
            color: #333 !important;
        }
      </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="background-color: #563d7c !important;">
    <span class="navbar-brand">
        <img src="{{ asset ('img/logo-mywebsite-urian-viera.svg') }}" alt="Web Developer Urian Viera" width="120">
        Web Developer Urian Viera
    </span>
</nav>

<div class="container top mt-5">

<h3 class="text-center">
Como Eliminar Múltiples Registros con Checkbox usando Laravel
</h3>
<hr>
<br>

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