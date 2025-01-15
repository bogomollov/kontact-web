<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileAccountUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Laravel\Facades\Image;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->userInfo->fill($request->validated());
        $request->user()->userInfo->save();

        return Redirect::route('profile.edit');
    }

    public function updateAccount(ProfileAccountUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        return Redirect::route('profile.edit');
    }

    public function uploadImage(Request $request) {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $get = $request->file('image');
            $image = Image::read($get)
                ->resize(150, 150)
                ->encodeByMediaType('image/webp');
            $path = storage_path('app/public/' . $request->user()->id . '.webp');
            $image->save($path);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();
        $user->userInfo->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
