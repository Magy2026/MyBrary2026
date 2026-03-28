@extends('layouts.main')
@section('header-title')
Log in
@endsection
@section('content')
<div class="login-conteiner">
    <form action="{{route('login')}}" method="POST" class="login-form">
    @csrf
        <h2>Log in</h2>
<div class="form-group">
 <input type="email" placeholder="Email" required>
</div>

<div class="form-group">
 <input type="password" placeholder="Password" required>
</div>

<div class="form-group remember-me">
 <input type="checkbox" id="remember">
 <label for="remember">Remember me</label>
</div>

<button type="submit">Sign in</button>
<p class="signup-text">Don't have an account? <a href='#'>Sign Up</a></p>
</form>
</div>
@endsection