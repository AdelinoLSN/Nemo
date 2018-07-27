@extends('layouts.principal')
@section('title','Listar Gerenciadores')
@section('conteudo')
	<ul>
		<h4>Administrador</h4>
		{{ $admin->name }}
		<h4>Gerenciadores</h4>
		@foreach ($gerenciadores as $gerenciador)
			<li>Nome: {{ $gerenciador->name }} @ <a href="/remover/gerenciador/{{$gerenciador->id}}/piscicultura/{{$piscicultura_id}}">Remover</li>
		@endforeach
		<br>
		<br>
		<a href="/adicionar/gerenciador/piscicultura/{{$piscicultura_id}}">Adicionar</a>
	</ul>	
@stop