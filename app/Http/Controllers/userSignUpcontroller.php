<?php

namespace App\Http\Controllers;

use App\Models\userSignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class userSignUpcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtuserSignUp = userSignUp::where('email')->get();
        return view('halaman_user.user_signUp', compact('dtuserSignUp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman_user.user_signUp');
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
        'nama' => 'required',
        'email' => 'required|email|unique:user_sign_up,email', // Email harus valid dan unik
        'password' => 'required|min:8', // Password minimal 8 karakter
        'confirm_password' => 'required|same:password', // Konfirmasi password harus sama dengan password
    ], [
        'nama.required' => 'Nama harus diisi',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',
        'password.required' => 'Password harus diisi.',
        'password.min' => 'Password minimal harus terdiri dari :min karakter.',
        'confirm_password.required' => 'Konfirmasi password harus diisi.',
        'confirm_password.same' => 'Konfirmasi password harus sama dengan password.',
    ]);
    

    // Simpan data ke dalam database
    $userSignUp = new userSignUp();
    $userSignUp->nama = $request->nama; // Perbaikan
    $userSignUp->email = $request->email;
    $userSignUp->password = bcrypt($request->password); // Hash password sebelum disimpan
    $userSignUp->save();

    // Redirect ke halaman sukses atau lainnya
    return redirect('/signIn_pengguna')->with('success', 'Sign-up berhasil!'); // Contoh redirect ke halaman dashboard dengan pesan sukses
}

public function userSignIn(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/tampilan_pengguna');
    }

    return redirect()->back()->with('error', 'Email atau Password yang dimasukkan salah');
}


public function showsigninpengguna()
    {
        return view('halaman_user.user_signIn');
    }

    
}