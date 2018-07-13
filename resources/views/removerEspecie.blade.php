<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Remover Especie</title>

    </head>
    <body>
    	<h1>Confirmar Remover Especie</h1>
    	
    	<form action="/apagarEspecie" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			<input type="hidden" name="id" value="{{ $especiePeixe->id}}" />
    			Nome: <input type="text" disabled="disabled" name="nome" value="{{$especiePeixe->nome}}"><br/>
    			<input  type="submit" value="remover!" />
    	</form>
 
    </body>
</html>