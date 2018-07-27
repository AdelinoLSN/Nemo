<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Cadastrar Piscicultura | Nemo - Plataforma para gerenciamento de pisciculturas</title>
	</head>
	<body>
		<h1>Cadastrar Piscicultura</h1>
		<form action="/adicionarPiscicultura" method="post">
			{{ csrf_field() }}
			
			Nome da piscicultura: <input type="text" name="nome" required/>
			<input type="submit" value="Cadastrar" />		
		</form>
	</body>
</html>