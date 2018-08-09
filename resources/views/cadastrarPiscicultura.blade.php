@extends('layouts.principal')
@section('title','Criar Piscicultura')
@section('path')
	Criar Piscicultura
@stop
@section('conteudo')
	<form action="/adicionarPiscicultura" method="post">
		{{ csrf_field() }}
		@if (isset($errors) && count($errors) > 0)
			<div class="alert alert-danger" role="alert">
				@foreach($errors as &$error)
				{{$error->first()}}
				@endforeach
			</div>
		@endif
  			
		</div>
		<div class="form-group">
			<label>Nome da piscicultura</lable>
			<input type="text" class="form-control" name="nome" placeholder="Peixes Felizes" value="{{old('nome')}}" />
		</div>
		<button type="submit" class="btn btn-primary">Criar</button>		
	</form>
@stop