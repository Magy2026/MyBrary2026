<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBrary</title>
<link href="http://fonts.googleapis.com/css2?family=Great+Vibes&family=Merriweather&display=swap" rel="stylesheet">    
<link  href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">MyBrary</div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Writers</a></li>
            <li><a href="#">Write</a></li>
            <li><a href="#">Read</a></li> 
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>
</header>
  <section class="hero">
    <h1>Welcome to MyBrary</h1>
    <p>Discover, read and share stories from writers around the word</p>
    <a href="#" class="cta-button">Start Reading</a>
    <a href="#" class="cta-button">Upload Your Book</a>
  </section>  
   <section class="feautured-books">
    <h2>Featured Books</h2>
   <div class="book-cards">
<div class="book-card">
    <img src="{{asset('images/book1.jpg')}}" alt="Book Ttile">
    <h3>Book Title 1</h3>
    <p>Autor Name</p>
    <p>****</p>
</div>
<div class="book-card">
    <img src="{{asset('images/book2.jpg')}}" alt="Book Ttile">
    <h3>Book Title 2</h3>
    <p>Autor Name</p>
    <p>****</p>
</div>
<div class="book-card">
    <img src="{{asset('images/book3.jpg')}}" alt="Book Ttile">
    <h3>Book Title 3</h3>
    <p>Autor Name</p>
    <p>****</p>
</div>
   </div>
  </section>
  <footer>
    <p>&copy; 2026 MyBrary | All rights reserved</p>
</footer>
</body>
</html>