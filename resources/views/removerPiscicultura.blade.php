@extends('layouts.principal')
@section('title','Remover Piscicultura')
@section('conteudo')
	<h1>Confirmar Remover Piscicultura</h1>
	<form action="/apagarPiscicultura" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="id" value=" {{ $piscicultura->id}}"/>
		Nome da piscicultura: <input type='text' disabled="disabled" name="nome" value="{{$piscicultura->nome}}"/>
		<input type="submit" value="Remover" />
	</form>
@stop