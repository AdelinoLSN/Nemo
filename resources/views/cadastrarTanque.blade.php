<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Cadastrar Tanque | Nemo - Plataforma para gerenciamento de psiculturas</title>
  </head>
  <body>
    <h1>Cadastrar Tanque</h1>
    <form action="/adicionarTanque" method="post">
      {{ csrf_field() }}
      Volume: <input type="number" min="0" step="any" name="volume" required/><br/>
      ID da Psicultura: <input type="number" min="0" name="id_psicultura" required/><br/>
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
