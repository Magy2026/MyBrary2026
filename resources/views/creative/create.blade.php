@extends('layouts.main')

@section('header-title')
My Creative Corner
@endsection
@section('content')
<div class="creative-conteiner">
     <h1>My Creative Corner</h1>
  <p>Your poems, thoughts, writings will appear here...</p>
<h3>Create your story 📖</h3>
<form method="POST" action="{{ route('creative.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Title">

    <br><br>

    <textarea name="content" rows="15" placeholder="Start writing..."></textarea>

    <br><br>

    <button type="submit">Save</button>
</form>
</div>
@endsection