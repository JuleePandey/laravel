<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'project_name' => 'required',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'rate' => 'required|numeric',
            'price' => 'required',
            'require' => 'required',
            'invoice' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ];
    }
}
