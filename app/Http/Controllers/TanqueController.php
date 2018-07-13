<?php

use nemo\Tanque;

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class TanqueController extends Controller
{
  public function listar()
  {
    $tanques = \nemo\Tanque::all();
    return view('listarTanques', ['tanques' => $tanques]);
  }

  public function cadastrar(Request $request)
  {
    return view("cadastrarTanque");
  }

  public function adicionar(Request $request){
    if(!$this->verificaPsiculturaExistente($request->id_psicultura)) {
      $tanque = new \nemo\Tanque();
      $tanque->volume = $request->volume;
      $tanque->manutencao_necessaria = "Não";
      $tanque->id_psicultura = $request->id_psicultura;
      $tanque->save();

      return redirect("/listar/tanques");
    }
    return redirect("/listar/tanques");
  }

  public function editar($id) {
		$tanque = \nemo\Tanque::find($id);
  	return view("editarTanque", ['tanque' => $tanque]);
  }

  public function salvar(Request $request){
	 	$tanque = \nemo\Tanque::find($request->id);
  	$tanque->volume = $request->volume;
    $tanque->manutencao_necessaria = $request->manutencao_necessaria;
  	$tanque->update();
  	return redirect("/listar/tanques");
  }

  public function remover(Request $request){
  	$tanque = \nemo\Tanque::find($request->id);
  	return view("/removerTanque", ['tanque' => $tanque]);
	}

	public function apagar(Request $request){
  	$tanque = \nemo\Tanque::find($request->id);
  	$tanque->delete();
  	return redirect("/listar/tanques");
	}

  public function verificaPsiculturaExistente($id){
    $psicultura = \nemo\Psicultura::where('id','=',$id)->first();
    return empty($psicultura);
  }
}
