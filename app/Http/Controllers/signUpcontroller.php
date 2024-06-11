<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signUp;
use Illuminate\Support\Facades\Auth; 

class signUpcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsignUp = signUp::all();
        return view('signUp.signUp', compact('dtsignUp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signUp.signUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email|unique:sign_up,email', // Email harus valid dan unik
        'password' => 'required|min:8', // Password minimal 8 karakter
        'confirm_password' => 'required|same:password', // Konfirmasi password harus sama dengan password
    ], [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',
        'password.required' => 'Password harus diisi.',
        'password.min' => 'Password minimal harus terdiri dari :min karakter.',
        'confirm_password.required' => 'Konfirmasi password harus diisi.',
        'confirm_password.same' => 'Konfirmasi password harus sama dengan password.',
    ]);


    // Simpan data ke dalam database
    $signUp = new signUp();
    $signUp->email = $request->email;
    $signUp->password = bcrypt($request->password); // Hash password sebelum disimpan
    $signUp->save();

    

    // Redirect ke halaman sukses atau lainnya
    return redirect('/dashboard')->with('success', 'Sign-up berhasil!'); // Contoh redirect ke halaman dashboard dengan pesan sukses
}


public function SignIn(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


public function showsignin()
    {
        return view('signIn.signIn');
    }

}