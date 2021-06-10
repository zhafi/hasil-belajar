<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class UsersController extends Controller
{

    public function passwordsCheckEmail(Request $request)
    {
        if (!empty(User::where('email', '=', $request['email'])->first())){
            return redirect()->route('passwords.manual.reset', $request['email']);
        } else {
            return redirect()->back()->with('msg', 'Email tidak ada');
        }
    }

    public function passwordsManualReset($email)
    {
        $user = User::where('email', '=', $email)->first();
        return view('auth.passwords.manual', compact('user'));
    }
    
    public function passwordsManualChange(Request $request, User $user)
    {
        if ($request['password'] == $request['conpassword']) {
            $user->update([
                'password' =>Hash::make($request['password']),
            ]);
        }   else {
            return redirect()->back()->with('msg', 'Konfirmasi Pass Salah');
    }

    return redirect(url('login'))->with('andaLogin', 'Anda bisa login dengan pass baru');
    }
}