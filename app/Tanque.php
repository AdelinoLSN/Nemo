<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

use nemo\Psicultura;

class Tanque extends Model
{
	public $timestamps = false;
	protected $fillable = ['volume'];
    
    public function psicultura(){
    	return $this->belongsTo(Psicultura::class);
    }

    public function qualidade_aguas(){
    	return $this->hasMany(QualidadeAgua::class);
    }
}
