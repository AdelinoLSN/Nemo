<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class EspecieController extends Controller
{
    public function listar () {
			$especiesPeixe= \nemo\EspeciePeixe::all();
			return view("listarEspecie", ['listaEspecies' => $especiesPeixe]);    	
    }
   
    public function adicionar() {
			return view("cadastrarEspecie");    
    }
    
    public function cadastrar(Request $request){
    	if($this->verificaNomeExistente($request->nome)) {
    		if(!$this->veriPsiculturaExistente($request->id_psicultura)) {
    			$especiePeixe = new \nemo\EspeciePeixe();
    			$especiePeixe->nome = $request->nome;
    			$especiePeixe->id_psicultura = $request->id_psicultura;
    			$especiePeixe->tempo_desenvolvimento = $request->tempo_desenvolvimento;
    			$especiePeixe->quantidade_por_volume = $request->quantidade_por_volume;
    			$especiePeixe->tipo_racao = $request->tipo_racao;
    			$especiePeixe->temperatura_ideal_agua = $request->temperatura_ideal_agua;
    			$especiePeixe->save();
    		return redirect("/listar/especies");
    		}
    		
    	}
    	return redirect("/listar/especies");
   	
    }
    
    public function editar($id) {
			$especiePeixe= \nemo\EspeciePeixe::find($id);   
    		return view("editarEspecie", ['especiePeixe' => $especiePeixe]);
    }
    
    public function salvar(Request $request){
	  	$especiePeixe = \nemo\EspeciePeixe::find($request->id);
	  	if(($request->nome)==$especiePeixe->nome) {
	  		$especiePeixe->nome = $request->nome;
    		$especiePeixe->tempo_desenvolvimento = $request->tempo_desenvolvimento;
    		$especiePeixe->quantidade_por_volume = $request->quantidade_por_volume;
    		$especiePeixe->tipo_racao = $request->tipo_racao;
    		$especiePeixe->temperatura_ideal_agua = $request->temperatura_ideal_agua;
    		$especiePeixe->update();
	  	}elseif($this->verificaNomeExistente($request->nome)) {
    		$especiePeixe->nome = $request->nome;
    		$especiePeixe->tempo_desenvolvimento = $request->tempo_desenvolvimento;
    		$especiePeixe->quantidade_por_volume = $request->quantidade_por_volume;
    		$especiePeixe->tipo_racao = $request->tipo_racao;
    		$especiePeixe->temperatura_ideal_agua = $request->temperatura_ideal_agua;
    		$especiePeixe->update();

    		return redirect("/listar/especies");
   	}
   	return redirect("/listar/especies");
    }
    
    public function remover(Request $request){
  		$especiePeixe = \nemo\EspeciePeixe::find($request->id);
    	return view("/removerEspecie", ['especiePeixe' => $especiePeixe]);
	}
	
	 public function apagar(Request $request){
  		$especiePeixe = \nemo\EspeciePeixe::find($request->id);
    	$especiePeixe->delete();
    	return redirect("/listar/especies");
	}
	
	public function verificaNomeExistente($nome) {
   	$especiePeixe = \nemo\EspeciePeixe::where('nome','=',$nome)->first();
   	return empty($especiePeixe);
    
	}
	public function veriPsiculturaExistente($id){
		$psicultura = \nemo\Psicultura::where('id','=',$id)->first();
		return empty($psicultura);
	}
}
