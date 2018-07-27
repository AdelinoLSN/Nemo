<?php

use nemo\Tanque;

namespace nemo\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class TanqueController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }

  public function listar($id)
  {
    $tanques = \nemo\Tanque::where('piscicultura_id','=',$id)->get();
    return view('listarTanques', ['tanques' => $tanques, 'piscicultura_id' => $id]);
  }

  public function cadastrar($id)
  {
    return view("cadastrarTanque", ['id' => $id]);
  }

  public function adicionar(Request $request){

    $piscicultura = \nemo\Piscicultura::find($request->id_piscicultura);

    $piscicultura->tanques()->create([
      'volume' => $request->volume,
      'manutencao_necessaria' => 'Não',
    ]);

    return redirect()->route("listarTanques", ['id' => $request->id_piscicultura]);
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
    return redirect()->route("listarTanques", ['id' => $tanque->piscicultura_id]);
  }

  public function remover(Request $request){
  	$tanque = \nemo\Tanque::find($request->id);
  	return view("/removerTanque", ['tanque' => $tanque]);
	}

	public function apagar(Request $request){
  	$tanque = \nemo\Tanque::find($request->id);
    $tanque->delete();
    return redirect()->route("listarTanques", ['id' => $tanque->piscicultura_id]);
	}
}
