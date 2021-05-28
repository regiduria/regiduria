<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdministradore extends FormRequest
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
            'area' => 'required',
            'nombre'=> 'required',
            'cargo'=> 'required',
            'lugar'=> 'required',
            'telefono'=> 'required',
            'email'=> 'required'
        ];
    }
}
