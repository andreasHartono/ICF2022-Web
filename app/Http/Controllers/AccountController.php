<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    // public function index()
    // {
    //     $result = Account::latest()->paginate(6);
    //     return view('admin.accountdata.index', compact('result'));
    // }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required','string', 'email', 'max:255', 'unique:users','email:dns'],
            'password' => ['required','string', 'min:8'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return redirect('/login')->with("loginError",'Email atau Password salah!. Silahkan periksa kembali email atau password anda');
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function registerPage() {
        // date_default_timezone_set("Asia/Jakarta");
        // $endDate = "3 November 2022";
        // $endDateTimestamp = strtotime($endDate);
        // if (time() >= $endDateTimestamp) {
        //     session()->flash('registerClosed', 'Pendaftaran telah ditutup, sampai jumpa di MANIAC XII');
        //     return redirect('/login');
        // } else {
            return view('auth.register');
        // }
    }
}
