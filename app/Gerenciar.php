<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;

class Gerenciar extends Model
{
    protected $fillable = ['user_id', 'psicultura_id'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('nemo\User', 'user_id');
    }

    public function psicultura(){
        return $this->belongsTo('nemo\Psicultura', 'psicultura_id');
    }
}
