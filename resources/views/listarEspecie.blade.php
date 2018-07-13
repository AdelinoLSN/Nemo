<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Especies</title>
    </head>
    <body>
    @foreach ($listaEspecies as $EspeciePeixe)
    	<b>Cod: {{ $EspeciePeixe->id }}</b> - Nome: {{ $EspeciePeixe->nome}}, - Tempo de desenvolvimento: {{ $EspeciePeixe->tempo_desenvolvimento}} meses,
    	 - Tipo de ração: {{ $EspeciePeixe->tipo_racao}}, - Temperatura ideal da água: {{ $EspeciePeixe->temperatura_ideal_agua}} graus,
    	 - Quantidade de peixes por volume: {{ $EspeciePeixe->quantidade_por_volume}}
		<a href="/editar/especie/{{$EspeciePeixe->id}}">Editar</a>
		<a href="/remover/especie/{{$EspeciePeixe->id}}">Remover</a>    	
    	
    	<br/>
    @endforeach
 
 		<a href="/adicionar/especie">Novo</a>
    </body>
</html>