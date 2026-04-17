@extends('layouts.main')

@section('header-title')
My Creative Corner
@endsection
@section('content')
    <h1 style="text-align: center;">My Creative Corner</h1>
      <h2 style="text-align: center;">My story 📖 </h2>
      <form method="POST" action="{{ route('creative.store') }}">
    @csrf
    <input class="title-input" type="text" name="title" placeholder="Title" >
   <div class="book">
      <textarea name="content" placeholder="Start writing..." class="book-textarea"></textarea>
</div>
    <button type="submit">Save</button>
</form>
@endsection