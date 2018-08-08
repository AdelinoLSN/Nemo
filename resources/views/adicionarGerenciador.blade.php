@extends('layouts.principal')
@section('title','Adicionar Gerenciador')
@section('path')
	Piscicultura: <b>{{$piscicultura->nome}}</b> > Adicionar Gerenciador</h2>
@stop
@section('conteudo')
  <form action="/inserirGerenciador" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="piscicultura_id" value="{{$piscicultura->id}}">
    <div class="form-group">
      <label>Endereço de e-mail</label>
      <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
@stop