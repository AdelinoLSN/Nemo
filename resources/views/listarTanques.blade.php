<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Listar Tanques | Nemo - Plataforma para gerenciamento de
      psiculturas</title>
  </head>
  <body>
    <ul>
      <h1>Listar Tanques</h1>
      @foreach ($tanques as $tanque)
      <b>Cod: {{ $tanque->id }}</b> - Volume: {{ $tanque->volume}},
      Manutenção Necessária: {{$tanque->manutencao_necessaria}}<br/>
      ID da Psicultura: {{$tanque->id_psicultura}} <br/>
        <a href="/editar/tanque/{{$tanque->id}}">Editar</a>
        <a href="/remover/tanque/{{$tanque->id}}">Remover</a>
      <br/>
      @endforeach
      <br/>
      <a href="/cadastrar/tanque/">Cadastrar Novo Tanque</a>
    </ul>
  </body>
</html>
