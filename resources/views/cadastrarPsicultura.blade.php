<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Cadastrar Psicultura | Nemo - Plataforma para gerenciamento de psiculturas</title>
	</head>
	<body>
		<h1>Cadastrar Psicultura</h1>
		<form action="/adicionarPsicultura" method="post">
			{{ csrf_field() }}
			
			Nome da psicultura: <input type="text" name="nome" required/>
			<input type="submit" value="Cadastrar" />		
		</form>
	</body>
</html>