<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    // public function index()
    // {
    //     $result = Account::latest()->paginate(6);
    //     return view('admin.accountdata.index', compact('result'));
    // }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email:dns', 'max:255'],
            'password' => ['required', 'string', 'min:6','max:20'],
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

    public function register(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'no_hp' => ['required','string','unique:users'],
            'password' => ['required', 'string', 'min:6','max:20'],
        ]);

        // $user = new User()
        DB::table('users')->insert([
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'no_hp' => $request->get('no_hp'),
            'sebagai' => 'peserta',
            'password' => Hash::make($request->get('password')),
        ]);
        return redirect('/login');
    }
}
