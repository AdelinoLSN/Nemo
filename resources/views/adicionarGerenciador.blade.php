<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Adicionar Gerenciador | Nemo - Plataforma para gerenciamento de pisciculturas</title>
  </head>
  <body>
    <h1>Adicionar Gerenciador</h1>
    <form action="/inserirGerenciador" method="post">
      {{ csrf_field() }}
      Piscicultura: {{$piscicultura->nome}}<br/>
      E-mail: <input type="email" name="email" required/><br/>
      <input type="hidden" name="piscicultura_id" value="{{$piscicultura->id}}">
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
