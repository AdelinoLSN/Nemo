<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Confirmar Remover Psicultura | Nemo - Plataforma para gerenciamento de psicultura</title>

    </head>
    <body>
		<h1>Confirmar Remover Psicultura</h1>
		<form action="/apagarPsicultura" method="post" >
			{{ csrf_field() }}
			<input type="hidden" name="id" value=" {{ $psicultura->id}}"/>
			Nome da psicultura: <input type='text' disabled="disabled" name="nome" value="{{$psicultura->nome}}"/>
			<input type="submit" value="Remover" />
		</form>
	</body>
</html>