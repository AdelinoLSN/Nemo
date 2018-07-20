<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

use nemo\Psicultura;

class EspeciePeixe extends Model
{
	public $timestamps = false;
	protected $fillable = ['nome', 'tempo_desenvolvimento', 'quantidade_por_volume', 'tipo_racao', 'temperatura_ideal_agua'];

    public function psicultura(){
    	return $this->belongsTo(Psicultura::class);
    }
}
