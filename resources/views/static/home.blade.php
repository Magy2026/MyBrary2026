@extends('layouts.main')

@section('header-title')
Home page
@endsection
@section('content')
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
@endsection
