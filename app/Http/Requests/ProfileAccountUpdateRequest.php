<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileAccountUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'unique:accounts,username,' . Auth::user()->id],
            'email' => ['required', 'email', 'unique:accounts,email,' . Auth::user()->id],
            'phone' => ['required', 'string', 'unique:accounts,phone,' . Auth::user()->id],
        ];
    }
}
