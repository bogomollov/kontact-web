<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Resources\UserResource;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache as Redis;

class UserController extends Controller
{
    public function index() {
        $cache = Redis::get('user_index');
        if ($cache) return $cache;
        else {
            $cache = UserResource::collection(User::all());
            Redis::put('user_index', $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function show($id) {
        $cache = Redis::get($id);
        if ($cache) return $cache;
        else {
            $cache = new UserResource($id);
            Redis::put($id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function store(StoreRequest $request) {
        return new UserResource(User::create($request->validated()));
    }
}
