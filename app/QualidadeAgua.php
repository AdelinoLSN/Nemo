<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;

class QualidadeAgua extends Model
{
	public $timestamps = false;
	protected $fillable = ['ph','data'];

    public function tanque(){
    	return $this->belongsTo(Tanque::class);
    }
}
