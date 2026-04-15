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
$user=Auth::user();
return view('static.profile', compact('user'));
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
  'name'=>'required | min:2 | max:15',
  'lastname'=>'required | min:2 | max:15',
  'nickname'=>'required | min:2 | max:15',
  'email'=>['required','email','unique:users,email'],
  'age'=>'required | integer | min:5 | max:110',
  'password'=>[
  'required',
 Password::min(8)->mixedCase()->numbers()],
]);
User::create([
  'name'=>$request->name,
  'last_name'=>$request->lastname,
  'nickname'=>$request->nickname,
  'email'=>$request->email,
  'age'=>$request->age,
  'gender'=>$request->gender,
  'password'=> Hash::make($request->password),
 ]);
 return redirect('login')->with('success','Registration successful!');
}

public function tolog(Request $request)
{
$credentials = $request->validate([
  'email'=>'required|email',
  'password'=>'required',
]);

if (Auth::attempt($credentials)){
   return redirect()->route('profile');
}
return back()->withErrors([
  'email'=>'Invalid email or password',
]);
}

public function uploadImage(Request $request)
{
   $request->validate([
'profile_image'=>'required|image|mimes:jpg, jpeg, png|max:2048'
  ]);
  $user=auth()->user();
  if ($request->hasFile('profile_image')){
    $file=$request->file('profile_image');
    $filename=time() . '.' . $file->getClientOriginalExtension();
    $file->storeAs('uploads', $filename, 'public');
  $user=Auth::user();
  $user->profile_image=$filename;
  $user->save();
  }
  return back();
}
public function update(Request $request)
{
    $user = auth()->user();

    $field = $request->field;

    if (in_array($field, ['about', 'status', 'favorite_books'])) {
        $user->$field = $request->value;
        $user->save();
    }

    return back();
}
}