<?php

namespace App\Http\Controllers\Auth;

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
        return view('fronted.auth.register');
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
            'user_type'=>['required','string']
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_tytpe'=>$request->user_type,
            'otp'=>0,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if(auth()->user()->user_type=='admin'){
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }elseif(auth()->user()->user_type=='owner'){
            return redirect()->intended(route('owner.dashboard', absolute: false));
        }elseif(auth()->user()->user_type=='client'){
            return redirect()->intended(route('client.dashboard', absolute: false));
        }
    }
}
