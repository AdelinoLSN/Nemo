<!doctype html>
@extends('layouts.principal')
@section('title','Informacoes Tanques')
@section('conteudo')
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Povoar Tanque | Nemo - Plataforma para gerenciamento de pisciculturas</title>
  </head>
  <body>
    <h1>Povoar Tanque</h1>
    <form action="/inserirPeixe" method="post">
      {{ csrf_field() }}
      Quantidade: <input type="number" min="0" step="any" name="quantidade" required/><br/>
       <input type="hidden" name="id_tanque" value="{{$tanque_id}}">
       <input type="hidden" name="id_especie" value="{{$especie_id}}">
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
@stop