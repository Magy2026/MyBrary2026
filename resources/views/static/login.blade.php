@extends('layouts.main')
@section('header-title')
Log in
@endsection
@section('content')
<div class="login-conteiner">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <form action="{{route('login')}}" method="POST" class="login-form">
    @csrf
        <h2>Log in</h2>
<div class="form-group">
 <input type="email" name="email" placeholder="your email address">
 @error('email')<div style="color:red">{{$message}}</div>@enderror
</div>

<div class="form-group" style="position:relative;">
 <input type="password" id="password" name="password" placeholder="password" class="form-control" >
<span id="togglePassword">
&#128065
</span>
 @error('password')<div style="color:red">{{$message}}</div>@enderror
</div>

<div class="form-group remember-me">
 <input type="checkbox" id="remember">
 <label for="remember">Remember me</label>
</div>

<button type="submit">Sign in</button>
<p class="signup-text">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
</form>
</div>
@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function(){
const password=document.getElementById('password');
const toggle=document.getElementById('togglePassword');

toggle.addEventListener("click", function() {
    if(password.type==='password'){
        password.type='text';
        toggle.innerHTML='&#128584;';
    }else{
       password.type='password';
       toggle.innerHTML = '&#128065;';  
    }
   });
    });
</script>
@endsection