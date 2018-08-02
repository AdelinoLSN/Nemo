
<!doctype html>
@extends('layouts.principal')
@section('title','Remover Especie')
@section('conteudo')
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Remover Especie</title>

    </head>
    <body>
    	<h1>Confirmar Remover Especie</h1>
    	
    	<form action="/apagarEspecie" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			<input type="hidden" name="especie_id" value="{{ $especie_id}}" />
    			<input type="hidden" name="tanque_id" value="{{ $tanque_id}}" />
    			Nome: <input type="text" disabled="disabled" name="nome" value="{{$especiePeixe->nome}}"><br/>
    			<input  type="submit" value="remover!" />
    	</form>
 
    </body>
</html>
@stop