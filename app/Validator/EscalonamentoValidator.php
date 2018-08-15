<?php

namespace nemo\Validator;

use nemo\Validator\ValidationException;

class EscalonamentoValidator{
    public static $rules = [
        'volume' => 'required|numeric',
        'quantidade_peixes' => 'required|numeric',
        'periodicidade' => 'required',
        'especie' => 'required'
    ];

    public static $messages = [
        'required' => 'O campo ":attribute" não pode ser vazio.'
    ];

    public static function validate($dados){
        $validator = \Validator::make($dados, EscalonamentoValidator::$rules, EscalonamentoValidator::$messages);

        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}

