<?php

namespace LaravelLiberu\CnpValidator\Validators;

class Validator
{
    public static function cnp($attribute, $cnp)
    {
        return (new CnpValidator($cnp))->passes();
    }
}
