<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class QualidadeAguaController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

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
      //dd($request->nivelOxigenio();
      $qualidade = new \nemo\QualidadeAgua();
      $qualidade->ph = $request->ph;
      $qualidade->nivelOxigenio = $request->nivelOxigenio;
      $qualidade->temperatura = $request->temperatura;
      $qualidade->nivelAmonia = $request->nivelAmonia;
      $qualidade->nitrito = $request->nitrato;
      $qualidade->nitrato = $request->nitrato;
      $qualidade->alcalinidade = $request->alcalinidade;
      $qualidade->dureza = $request->dureza;
      $qualidade->data = $data;
      $qualidade->tanque_id = $tanque->id;
      $qualidade->save();
      
       return redirect()->route("listarTanques", ['id' => $tanque->piscicultura_id]);
    }
    return redirect()->route("listarTanques", ['id' => $tanque->piscicultura_id]);
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
