@extends('layouts.principal')
@section('title','Cadastrar Tanque')
@section('path')
	Piscicultura: {{$piscicultura->nome}} > Cadastrar Tanque
@stop
@section('conteudo')
  <form action="/adicionarTanque" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id_piscicultura" value="{{$piscicultura->id}}">
    <div class="form-group">
      <label>Volume</label>
      <input class="form-control" type="number" min="0" step="any" name="volume" placeholder="Em litros" required/><br/>
    </div>
    <input class="btn btn-primary" type="submit" value="Cadastrar" />
  </form>
@stop
