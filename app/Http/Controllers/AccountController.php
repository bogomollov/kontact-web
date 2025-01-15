<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\StoreRequest;
use App\Http\Requests\Account\UpdateRequest;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use Illuminate\Support\Facades\Cache as Redis;

class AccountController extends Controller
{
    public function index() {
        $cache = Redis::get('account_index');
        if ($cache) return $cache;
        else {
            $cache = AccountResource::collection(Account::all());
            Redis::put('account_index', $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function show(Account $account) {
        $cache = Redis::get('account_show_' . $account->id);
        if ($cache) return $cache;
        else {
            $cache = new AccountResource($account);
            Redis::put('account_show_' . $account->id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function store(StoreRequest $request) {
        return new AccountResource(Account::create($request->validated()));
    }

    public function update(UpdateRequest $request, Account $account) {
        $account->update($request->validated());
        return new AccountResource($account);
    }

    public function destroy(Account $account) {
        $account->delete();
        return new AccountResource($account);
    }
}
