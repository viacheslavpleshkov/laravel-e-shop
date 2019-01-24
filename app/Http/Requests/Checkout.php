<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkout extends FormRequest
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
            'name-and-surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal-code' => 'required|string|max:255',
        ];
    }
}
