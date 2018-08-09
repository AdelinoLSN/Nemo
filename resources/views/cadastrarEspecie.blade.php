<!doctype html>
@extends('layouts.principal')
@section('title','Editar Especie')
@section('path')
	Piscultura {{$piscicultura->nome}} > Tanque {{$tanque->id}} > Povoar > Especies > Cadastrar nova especie
@stop
@section('conteudo')	
	<form action="/cadastrarEspecie" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    	<input type="hidden" name="tanque_id" value="{{ $tanque->id}}" />
		<div class="form-group">
			<label>Nome</label><br>	
			<input type="text" name="nome"required="required"/>
		</div>
		<div class="form-group">
			<label>Tempo de desenvolvimento em meses</label><br>	
			<input type="number" name="tempo_desenvolvimento" required="required" />
		</div>
		<div class="form-group">
			<label>Tipo de Ração</label><br>	
			<input type="text" name="tipo_racao" required="required"/>
		</div>
		<div class="form-group">
			<label>Temperatura ideal da água em graus</label><br>	
			<input type="number" name="temperatura_ideal_agua" required="required">
		</div>
		<div class="form-group">
			<label>Quantidade de peixes por litro</label><br>	
			<input type="number" name="quantidade_por_volume"required="required"/>
		</div>
		<input class="btn btn-primary" type="submit" value="Cadastrar" />		
	</form>
@stop