@extends('layouts.main')
@section('header-title')
Register
@endsection
@section('content')
<div class="register-conteiner">
    
    <form action="{{route('register')}}" method="POST" class="register-form">
      @csrf  
      <h2> Registration</h2>  
        <label for="firstname">Firstname</label>
        <input type="text" placeholder="Please write your firstname" name="name" id="firstname" required><br><br>

        <label for="lastname">Lastname</label>
        <input type="text" placeholder="Please write your lastname" name="lastname" id="lastname" required><br><br>

       <label for="nikcname">Nikcname</label>
        <input type="text" placeholder="Please write your nikcname" name="nikcname" id="nikcname"> <br><br>
         
        <label for="email">Email</label>
        <input type="email" placeholder="Please write your email" name="email" id="email" required><br><br>


        <label for="age">Age</label>
        <input type="text" placeholder="Please enter your age" name="age" id="age" required> <br><br>

        <label for="gender">Gender</label>
        <select name="gender" id="gender">
        <option value="">Select your gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>
        
        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" name="password" id="password"><br><br>

        <button type="submit">Register</button>
    </form>
</div>
@endsection