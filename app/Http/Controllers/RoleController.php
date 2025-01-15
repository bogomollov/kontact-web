<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
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

    public function show(Role $role) {
        $cache = Redis::get('role_show_' . $role->id);
        if ($cache) return $cache;
        else {
            $cache = new RoleResource($role);
            Redis::put('role_show_' . $role->id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function store(StoreRequest $request) {
        return new RoleResource(Role::create($request->validated()));
    }

    public function update(UpdateRequest $request, Role $role) {
        $role->update($request->validated());
        return new RoleResource($role);
    }

    public function destroy(Role $role) {
        $role->delete();
        return new RoleResource($role);
    }
}
