<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class EspecieController extends Controller
{
    public function listar ($id) {
			$tanque = \nemo\Tanque::find($id);
    		$especiesPeixe= \nemo\EspeciePeixe::where('piscicultura_id','=',$tanque->piscicultura_id)->get();
    		return view('listarEspecie', ['listaEspecies' => $especiesPeixe, 'piscicultura_id' => $id,'id'=> $id]);
    		   	
    }
   
    public function adicionar($id) {
			return view("cadastrarEspecie", ['id' => $id]);    
    }
    
    public function cadastrar(Request $request){
    	$tanque = \nemo\Tanque::find($request->tanque_id);
    	if($this->verificaNomeExistente($request->nome)) {
    		if(!$this->veriPisciculturaExistente($tanque->piscicultura_id)) {   			

                $piscicultura = \nemo\Piscicultura::find($tanque->piscicultura_id);

                $piscicultura->especie_peixes()->create([
                    'nome' => $request->nome,
                    'tempo_desenvolvimento' => $request->tempo_desenvolvimento,
                    'quantidade_por_volume' => $request->quantidade_por_volume,
                    'tipo_racao' => $request->tipo_racao,
                    'temperatura_ideal_agua' => $request->temperatura_ideal_agua,
                ]);

    			
    		return redirect()->route("listarEspecies", ['id' => $tanque->id]);
    		}
    		
    	}
    	return redirect()->route("listarEspecies", ['id' => $tanque->id]);
   	
    }
    
    public function editar($tanque_id, $id) {
			$especiePeixe= \nemo\EspeciePeixe::find($id);   
    		return view("editarEspecie", ['especiePeixe' => $especiePeixe, 'especie_id' => $id,'tanque_id' => $tanque_id]);
    }
    
    public function salvar(Request $request){
	  	$especiePeixe = \nemo\EspeciePeixe::find($request->especie_id);
	  	$tanque = \nemo\Tanque::find($request->tanque_id);
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
    		return redirect()->route("listarEspecies", ['id' => $request->tanque_id]);
   	}
   	
   	return redirect()->route("listarEspecies", ['id' => $request->tanque_id]);
    }
    
    public function remover($tanque_id, $id){
  		$especiePeixe = \nemo\EspeciePeixe::find($id);
    	return view("/removerEspecie", ['especiePeixe' => $especiePeixe, 'especie_id' => $id,'tanque_id' => $tanque_id]);
	}
	
	 public function apagar(Request $request){
	 	$tanque = \nemo\Tanque::find($request->tanque_id);
  		$especiePeixe = \nemo\EspeciePeixe::find($request->especie_id);
    	$especiePeixe->delete();
    	return redirect()->route("listarEspecies", ['id' => $request->tanque_id]);
	}
	
	public function verificaNomeExistente($nome) {
   	$especiePeixe = \nemo\EspeciePeixe::where('nome','=',$nome)->first();
   	return empty($especiePeixe);
    
	}
	public function veriPisciculturaExistente($id){
		$piscicultura = \nemo\Piscicultura::where('id','=',$id)->first();
		return empty($piscicultura);
	}
}
