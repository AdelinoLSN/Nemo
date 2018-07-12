<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class PsiculturaController extends Controller
{
    public function listar(){
		$psiculturas = \nemo\Psicultura::all();
		return view('listarPsiculturas', ['psiculturas' => $psiculturas]);  
    }
    
    public function cadastrar(){
    	return view("cadastrarPsicultura");
    }
    
    public function adicionar(Request $request){			
		if($this->verificaNomeExistente($request->nome)) {
			$psicultura = new \nemo\Psicultura();
			$psicultura->nome = $request->nome;
			$psicultura->save();
		
			return redirect("/listar/psiculturas");	
		}
			
		return redirect("/listar/psiculturas");

    }
    
    public function editar($id){
		$psicultura = \nemo\Psicultura::find($id);
		return view("editarPsicultura", ['psicultura' => $psicultura]);    
    }    
    
    public function salvar(Request $request){
		$psicultura = \nemo\Psicultura::find($request->id);
		if(($request->nome) == $psicultura->nome) {
			$psicultura->nome = $request->nome;
			$psicultura->update();
			return redirect("/listar/psiculturas"); 
		}elseif($this->verificaNomeExistente($request->nome)) {
			$psicultura->nome = $request->nome;
			$psicultura->update();
			return redirect("/listar/psiculturas");		
		}
		
		return redirect("/listar/psiculturas");		
		   
    }
    
    public function remover($id){
		    $psicultura = \nemo\Psicultura::find($id);
		    return view("removerPsicultura", ['psicultura' => $psicultura]);
    }
    
    public function apagar(Request $request){
		$psicultura = \nemo\Psicultura::find($request->id);
		$psicultura->delete();
		return redirect("/listar/psiculturas"); 
    }
    
    public function verificaNomeExistente($nome){
    	$psicultura = \nemo\Psicultura::where('nome','=',$nome)->first();
    	return empty($psicultura);
    }
    
    public function phpAlert($msg) {
    	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
}
