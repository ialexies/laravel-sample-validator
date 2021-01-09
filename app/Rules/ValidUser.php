<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidUser implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $age;

    public function __construct($age)
    {
        //
        $this->age = $age;
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

        if($this->age > 100){
            // dd('greater than 100');
            return false;
        }else{
            // dd('less than 100');
            return true;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Age must be less than 100';
    }
}
