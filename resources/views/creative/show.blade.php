@extends('layouts.main')

@section('header-title')
About us
@endsection
@section('content')
<h1>{{ $creative->title }}</h1>

<hr>

@foreach($creative->pages as $page)
    <div style="margin-bottom: 20px;">
        <p>{{ $page->content }}</p>
    </div>
@endforeach

<a href="{{ route('creative.index') }}">⬅ Back</a>
@endsection