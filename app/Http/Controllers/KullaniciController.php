<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KullaniciController extends Controller
{
   public function GirisFormu()
    {
        return view('Kullanici');
    }

    public function kullanici(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $k = User::where('email', $request->email)->first();

        if ($k && Hash::check($request->password, $k->password)) {
            Auth::guard('Kullanici')->login($k);
            return redirect()->route('Kullanici');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function cikis(Request $request)
    {
        Auth::guard('Kullanici')->logout();
        
        // Çıkış yaptıktan sonra login sayfasına veya ana sayfaya yönlendirin
        return redirect()->route('anasayfa');
    }
}

