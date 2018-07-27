<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <title>Editar Tanque | Nemo - Plataforma para gerenciamento de pisciculturas</title>
    </head>
    <body>
    	<h1>Editar Tanque</h1>
    	<form action="/salvarTanque" method="post">
        {{ csrf_field() }}
    		<input type="hidden" name="id" min="0" value="{{ $tanque->id}}" />
        Volume: <input type="number" step="any" name="volume" value="{{$tanque->volume}}" required/><br/>
        Necessita de Manutenção:
        <input type="radio" name="manutencao_necessaria" value="Não" checked="checked"/>Não
        <input type="radio" name="manutencao_necessaria" value="Sim"/>Sim
  			<input  type="submit" value="alterar" />
    	</form>
    </body>
</html>
