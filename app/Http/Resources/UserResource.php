<?php

namespace App\Http\Resources;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Cache as Redis;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'middleName' => $this->middleName,
            'department_id' => $this->department_id,
            'position_id' => $this->position_id,
            'last_activity' => Redis::get($this->id . '_online'),
            'username' => $this->when(Account::find($this->id)->username, Account::find($this->id)->username),
        ];
    }
}
