<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
  // it is request commond which was created by using terminal 
class Projectregisterform extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'location' =>'required',
            'country' => 'required',
            'rate' => 'required|numeric' ,
            'price' => 'required|numeric',
            'email' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'My name is required',
            // 'location' =>'required',
            // 'country' => 'required',
            // 'rate' => 'required|numeric' ,
            // 'price' => 'required|numeric',
            // 'email' => 'required',
            // 'message' => 'required'
        ];
    }
}
