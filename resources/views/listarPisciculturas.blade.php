<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Listar Pisciculturas | Nemo - Plataforma para gerenciamento de pisciculturas</title>
	</head>
	<body>
		<ul>
			@foreach ($pisciculturas as $piscicultura)
				<li>{{ $piscicultura->nome }}</li>
				<a href="/listar/tanques/{{$piscicultura->id}}">Tanques</a>
				<a href="/editar/pisciculturas/{{$piscicultura->id}}">Editar</a>
				<a href="/remover/piscicultura/{{$piscicultura->id}}">Remover</a>
			@endforeach		
		</ul>
		<form action="/cadastrar/piscicultura" method="get" >
			<input type="submit" value="Nova Piscicultura" />
		</form>
	</body>
</html>