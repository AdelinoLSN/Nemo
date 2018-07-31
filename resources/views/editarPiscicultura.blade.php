@extends('layouts.principal')
@section('title','Editar Piscicultura')
@section('conteudo')
	<h1>Editar Piscicultura</h1>
	<form action="/salvarPiscicultura" method="post">
		{{ csrf_field() }}
		
		<input type="hidden" name="id" value="{{$piscicultura->id}}"/>
		Nome da piscicultura: <input type="text" name="nome" value="{{$piscicultura->nome}}" required/>
		<input type="submit" value="Alterar" />		
	</form>
@stop