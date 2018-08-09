@extends('layouts.principal')
@section('title','Criar Piscicultura')
@section('path')
	Criar Piscicultura
@stop
@section('conteudo')
@if (isset($errors) && count($errors) > 0)
<div class="alert alert-danger" role="alert">
	@foreach($errors->getMessages() as &$error)
		{{$error[0]}}
	@endforeach
</div>
@endif
<form action="/adicionarPiscicultura" method="POST">
	@csrf
		
	</div>
	<div class="form-group">
		<label>Nome da piscicultura</lable>
		<input type="text" class="form-control" name="nome" placeholder="Peixes Felizes" value="{{old('nome')}}" />
	</div>
	<button type="submit" class="btn btn-primary">Criar</button>		
</form>
@stop