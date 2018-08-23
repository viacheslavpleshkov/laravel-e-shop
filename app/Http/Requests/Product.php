<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
            'name' => 'required',
            'images' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'new' => 'required',
            'trend' => 'required',
            'color' => 'required',
            'url' => 'required',
            'brand_id' => 'required',
            'made_id' => 'required',
            'information' => 'required',
            'specifications' => 'required',
            'status' => 'required',
        ];
    }
}
