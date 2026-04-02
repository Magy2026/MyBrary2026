<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class BasicController extends Controller
{
    public function index()
 {
return view('static.home');
 }
  public function about()
 {
return view('static.about');
 }
  public function books()
 {
return view('static.books');
 }
  public function login()
 {
return view('static.login');
 }
  public function profile()
 {
return view('static.profile');
 }
  public function read()
 {
return view('static.read');
 }
  public function register()
 {
return view('static.register');
 }
  public function write()
 {
return view('static.write');
 }
  public function writers()
 {
return view('static.writers');
 }
  public function showReg()
 {
return view('static.writers');
 }
   public function submit(Request $request)
 {
$request->validate([
  'name'=>'required|min:2|max:15',
  'lastname'=>'required|min:2|max:15',
  'nikcname'=>'required|min:2|max:15',
  'email'=>['required', 'min:5', 'max:20', 'email'],
  'age'=>'required|integer|min:5|max:110',
  'password'=>[
  'required',
 Password::min(8)->mixedCase()->numbers()],
]);
User::create([
  'name'=>$request->name,
  'last_name'=>$request->lastname,
  'nikcname'=>$request->nickname,
  'email'=>$request->email,
  'age'=>$request->age,
  'gender'=>$request->gender,
  'password'=> Hash::make($request->password),
 ]);
 return redirect('login')->with('success','Registration successful!');
}

public function showlogin(Request $request)
{
$credentials = $request->validate([
  'email'=>'required|email',
  'password'=>'required',
]);

if (Auth::attempt($credentials)){
  $request->session()->regenerate();
  return redirect('/profile');
}
return back()->withErrors([
  'email'=>'Invalid email or password',
]);
}
}