
<!doctype html>
@extends('layouts.principal')
@section('title','Editar Especie')
@section('conteudo')
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Editar Especie</title>

    </head>
    <body>
    	<h1>Editar Especie</h1>
    	
    	<form action="/salvarEspecie" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			<input type="hidden" name="especie_id" value="{{ $especie_id}}" />
    			<input type="hidden" name="tanque_id" value="{{ $tanque_id}}" />
    			Nome: <input type="text" name="nome"value="{{$especiePeixe->nome}}"required="required"><br/>
    			Tempo de desenvolvimento: <input type="number" name="tempo_desenvolvimento"value="{{$especiePeixe->tempo_desenvolvimento}}"required="required"><br/>
    			Tipo de Ração: <input type="text" name="tipo_racao"value="{{$especiePeixe->tipo_racao}}"required="required"><br/>
    			Temperatura ideal da água: <input type="number" name="temperatura_ideal_agua" value="{{$especiePeixe->temperatura_ideal_agua}}"required="required"><br/>
    			Quantidade de peixes por volume: <input type="number" name="quantidade_por_volume"value="{{$especiePeixe->quantidade_por_volume}}"required="required"><br/>
    			<input  type="submit" value="alterar" />
    	</form>
 
    </body>
</html>
@stop