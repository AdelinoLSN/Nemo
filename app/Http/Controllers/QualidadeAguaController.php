<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class QualidadeAguaController extends Controller
{
    public function cadastrar($tanque_id){
    	$tanque = \nemo\Tanque::find($tanque_id);
    	$idPiscultura = $tanque->piscicultura_id;
    	$piscicultura = \nemo\Piscicultura::find($idPiscultura);
    	  	
    	return view("cadastrarQualidadeAgua",['tanque_id'=>$tanque_id,'tanque' => $tanque,'piscicultura' => $piscicultura]);
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
      
       return redirect()->route("listarTanques", ['id' => $request->id_tanque]);
    }
    return redirect()->route("listarTanques", ['id' => $request->id_tanque]);
  }
  
  public function verificaTanqueExistente($id){
    $tanque= \nemo\Tanque::where('id','=',$id)->first();
    return empty($tanque);
  }
  
 	public function listar ($id) {
			$qualidadeAgua= \nemo\QualidadeAgua::all();
			$tanque= \nemo\Tanque::find($id);
			return view("listarQualidadeAgua", ['listaQualidadesAgua' => $qualidadeAgua,'id'=>$id]);    	
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
