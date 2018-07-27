<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Editar Piscicultura | Nemo - Plataforma para gerenciamento de pisciculturas</title>
	</head>
	<body>
		<h1>Editar Piscicultura</h1>
		<form action="/salvarPiscicultura" method="post">
			{{ csrf_field() }}
			
			<input type="hidden" name="id" value="{{$piscicultura->id}}"/>
			Nome da piscicultura: <input type="text" name="nome" value="{{$piscicultura->nome}}" required/>
			<input type="submit" value="Alterar" />		
		</form>
	</body>
</html>