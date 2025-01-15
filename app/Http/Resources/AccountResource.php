<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'username' => $this->username,
            'password' => $this->when(!$request->isMethod('get'), $this->password),
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $this->role,
        ];
    }
}
