<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <title>Remover Tanque | Nemo - Plataforma para gerenciamento de psiculturas</title>
    </head>
    <body>
    	<h1>Remover Tanque</h1>
    	<form action="/apagarTanque" method="post">
        {{ csrf_field() }}
  			<input type="hidden" name="id" value="{{ $tanque->id}}" />
        ID: <input type="text" disabled="disabled" name="id" value="{{$tanque->id}}"><br/>
        Volume: <input type="text" disabled="disabled" name="volume" value="{{$tanque->volume}}"><br/>
        ID da Psicultura: <input type="text" disabled="disabled" name="id_psicultura" value="{{ $tanque->id_psicultura }}"><br/>
  			Necessária Manutenção: <input type="text" name="manutencao_necessaria" disabled="disabled" value="{{$tanque->manutencao_necessaria}}"><br/>
        <input type="submit" value="Remover" />
    	</form>
    </body>
</html>
