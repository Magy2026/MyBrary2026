<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    <link rel="icon" href="{{asset('book2.png')}}">
<link href="http://fonts.googleapis.com/css2?family=Great+Vibes&family=Merriweather&display=swap" rel="stylesheet">    
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header style="background-image:url('{{asset('images/banner3.webp')}}')">
    <div class="logo">MyBrary</div>
    <nav>
        <ul class="navbar">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('books')}}">Books</a></li>
            <li><a href="{{route('writers')}}">Writers</a></li>
            <li><a href="{{route('write')}}">Write</a></li>
            <li><a href="{{route('read')}}">Read</a></li> 
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('profile')}}">My Profile</a></li>
            <li><a href="{{route('login')}}">Log in</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
         </ul>
    </nav>
</header>
@yield('content')
<footer>
    <p>&copy; 2026 MyBrary | All rights reserved</p>
</footer>
</body>
</html>