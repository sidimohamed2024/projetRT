<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Expr implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

 
    public function passes($attribute, $value)
    {
           return $this->validerNumTelMauri($value)==$value;

    }

    public function validerNumTelMauri($valeur){
        $expReg='/^[2-4]\d{7}$/';
        if(preg_match($expReg,$valeur){
            return true;
        }
        else{
            return false;
        }
    }



    public function message()
    {
        return '';
    }
}
