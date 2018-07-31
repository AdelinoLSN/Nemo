@extends('layouts.principal')
@section('title','Listar Gerenciadores')
@section('conteudo')
	<ul>
		<h4>Administrador</h4>
		{{ $admin->name }}
		<h4>Gerenciadores</h4>
		@foreach ($gerenciadores as $gerenciador)
			<li>Gerenciador: {{ $gerenciador->name }}</li>
		@endforeach
		<br>
		<?php
			$user_id = \Auth::user()->id;
		?>
		<a href='/remover/gerenciador/{{$user_id}}/piscicultura/{{$piscicultura_id}}'>Me remover</a>
		<br>
	</ul>
@stop