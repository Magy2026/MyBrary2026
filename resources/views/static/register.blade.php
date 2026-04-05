@extends('layouts.main')
@section('header-title')
Register
@endsection
@section('content')
@if($errors->any())
<div class="block-error">
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="register-conteiner">
    
    <form action="{{route('register.post')}}" method="POST" class="register-form">
      @csrf  
      <h2> Registration</h2>  
        <label for="firstname">Firstname</label>
        <input type="text" placeholder="Please write your firstname" name="name" id="firstname" value="{{old('name')}}"><br><br>

        <label for="lastname">Lastname</label>
        <input type="text" placeholder="Please write your lastname" name="lastname" id="lastname" value="{{old('lastname')}}"><br><br>

       <label for="nickname">Nickname</label>
        <input type="text" placeholder="Please write your nickname" name="nickname" id="nickname" value="{{old('nickname')}}"> <br><br>
         
        <label for="email">Email</label>
        <input type="email" placeholder="Please write your email" name="email" id="email" value="{{old('email')}}"><br><br>


        <label for="age">Age</label>
        <select name="age" id="age">
            <option value="">Select age</option>
@for ($i=5; $i<=100; $i++)
<option value="{{$i}}"{{ old('age') == $i ? 'selected' : ''}}>{{$i}}</option>
@endfor
</select>
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