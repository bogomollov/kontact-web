<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'display_name',
        'login',
        'password',
        'email',
        'email_verified_at',
        'is_online',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
