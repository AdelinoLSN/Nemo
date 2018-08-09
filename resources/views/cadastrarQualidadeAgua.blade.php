@extends('layouts.principal')
@section('title','Cadastrar PH')
@section('path')
	Piscicultura: {{$piscicultura->nome}} > Tanque {{$tanque->id}} > Adicionar PH
@stop
@section('conteudo')
  <form action="/adicionarQualidadeAgua" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id_tanque" value="{{ $tanque->id}}" />
    <div class="form-group">
      <label>PH</label>
      <input class="form-control" type="number" step="any" name="ph"required="required"/>
    </div>
    <input class="btn btn-success" type="submit" value="Cadastrar" />
  </form>
@stop