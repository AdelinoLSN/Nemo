@extends('layouts.principal')
@section('title','Cadastrar Tanque')
@section('path')
	
@stop
@section('conteudo')
  <form action="/pescarEspecie" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id_piscicultura" value="{{$piscicultura->id}}">
    <input type="hidden" name="id_tanque" value="{{$tanque_id}}">
    <input type="hidden" name="id_povoamento" value="{{$povoamento_id}}">
    <input type="hidden" name="id_especie" value="{{$especie_id}}">
    <div class="form-group">
      <label>Peso</label>
      <input class="form-control" type="number" min="0" step="any" name="peso" placeholder="Em Kg" required/><br/>
    </div>
    <input class="btn btn-success" type="submit" value="Pescar" />
  </form>
@stop