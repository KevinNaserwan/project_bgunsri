<?php

namespace App\Http\Controllers;

use App\Models\datauser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function storeuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_wa' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/',
            'password_confirmation' => 'required|same:password',
            // Pastikan kedua input password cocok
            'NIM' => 'required'
        ], [
            'name.required' => 'Nama Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'no_wa.required' => 'No Wa wajib diisi',
            'password.required' => 'Password Wajib diisi',
            'password.min' => 'Password harus memiliki minimal 8 karakter',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kapital dan satu simbol',
            'password_confirmation.required' => 'Konfirmasi Password Wajib diisi',
            'password_confirmation.same' => 'Konfirmasi Password harus sama dengan Password',
            'NIM.required' => 'NIM Wajib diisi'
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'no_wa' => $request->input('no_wa'),
            'password' => $request->input('password'),
            // Hash password sebelum disimpan
            'NIM' => $request->input('NIM'),
            'role' => 0
        ];
        // dd($data);
        User::create($data);
        return redirect('/login')->with('success', 'Akun Anda Berhasil Dibuat');
    }


    public function loginproses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        $data_user = datauser::where('email', $request->email)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Username atau password yang Anda masukkan salah');
        }

        session([
            'name' => $user->name,
            'nim' => $user->NIM,
            'email' => $user->email,
            'no_wa' => $user->no_wa
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($user->role == 0) {
                if (!$data_user) {
                    return redirect('/form-register')->with('success', 'Anda Berhasil Login');
                } else {
                    return redirect('/dashboard')->with('success', 'Anda Berhasil Login');
                }
            } else if ($user->role == 1) {
                return redirect('/admin')->with('success', 'Anda Berhasil Login');
            }
        } else {
            return redirect('/login')->with('error', 'Username atau password yang Anda masukkan salah');
        }
    }

    public function logout()
    {
        // menghapus session yang login
        Auth::logout();

        // arahkan ke routing yang namanya login
        return redirect('/login')->with('success', 'Anda Berhasil Logout');
    }
}
