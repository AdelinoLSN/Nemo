<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Qualidades de água</title>
    </head>
    <body>
    @foreach ($listaQualidadesAgua as $qualidadeAgua)
    	<b>Cod: {{ $qualidadeAgua->id }}</b> - PH: {{ $qualidadeAgua->ph}}, - Data e hora: {{ $qualidadeAgua->data}}, - Tanque relacionado: {{ $qualidadeAgua->id_tanque}}
		<a href="/editar/qualidadeAgua/{{$qualidadeAgua->id}}">Editar</a>
		<a href="/remover/qualidadeAgua/{{$qualidadeAgua->id}}">Remover</a>    	
    	
    	<br/>
    @endforeach
 
 		<a href="/tanque/{{$id}}/cadastrar/qualidadeAgua">Novo</a>
    </body>
</html>