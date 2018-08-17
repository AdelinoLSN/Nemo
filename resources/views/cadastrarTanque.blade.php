@extends('layouts.principal')
@section('title','Cadastrar Tanque')
@section('path')
  <a href="/listar/pisciculturas">Pisciculturas</a> > <a href="/info/piscicultura/{{$piscicultura->id}}"> {{$piscicultura->nome}} </a> > <a href="/listar/tanques/{{$piscicultura->id}}" > Tanques </a> > Cadastrar Tanque
@stop
@section('conteudo')
  <form action="/adicionarTanque" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id_piscicultura" value="{{$piscicultura->id}}">
    <div class="form-group">
      <label>Volume</label>
      <input class="form-control" type="number" min="0" step="any" name="volume" placeholder="Em litros" autofocus required/><br/>
    </div>
    <input class="btn btn-success" type="submit" value="Cadastrar" />
  </form>
@stop
