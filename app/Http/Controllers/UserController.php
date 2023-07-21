<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('/register', $data);
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            // 'active' => 0
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('register');
    }


    public function login()
    {
        if (Auth::check()) {
            // Pengguna sudah login
            $user = Auth::user();
        
            if ($user->level == 'Admin') {
                return redirect('/home');
            } elseif ($user->level == 'Pegawai') {
                return redirect('/pegawai');
            } elseif ($user->level == 'Majikan') {
                return redirect('/majikan');
            } else {
                // Level akses tidak dikenali, sesuaikan dengan kebutuhan Anda
                return redirect()->route('/');
            }
        } else {
            // Pengguna belum login, arahkan ke halaman login
            return view('login');
        }
        
    }

    public function actionlogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $data = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($data)) {
        $request->session()->regenerate();

        // Periksa level pengguna setelah berhasil login
        $user = Auth::user();
        if ($user->level == 'Admin') {
            return redirect('/home');
        } elseif ($user->level == 'Pegawai') {
            return redirect('/pegawai');
        } elseif ($user->level == 'Majikan') {
            return redirect('/majikan');
        } else {
            // Level pengguna tidak valid
            Auth::logout();
            Session::flash('error', 'Level pengguna tidak valid');
            return redirect('/login');
        }
    } else {
        Session::flash('error', 'Email atau Password Salah');
        return redirect('/login');
    }
}


    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }
    public function actionlogout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');         
    }
}
