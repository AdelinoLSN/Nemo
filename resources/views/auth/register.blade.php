@extends('layouts.principal')
@section('title','Cadastrar')
@section('path')
    Cadastrar
@stop
@section('conteudo')
<div class="container" width="50%">
    <div class="card">
        <div class="card-header">
            Cadastro
        </div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="name" autofocus/>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="email" name="email" />
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="form-group">
                    <label>Confirmar senha</label>
                    <input class="form-control" type="password" name="password_confirmation" />
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
