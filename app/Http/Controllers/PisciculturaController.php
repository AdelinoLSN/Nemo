<?php

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;

class PisciculturaController extends Controller
{
    public function listar(){
			$gerenciars = \nemo\Gerenciar::where('user_id','=',\Auth::user()->id)->get();

			$pisciculturas = array();

			foreach ($gerenciars as &$gerenciar) {
				$piscicultura = \nemo\Piscicultura::find($gerenciar->piscicultura_id);
				array_push($pisciculturas,$piscicultura);
			}

			return view('listarPisciculturas', ['pisciculturas' => $pisciculturas]);
    }

    public function cadastrar(){
    	return view("cadastrarPiscicultura");
    }

    public function adicionar(Request $request){
		if($this->verificaNomeExistente($request->nome)) {
			$piscicultura = \nemo\Piscicultura::create([
				'nome' => $request->nome,
			]);

			$gerenciar = \nemo\Gerenciar::create([
				'user_id' => (int) \Auth::user()->id,
				'piscicultura_id' => $piscicultura->id,
			]);

			return redirect("/listar/pisciculturas");
		}

		return redirect("/listar/pisciculturas");

    }

    public function editar($id){
		$piscicultura = \nemo\Piscicultura::find($id);
		return view("editarPiscicultura", ['piscicultura' => $piscicultura]);
    }

    public function salvar(Request $request){
		$piscicultura = \nemo\Piscicultura::find($request->id);
		if(($request->nome) == $piscicultura->nome) {
			$piscicultura->nome = $request->nome;
			$piscicultura->update();
			return redirect("/listar/pisciculturas");
		}elseif($this->verificaNomeExistente($request->nome)) {
			$piscicultura->nome = $request->nome;
			$piscicultura->update();
			return redirect("/listar/pisciculturas");
		}

		return redirect("/listar/pisciculturas");

    }

    public function remover($id){
		    $piscicultura = \nemo\Piscicultura::find($id);
		    return view("removerPiscicultura", ['piscicultura' => $piscicultura]);
    }

    public function apagar(Request $request){
		$piscicultura = \nemo\Piscicultura::find($request->id);
		$piscicultura->delete();
		return redirect("/listar/pisciculturas");
    }

    public function verificaNomeExistente($nome){
    	$piscicultura = \nemo\Piscicultura::where('nome','=',$nome)->first();
    	return empty($piscicultura);
    }

    public function phpAlert($msg) {
    	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
}
