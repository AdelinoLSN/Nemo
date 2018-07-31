@extends('layouts.principal')
@section('title','Cadastrar Piscicultura')
@section('conteudo')
	<h1>Cadastrar Piscicultura</h1>
	<form action="/adicionarPiscicultura" method="post">
		{{ csrf_field() }}
		
		Nome da piscicultura: <input type="text" name="nome" required/>
		<input type="submit" value="Cadastrar" />		
	</form>
@stop