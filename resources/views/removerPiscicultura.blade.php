<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Confirmar Remover Piscicultura | Nemo - Plataforma para gerenciamento de piscicultura</title>

    </head>
    <body>
		<h1>Confirmar Remover Piscicultura</h1>
		<form action="/apagarPiscicultura" method="post" >
			{{ csrf_field() }}
			<input type="hidden" name="id" value=" {{ $piscicultura->id}}"/>
			Nome da piscicultura: <input type='text' disabled="disabled" name="nome" value="{{$piscicultura->nome}}"/>
			<input type="submit" value="Remover" />
		</form>
	</body>
</html>