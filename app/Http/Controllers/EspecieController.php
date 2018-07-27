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
    		if(!$this->veriPisciculturaExistente($request->id_piscicultura)) {

                $piscicultura = \nemo\Piscicultura::find($request->id_piscicultura);

                $piscicultura->especie_peixes()->create([
                    'nome' => $request->nome,
                    'tempo_desenvolvimento' => $request->tempo_desenvolvimento,
                    'quantidade_por_volume' => $request->quantidade_por_volume,
                    'tipo_racao' => $request->tipo_racao,
                    'temperatura_ideal_agua' => $request->temperatura_ideal_agua,
                ]);

    			/*$especiePeixe = new \nemo\EspeciePeixe();
    			$especiePeixe->nome = $request->nome;
    			$especiePeixe->id_piscicultura = $request->id_piscicultura;
    			$especiePeixe->tempo_desenvolvimento = $request->tempo_desenvolvimento;
    			$especiePeixe->quantidade_por_volume = $request->quantidade_por_volume;
    			$especiePeixe->tipo_racao = $request->tipo_racao;
    			$especiePeixe->temperatura_ideal_agua = $request->temperatura_ideal_agua;
    			$especiePeixe->save();*/
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
	public function veriPisciculturaExistente($id){
		$piscicultura = \nemo\Piscicultura::where('id','=',$id)->first();
		return empty($piscicultura);
	}
}
