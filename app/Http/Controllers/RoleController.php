<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache as Redis;

class RoleController extends Controller
{
    public function index() {
        $cache = Redis::get('role_index');
        if ($cache) return $cache;
        else {
            $cache = RoleResource::collection(Role::all());
            Redis::put('role_index', $cache, now()->addMinutes(10));
            return $cache;
        }
    }
}