<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

use nemo\Piscicultura;

class Tanque extends Model
{
	public $timestamps = false;
	protected $fillable = ['volume'];
    
    public function piscicultura(){
    	return $this->belongsTo(Piscicultura::class);
    }

    public function qualidade_aguas(){
    	return $this->hasMany(QualidadeAgua::class);
    }
    
    public function povoamentos(){
        return $this->hasMany(Povoamento::class);
    }
}
