<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use nemo\Tanque;
use nemo\EspeciePeixe;

class Piscicultura extends Model
{
	public $timestamps = false;
	protected $fillable = ['nome'];
 
    public static $rules = [
        'nome' => 'required|min:3|unique:pisciculturas,nome',
    ];

    public static $messages = [
        'required' => 'O campo ":attribute" não pode ser vazio.',
        'nome.unique' => 'Já existe outra piscicultura com o nome ":input".',
        'nome.min' => 'O nome da piscicultura precisa ter ao menos :min characters.',
    ];

    public function tanques(){
    	return $this->hasMany(Tanque::class);
    }

    public function especie_peixes(){
    	return $this->hasMany(EspeciePeixe::class);
    }

    public function gerenciars(){
        return $this->hasMany(Gerenciar::class);
    }
}
