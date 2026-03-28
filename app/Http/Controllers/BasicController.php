<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
   public function submit()
 {
// return view('static.writers');
 }
}
