<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddCallerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
            return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'first_name'            => 'Required|alpha',
            'last_name'             => 'alpha',
            'gender'                => 'Required',
            'city'                  => 'alpha',
            'country'               => 'Required|alpha',
            'email'                 => 'Email|unique:callers,email',
            'mobile'                => 'Numeric|unique:callers,mobile',



        ];
    }
}
