<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Listar Pisciculturas | Nemo - Plataforma para gerenciamento de pisciculturas</title>
	</head>
	<body>
		<ul>
            <h4>Administrador</h4>
            {{ $admin->name }}
            <h4>Gerenciadores</h4>
            @foreach ($gerenciadores as $gerenciador)
			<li>Nome: {{ $gerenciador->name }} @ <a href="/remover/gerenciador/{{$gerenciador->id}}/piscicultura/{{$piscicultura_id}}">Remover</li>
		@endforeach
            <br>
            <br>
            <a href="/adicionar/gerenciador/piscicultura/{{$piscicultura_id}}">Adicionar</a>
		</ul>
	</body>
</html>