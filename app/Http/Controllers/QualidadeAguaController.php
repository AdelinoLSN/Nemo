<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class QualidadeAguaController extends Controller
{
    public function cadastrar(Request $request)
  {
    return view("cadastrarQualidadeAgua");
  }

  public function adicionar(Request $request){
    if(!$this->verificaTanqueExistente($request->id_tanque)) {
    	date_default_timezone_set('America/Sao_Paulo');
      $data = date('d-m-Y');
    	$data .= ' '.date('H:i:s');

      $tanque = \nemo\Tanque::find($request->id_tanque);

      $tanque->qualidade_aguas()->create([
        'ph' => $request->ph,
        'data' => $data,
      ]);

      /*$qualidadeAgua = new \nemo\QualidadeAgua();
      $qualidadeAgua->ph = $request->ph;
      $qualidadeAgua->data = $data;
      $qualidadeAgua->id_tanque = $request->id_tanque;
      $qualidadeAgua->save();*/

      return redirect("/listar/qualidadesAgua");
    }
    return redirect("/listar/qualidadesAgua");
  }
  
  public function verificaTanqueExistente($id){
    $tanque= \nemo\Tanque::where('id','=',$id)->first();
    return empty($tanque);
  }
  
 	public function listar () {
			$qualidadeAgua= \nemo\QualidadeAgua::all();
			return view("listarQualidadeAgua", ['listaQualidadesAgua' => $qualidadeAgua]);    	
    }
    
    public function editar($id) {
		$qualidadeAgua = \nemo\QualidadeAgua::find($id);
  		return view("editarQualidadeAgua", ['qualidadeAgua' => $qualidadeAgua]);
  }

  public function salvar(Request $request){
	 	$qualidadeAgua = \nemo\QualidadeAgua::find($request->id);
  		$qualidadeAgua ->ph = $request->ph;
  		$qualidadeAgua->update();
  		return redirect("/listar/qualidadesAgua");
  }
  
  public function remover(Request $request){
  		$qualidadeAgua = \nemo\QualidadeAgua::find($request->id);
    	return view("/removerQualidadeAgua", ['qualidadeAgua' => $qualidadeAgua]);
	}
	
	 public function apagar(Request $request){
  		$qualidadeAgua = \nemo\QualidadeAgua::find($request->id);
    	$qualidadeAgua->delete();
    	return redirect("/listar/qualidadesAgua");
	}

}
