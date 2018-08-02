<!doctype html>
@extends('layouts.principal')
@section('title','Listar Tanques')
@section('conteudo')
	<div>
		<form action="/cadastrar/tanque/{{$piscicultura_id}}" method="get" >
			<input type="submit" value="Novo Tanque" />
		</form>
	</div>	

	<div>
		<table class="table">
			<tr>
				<th>Tanque</th>
				<th>Ações</th>
			</tr>
			@foreach ($tanques as $tanque)
			<tr>
				<td><li>Cod.:{{ $tanque->id }}<br>
						  Volume: {{ $tanque->volume}}<br>
      				  Manutenção Necessária: {{$tanque->manutencao_necessaria}}<br/></li></td>
				<td>
					<a href="/editar/tanque/{{$tanque->id}}">Editar</a><br>
        			<a href="/remover/tanque/{{$tanque->id}}">Remover</a><br>
        			<a href="/listar/especies/{{$tanque->id}}">Povoar</a><br>
        			<a href="/info/tanque/{{$tanque->id}}">Info</a><br>
				</td>
			</tr>
			@endforeach		
		</table>
	</div>
@stop
