<!doctype html>
@extends('layouts.principal')
@section('title','Editar Piscucultura')
@section('path')
	Piscultura {{$piscicultura->nome}} > Editar
@stop
@section('conteudo')
@if (isset($errors) && count($errors) > 0)
<div class="alert alert-danger" role="alert">
	@foreach($errors->getMessages() as &$error)
		{{$error[0]}}
	@endforeach
</div>
@endif

<form action="/salvarPiscicultura" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{$piscicultura->id}}"/>
	<div class="form-group">
		<label>Nome da Piscultura</label><br>	
		<input type="form-control" name="nome" value="{{$piscicultura->nome}}" />
	</div>
	<input class="btn btn-primary" type="submit" value="Alterar" />		
</form>
@stop