<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

use nemo\Piscicultura;

class EspeciePeixe extends Model
{
	public $timestamps = false;
	protected $fillable = ['nome', 'tempo_desenvolvimento', 'quantidade_por_volume', 'tipo_racao', 'temperatura_ideal_agua'];

    public function piscicultura(){
    	return $this->belongsTo(Piscicultura::class);
    }
}
