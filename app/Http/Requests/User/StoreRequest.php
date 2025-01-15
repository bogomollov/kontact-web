<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'middleName' => ['required', 'string'],
            'department_id' => ['required', 'integer'],
            'role_id' => ['required', 'integer'],
        ];
    }
}
