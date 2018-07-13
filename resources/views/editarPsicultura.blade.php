<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Editar Psicultura | Nemo - Plataforma para gerenciamento de psiculturas</title>
	</head>
	<body>
		<h1>Editar Psicultura</h1>
		<form action="/salvarPsicultura" method="post">
			{{ csrf_field() }}
			
			<input type="hidden" name="id" value="{{$psicultura->id}}"/>
			Nome da psicultura: <input type="text" name="nome" value="{{$psicultura->nome}}" required/>
			<input type="submit" value="Alterar" />		
		</form>
	</body>
</html>