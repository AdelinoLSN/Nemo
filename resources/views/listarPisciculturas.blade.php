@extends('layouts.principal')
@section('title','Listar Pisciculturas')
@section('conteudo')
	<div>
		<form action="/cadastrar/piscicultura" method="get" >
			<input type="submit" value="Nova Piscicultura" />
		</form>
	</div>	

	<div>
		<table class="table table-hover">
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