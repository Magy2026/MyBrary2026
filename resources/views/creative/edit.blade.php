@extends('layouts.main')

@section('header-title')
My Creative Corner
@endsection
@section('content')
<div class="edit-container">
<h1>Edit Story ✏️</h1>
<form action="{{ route('creative.update', $creative) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title"
           value="{{ $creative->title }}"
           class="title-input">
    <textarea class="textedit" name="content">{{ $fullContent }}</textarea>
    <button type="submit" class="save-btn">
        Update ✨
    </button>
</form>
</div>
@endsection