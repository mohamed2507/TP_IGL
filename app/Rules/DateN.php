<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateN implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $x=explode('-',$value);
        $year=(int)$x[0];
        $date=(int)date('Y');
        $date=$date-16;
        return ($year<=$date);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "l'age doit etre resonable";
    }
}
