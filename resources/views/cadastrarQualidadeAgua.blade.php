<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Cadastro de Qualidade de água</title>

    </head>
    <body>
    	<h1>Cadastrar Qualidade de água<h1>
    	
    	<form action="/adicionarQualidadeAgua" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			PH: <input type="number" name="ph"required="required"><br/>
   			ID do Tanque:<input type="integer" name="id_tanque"required="required"><br/>
    			<input  type="submit" value="cadastrar" />
    	</form>
 
    </body>
</html>