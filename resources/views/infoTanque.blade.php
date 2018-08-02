
<!doctype html>
@extends('layouts.principal')
@section('title','Informacoes Tanques')
@section('conteudo')
		<div>
		<table class="table">
			<tr>
				<th>Especies</th>
			</tr>
			@foreach ($listaEspecies as $EspeciePeixe)
			<tr>
				<td><li>Nome: {{ $EspeciePeixe->nome}}<br>Tempo de desenvolvimento: {{ $EspeciePeixe->tempo_desenvolvimento}} meses<br>
    	 				  Tipo de ração: {{ $EspeciePeixe->tipo_racao}} <br/>Temperatura ideal da água: {{ $EspeciePeixe->temperatura_ideal_agua}} graus,
    	              Quantidade de peixes por volume: {{ $EspeciePeixe->quantidade_por_volume}}<br/></li></td>
			</tr>
			@endforeach		
		</table>
	</div>
@stop