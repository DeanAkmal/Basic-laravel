<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' =>  'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'bio' => 'nullable|string|max:255',
            'umur' => 'nullable|string|max:2',
            'alamat' => 'nullable|string|max:255',
        ];
    }
}
