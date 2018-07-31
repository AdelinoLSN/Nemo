@extends('layouts.principal')
@section('title','Cadastrar Tanque')
@section('conteudo')
  <h1>Cadastrar Tanque</h1>
  <form action="/adicionarTanque" method="post">
    {{ csrf_field() }}
    Volume: <input type="number" min="0" step="any" name="volume" required/><br/>
    <input type="hidden" name="id_piscicultura" value="{{$id}}">
    <input type="submit" value="cadastrar" />
  </form>
@stop
