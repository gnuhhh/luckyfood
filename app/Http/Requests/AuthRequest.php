<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AuthRequest extends FormRequest
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
            'email' => [
                'required', 
                'email'
            ],
            'password' => [
                'required',
                'string',
                Password::min(6)
            ]
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Đây là thông tin bắt buộc',
            'email.email' => 'Email chưa đúng định dạng. Ví dụ: abc@gmail.com',
            'password.required' => 'Đây là thông tin bắt buộc',
            'password.min' => 'Password phải ít nhất 6 kí tự'
        ];
    }
}
