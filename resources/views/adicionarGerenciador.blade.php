@extends('layouts.principal')
@section('title','Adicionar Gerenciador')
@section('conteudo')
	<h1>Adicionar Gerenciador</h1>
    <form action="/inserirGerenciador" method="post">
      {{ csrf_field() }}
      Piscicultura: {{$piscicultura->nome}}<br/>
      E-mail: <input type="email" name="email" required/><br/>
      <input type="hidden" name="piscicultura_id" value="{{$piscicultura->id}}">
      <input type="submit" value="cadastrar" />
    </form>
@stop
