<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Cadastro de Especie</title>

    </head>
    <body>
    	<h1>Cadastrar Especie</h1>
    	
    	<form action="/cadastrarEspecie" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			Nome: <input type="text" name="nome"required="required"><br/>
	    		Tempo de desenvolvimento: <input type="number" name="tempo_desenvolvimento" required="required" ><br/>
    			Tipo de Ração: <input type="text" name="tipo_racao" required="required"><br/>
    			Temperatura ideal da água: <input type="number" name="temperatura_ideal_agua" required="required"><br/>
    			ID da psicultura: <input type="integer" name="id_psicultura" required="required"><br/>
    			Quantidade de peixes por volume: <input type="number" name="quantidade_por_volume"required="required" <br/>
    			<input  type="submit" value="cadastrar" />
    	</form>
 
    </body>
</html>