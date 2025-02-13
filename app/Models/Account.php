<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, SoftDeletes;

    public function userInfo(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function isAdmin(): bool {
        return Role::find($this->role_id)->name === Roles::Admin;
    }

    protected $fillable = [
        'user_id',
        'username',
        'password',
        'email',
        'phone',
        'role_id',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
