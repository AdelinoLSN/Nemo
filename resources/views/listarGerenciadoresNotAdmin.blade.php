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
			<li>Gerenciador: {{ $gerenciador->name }}</li>
		@endforeach
            <br>
		<?php
			$user_id = \Auth::user()->id;
		?>
            <a href='/remover/gerenciador/{{$user_id}}/piscicultura/{{$piscicultura_id}}'>Me remover</a>
		<br>
		</ul>
	</body>
</html>