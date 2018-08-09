<!doctype html>
@extends('layouts.principal')
@section('title','Editar Piscucultura')
@section('path')
	Piscultura {{$piscicultura->nome}} > Editar
@stop
@section('conteudo')
	<form action="/salvarPiscicultura" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$piscicultura->id}}"/>
		<div class="form-group">
			<label>Nome da Piscultura</label><br>	
			<input type="form-control" name="nome" value="{{$piscicultura->nome}}" required/>
		</div>
		<input class="btn btn-primary" type="submit" value="Alterar" />		
	</form>
@stop