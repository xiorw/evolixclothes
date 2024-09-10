<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan proses logout

        $request->session()->invalidate(); // Menghapus session
        $request->session()->regenerateToken(); // Regenerasi token untuk keamanan

        return redirect('/login'); // Redirect ke halaman login
    }
}
