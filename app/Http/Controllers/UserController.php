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

    public function show(User $user) {
        $cache = Redis::get($user->id);
        if ($cache) return $cache;
        else {
            $cache = new UserResource($user);
            Redis::put($user->id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function search(Request $request) {
        $query = strtolower($request->input('query'));
        if (empty($query)) return null;
        if ($query[0] == '@' && strlen($query) > 1) {
            $username = Account::where('username', 'like', '%' . substr($query, 1) . '%')
                ->take(5)->get();
            $users = User::whereIn('id', $username->pluck('user_id'))->get();
        } else {
            $users = User::where('firstName', 'ilike', '%' . $query . '%')
                ->orWhere('lastName', 'ilike', '%' . $query . '%')
                ->take(5)->get();
        }
        return UserResource::collection($users);
    }

    public function store(StoreRequest $request) {
        return new UserResource(User::create($request->validated()));
    }
}
