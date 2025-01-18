<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'username' => ['required', 'string', 'unique:accounts,username'],
            'password' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:accounts,email'],
            'phone' => ['required', 'string'],
            'role' => ['required', 'string'],
        ];
    }
}
