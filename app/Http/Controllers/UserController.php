<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function writers()
  {
    $users = User::has('creatives')->get();
    return view ('static.writers', compact('users'));
  }

 public function show(User $user)
{
    $creatives = $user->creatives;
    return view('user.see', compact('user'));
}

}
