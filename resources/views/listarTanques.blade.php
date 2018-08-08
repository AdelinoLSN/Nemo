<!doctype html>
@extends('layouts.principal')
@section('title','Listar Tanques')
@section('path')
	Piscicultura {{$piscicultura->nome}} > Listagem de tanques
@stop
@section('conteudo')
	<div>
		<form action="/cadastrar/tanque/{{$piscicultura->id}}" method="get" >
			<input class="btn btn-primary" type="submit" value="Novo Tanque" />
		</form>
	</div>	

	<div>
		<table class="table">
			<tr>
				<th>Código</th>
				<th>Volume</th>
				<th>Manutenção</th>
				<th>Ações</th>
			</tr>
			@foreach ($tanques as $tanque)
			<tr>
				<td>{{ $tanque->id }}</td>
				<td>{{ $tanque->volume}}</td>
				<td>{{$tanque->manutencao_necessaria}}</td>
				<td>
					<a class="btn btn-primary" href="/editar/tanque/{{$tanque->id}}">Editar</a>
        			<a class="btn btn-primary" href="/remover/tanque/{{$tanque->id}}">Remover</a>
        			<a class="btn btn-primary" href="/listar/especies/{{$tanque->id}}">Povoar</a>
        			<a class="btn btn-primary" href="/info/tanque/{{$tanque->id}}">Info</a>
				</td>
			</tr>
			@endforeach		
		</table>
	</div>
@stop
