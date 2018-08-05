@extends('layouts.principal')
@section('title','Listar Pisciculturas')
@section('path')
	Listar Pisciculturas
@stop
@section('conteudo')
	<div>
		<form action="/cadastrar/piscicultura" method="get" >
			<input type="submit" value="Nova Piscicultura" class="btn btn-primary" />
		</form>
	</div>	
	<div>
		<table class="table">
			<tr>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
			@foreach ($pisciculturas as $piscicultura)
			<tr>
				<td>{{ $piscicultura->nome }}</td>
				<td>
					<a href="/listar/tanques/{{$piscicultura->id}}">Tanques</a><br>
					<a href="/listar/gerenciadores/piscicultura/{{$piscicultura->id}}">Gerenciadores</a><br>
					<a href="/editar/pisciculturas/{{$piscicultura->id}}">Editar</a><br>
					<a href="/remover/piscicultura/{{$piscicultura->id}}">Remover</a>
				</td>
			</tr>
			@endforeach		
		</table>
	</div>
@stop