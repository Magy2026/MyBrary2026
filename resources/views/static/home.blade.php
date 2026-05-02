@extends('layouts.main')

@section('header-title')
Home page
@endsection
@section('content')
<div class="home-container">
  <section class="hero">
    <h1>Welcome to MyBrary</h1>
    <p>Discover, read and share stories from writers around the word</p>
    <a href="{{route('creatives.all')}}" class="cta-button">Start Reading</a>
    <a href="{{route('creative.create')}}" class="cta-button">Upload Your Book</a>
  </section> 
   
    <div class="image-container">
     <img src="{{asset('images/book-5.jpg')}}" alt="books">
    <h2>Featured Books</h2> </div>
  </div>
@endsection
