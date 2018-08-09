<!doctype html>
@extends('layouts.principal')
@section('title','Editar Especie')
@section('path')
	Piscultura {{$piscicultura->nome}} > Remover
@stop
@section('conteudo')
	<form action="/apagarPiscicultura" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="id" value=" {{ $piscicultura->id}}"/>
		<input type="hidden" name="id" value="{{$piscicultura->id}}"/>
		<div class="form-group">
			<label>Nome da Piscultura</label><br>	
			<input type='form-group' disabled="disabled" name="nome" value="{{$piscicultura->nome}}"/>
		</div>
		<input type="submit" class="btn btn-primary" value="Remover" />
	</form>
@stop

