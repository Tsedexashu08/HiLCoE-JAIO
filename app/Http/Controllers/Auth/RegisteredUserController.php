<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:Admin,Student,Faculty'], 
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Define the folder path
    $folderPath = 'public/profile_pics';

    // Check if the folder exists, if not, create it
    if (!Storage::exists($folderPath)) {
        Storage::makeDirectory($folderPath);
    }

    // Store the image if it exists
    $profilePicPath = null;
    if ($request->hasFile('profile_picture')) {
        $profilePicPath = $request->file('profile_picture')->store('profile_pics', 'public');
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role'=>$request->role,
        'profile_picture' => $profilePicPath,
    ])->assignRole($request->role);
        event(new Registered($user));

        return redirect(route('users', absolute: false));
    }
}
