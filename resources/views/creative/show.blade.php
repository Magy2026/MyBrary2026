@extends('layouts.main')

@section('header-title')
About us
@endsection
@section('content')
<h1>{{ $creative->title }}</h1>

@foreach($creative->pages as $page)
    <div class="page-line">
        <p>{{ $page->content }}</p>
    </div>
@endforeach

<a href="{{ route('creative.edit', $creative) }}">
    Edit ✏️
</a>

<form action="{{ route('creative.destroy', $creative) }}" method="POST"
      onsubmit="return confirm('Delete this story?')">
    @csrf
    @method('DELETE')

    <button class="delete-btn">Delete 🗑️</button>
</form>

<a href="{{ route('creative.index') }}">⬅ Back</a>
@endsection