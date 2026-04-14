<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header style="background-image:url('{{asset('images/banner3.webp')}}')">
    <div class="logo">MyBrary</div>
    <nav>
            <ul class="navbar">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('books')}}">Books</a></li>
                <li><a href="{{route('writers')}}">Writers</a></li>
               
                <li><a href="{{route('read')}}">Read</a></li> 
                <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('profile')}}">My Profile</a></li>
           @auth  
           <li><a href="{{route('write')}}">Write</a></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display:none;">
           @csrf 
            </form> 
             
             @endauth
             @guest
            <li><a href="{{route('login.form')}}">Log in</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            @endguest
        </ul>
    </nav>
</header>  
<title>@yield('header-title')</title>
<link rel="icon" href="{{asset('book2.png')}}">
<link href="http://fonts.googleapis.com/css2?family=Great+Vibes&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">    
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@yield('content')
<footer class="footer">
<div class="footer-container">
<div>
    <h2>MyBrary</h2>
    <p>Best platform for users</p>
</div>
<div>
    <h4>Links</h4>
    <p>Home</p>
    <p>About</p>
</div>
<div>
    <h4>Contact</h4>
    <p>Email:mybrary@mail.com</p>
</div>
</div>
<p class="footer-buttom">&copy; 2026 All rights reserved
</p>
<p>
    Follow us:
    <a href='#'>Facebook</a>
    <a href='#'>Twitter</a>
    <a href='#'>Instagram</a>
</p>
</footer>
</body>
@yield('scripts')
</html>