<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class PovoamentoController extends Controller
{
	
	 public function povoarTanque($tanque_id, $especie_id)
  {
    return view("povoarTanque", ['tanque_id' => $tanque_id,'especie_id'=> $especie_id]);
  }
    public function inserirPeixe(Request $request){
    	$tanque = \nemo\Tanque::find($request->id_tanque);
    	//dd($tanque);
    	date_default_timezone_set('America/Sao_Paulo');
      $data = date('d-m-Y');
    	$data .= ' '.date('H:i:s');
        $povoamento = \nemo\Povoamento::create([
				'tanque_id' => $request->id_tanque,       
				'especie_id' => $request->id_especie,
				'data' => $data,
				'quantidade' => $request->quantidade,
				       
        ]);
        return redirect()->route("listarTanques", ['id' => $tanque->piscicultura_id]);
    }
    public function listar ($id) {
			$povoamentos = \nemo\Povoamento::where('tanque_id','=',$id)->get();
			$especiesPeixe = array();
			
			foreach ($povoamentos as &$povoamento) {
				$especiePeixe= \nemo\EspeciePeixe::find($povoamento->especie_id);
				array_push($especiesPeixe,$especiePeixe);
			}
    		return view('infoTanque', ['listaEspecies' => $especiesPeixe]);
    		   	
    }
}
