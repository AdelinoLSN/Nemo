@extends('layouts.principal')
@section('title','Cadastrar PH')
@section('path')
<a href="/listar/pisciculturas">Pisciculturas</a> > <a href="/info/piscicultura/{{$piscicultura->id}}"> {{$piscicultura->nome}} </a> > <a href="/listar/tanques/{{$tanque->id}}">Tanques</a> > Cadastrar PH da água	
@stop
@section('conteudo')
  <form action="/adicionarQualidadeAgua" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id_tanque" value="{{ $tanque->id}}" />
    <div class="form-group">
      <label>PH</label>
      <input class="form-control" type="number" name="ph" min="0" max="14" required/>
    </div>
    <input class="btn btn-success" type="submit" value="Cadastrar" />
  </form>
@stop