@extends('layouts.main')

@section('header-title')
About us
@endsection
@section('content')
<div class="creative">

    <h1>{{ $creative->title }}</h1>

    <h3>
        by {{ $creative->user->name }} {{ $creative->user->last_name }}
    </h3>

    <hr>

    @foreach($creative->pages as $page)
        <p>{{ $page->content }}</p>
    @endforeach

</div>
@endsection