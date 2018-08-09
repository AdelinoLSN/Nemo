

<!doctype html>
@extends('layouts.principal')
@section('title','Povoar Tanque')
@section('path')
	Piscultura {{$piscicultura->nome}} > Tanque {{$tanque_id}} > Especie: {{$especiePeixe->nome}} > Povoar
@stop
@section('conteudo')
	<form action="/inserirPeixe" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_tanque" value="{{$tanque_id}}">
      <input type="hidden" name="id_especie" value="{{$especie_id}}">
		<div class="form-group">
			<label>Quantidade</label><br>	
			<input type="number" min="0" step="any" name="quantidade" required/>
		</div>
		<input class="btn btn-primary" type="submit" value="Adicionar ao tanque" />		
	</form>
@stop