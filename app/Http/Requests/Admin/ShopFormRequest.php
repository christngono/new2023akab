<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ShopFormRequest extends FormRequest
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
         'imagebanner'=>['required'],
         'description'=>['required'],
         'localisation'=>['required'],
         'note'=>['required'],
         'phone'=>['required', ' min:8']

        ];
    }
}
