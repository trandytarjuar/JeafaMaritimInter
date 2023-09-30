<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Auth_Controller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function submit(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = User::where('username', $username)->first();

        // if ($user) {
        //     if ($user->password === md5($password)) {
        //         Auth::login($user); // Log the user in
        //         return redirect()->intended('/');
        //     } else {
        //         return redirect('/login')->with('error', 'Periksa username dan password Anda.');
        //     }
        // } else {
        //     return redirect('/login')->with('error', 'Periksa username dan password Anda.');
        // }

        if ($user) {
            if (Hash::check($password, $user->password)) {
                Auth::login($user); // Log the user in
                return redirect()->intended('/');
            } else {
                return redirect('/login')->with('error', 'Periksa username dan password Anda.');
            }
        } else {
            return redirect('/login')->with('error', 'Periksa username dan password Anda.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('logout', 'Youre Logged');
    }

    public function forgot()
    {
        return view('auth.forgotpass');
    }
    public function forgotpass(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        // Validasi input password
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/',
        ]);

        if ($validator->fails()) {
            // return response()->json(['message' => 'Password tidak memenuhi persyaratan.']);
            return redirect('/forgot_pass')->with('error', 'Password tidak memenuhi persyaratan');
        }

        $user = User::where('username', $username)->first();
        // var_dump($user);; die;

        if ($user) {
            // Username ditemukan di database
            if ($password_confirmation == $password) {
                // Password sama
                // Di sini, Anda dapat mengatur password baru untuk pengguna
                $user->password = bcrypt($password); // Mengenkripsi password baru
                $user->save();

                // return response()->json(['message' => 'Password berhasil direset.']);
                return redirect('/login')->with('berhasil', 'Password berhasil direset');
            } else {
                // Password tidak sama
                // return response()->json(['message' => 'Password konfirmasi tidak cocok.']);
                return redirect('/forgot_pass')->with('error', 'Password konfirmasi tidak cocok');
            }
        } else {
            // Username tidak ditemukan di database
            // return response()->json(['message' => 'Username tidak ditemukan.']);
            return redirect('/forgot_pass')->with('error', 'Username tidak ditemukan');
        }
    }
}
