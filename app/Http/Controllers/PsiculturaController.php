<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class PsiculturaController extends Controller
{
    public function listar(){
			$gerenciars = \nemo\Gerenciar::where('user_id','=',\Auth::user()->id)->get();

			$psiculturas = array();

			foreach ($gerenciars as &$gerenciar) {
				$psicultura = \nemo\Psicultura::find($gerenciar->psicultura_id);
				array_push($psiculturas,$psicultura);
				//return var_dump($psiculturas);
			}
			
			
			//return var_dump($gerenciars);

			//$psiculturas = \nemo\Psicultura::where('user_id','=', \Auth::user()->id)->get();
			return view('listarPsiculturas', ['psiculturas' => $psiculturas]);
    }

    public function cadastrar(){
    	return view("cadastrarPsicultura");
    }

    public function adicionar(Request $request){
		if($this->verificaNomeExistente($request->nome)) {
			$psicultura = \nemo\Psicultura::create([
				'nome' => $request->nome,
			]);

			$gerenciar = \nemo\Gerenciar::create([
				'user_id' => (int) \Auth::user()->id,
				'psicultura_id' => $psicultura->id,
			]);

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
