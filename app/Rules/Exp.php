<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Exp implements Rule
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

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        return $this->validerNumeroMauritanien($value)==$value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */

public function validerNumeroMauritanien($numero) {
    
    $pattern = '/^[2-4] \d{7}$/';

    if (preg_match($pattern, $numero)) {
        return true;
    } else {
        return false;
    }
}


    public function message()
    {
        return ' ce n\'est pas un numéro de téléphone valide';
    }
}
