@extends('layouts.principal')
@section('title','Remover Tanque')
@section('conteudo')
  <h1>Remover Tanque</h1>
  <form action="/apagarTanque" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $tanque->id}}" />
    ID: <input type="text" disabled="disabled" name="id" value="{{$tanque->id}}"><br/>
    Volume: <input type="text" disabled="disabled" name="volume" value="{{$tanque->volume}}"><br/>
    ID da Piscicultura: <input type="text" disabled="disabled" name="id_piscicultura" value="{{ $tanque->id_piscicultura }}"><br/>
    Necessária Manutenção: <input type="text" name="manutencao_necessaria" disabled="disabled" value="{{$tanque->manutencao_necessaria}}"><br/>
    <input type="submit" value="Remover" />
  </form>
@stop