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
            <li><a href="#">Home</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Writers</a></li>
            <li><a href="#">Write</a></li>
            <li><a href="#">Read</a></li> 
            <li><a href="#">Profile</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
</header>
@yield('content')
<footer>
    <p>&copy; 2026 MyBrary | All rights reserved</p>
</footer>
</body>
</html>