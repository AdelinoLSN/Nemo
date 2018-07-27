<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Listar Psiculturas | Nemo - Plataforma para gerenciamento de psiculturas</title>
	</head>
	<body>
		<ul>
			@foreach ($psiculturas as $psicultura)
				<li>{{ $psicultura->nome }}</li>
				<a href="/listar/tanques/{{$psicultura->id}}">Tanques</a>
				<a href="/editar/psiculturas/{{$psicultura->id}}">Editar</a>
				<a href="/remover/psicultura/{{$psicultura->id}}">Remover</a>
			@endforeach		
		</ul>
		<form action="/cadastrar/psicultura" method="get" >
			<input type="submit" value="Nova Psicultura" />
		</form>
	</body>
</html>