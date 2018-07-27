<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Cadastrar Tanque | Nemo - Plataforma para gerenciamento de pisciculturas</title>
  </head>
  <body>
    <h1>Cadastrar Tanque</h1>
    <form action="/adicionarTanque" method="post">
      {{ csrf_field() }}
      Volume: <input type="number" min="0" step="any" name="volume" required/><br/>
      <input type="hidden" name="id_piscicultura" value="{{$id}}">
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
