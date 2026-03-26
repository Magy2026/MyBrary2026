@extends('layouts.main')
@section('header-title')
Log in
@endsection
@section('content')
<form action="{{route('login')}}" method="POST">
    @csrf
 <label for="email">Email</label>
 <input type="email" placeholder="Enter your email" name="email" id="email"><br><br>

 <label for="password">Password</label>
<input type="password" placeholder="Enter your password" name="password" id="password"><br><br>

<label><input type="checkbox" name="remember">Remember me</label><br><br>
<button type="submit">Login</button>
</form>
@endsection