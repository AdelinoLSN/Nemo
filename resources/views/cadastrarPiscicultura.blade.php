@extends('layouts.principal')
@section('title','Criar Piscicultura')
@section('path')
	Criar Piscicultura
@stop
@section('conteudo')
	<form action="/adicionarPiscicultura" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Nome da piscicultura</lable>
			<input type="text" class="form-control" name="nome" placeholder="Peixes Felizes" required/>
		</div>
		<button type="submit" class="btn btn-primary">Criar</button>		
	</form>
@stop