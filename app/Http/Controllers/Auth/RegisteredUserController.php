<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string',
            'middleName' => 'required|string',
            'department_id' => 'required|integer',
            'position_id' => 'required|integer',

            'username' => 'required|string',
            'password' => ['required', Rules\Password::defaults()],
            'email' => 'required|string|lowercase|email|max:255|unique:'.Account::class,
            'phone' => 'required|string|max:11',
            'role_id' => 'required|integer',
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'middleName' => $request->middleName,
            'department_id' => $request->department_id,
            'position_id' => $request->position_id,
        ]);

        $account = Account::create([
            'user_id' => $user->id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => Role::where('name', Roles::User)->first()->id,
        ]);

        event(new Registered($account));

        Auth::login($account);

        return redirect(route('dashboard', absolute: false));
    }
}
