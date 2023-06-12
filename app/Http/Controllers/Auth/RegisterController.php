<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $request = request(['name', 'email', 'password']);

        $request['password'] = Hash::make($request['password']);

        $user = User::create($request);

        auth()->login($user);

        $details = [
            'title' => 'Registro exitoso en Hotellerie',
            'user' =>  $user->name
        ];
       
        Mail::to($user->email)->send(new RegisterMail($details));

        return redirect()->to('/');
    }
}