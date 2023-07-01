<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
         "name"=>['required', 'min:4'],
         'price'=>['required', 'integer'],
         'bref'=>['required', 'min:8'],
         'salecondition'=>['required', 'min:8'],
         'avantage'=>['required', 'min:8'],
         'view'=>['required'],
         'image'=>['required'],
         'numberlike'=>['integer'],
         'is_sold'=>['required','boolean'],
         'category'=> ['array','exists:categories:id', 'required'],
         'shop'=> ['array','exists:shops:id', 'required']

        ];
    }
}
