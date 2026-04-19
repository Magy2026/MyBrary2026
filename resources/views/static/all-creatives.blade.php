@extends('layouts.main')

@section('header-title')
All creations
@endsection
@section('content')
<h2>All Creatives 📖</h2>

<ul>
@foreach($creatives as $creative)
    <li>
        <a href="{{ route('creatives.public-show', $creative) }}">
            {{ $creative->title }}
        </a>
        <h3>
            by {{ $creative->user->name }} {{ $creative->user->last_name }}
</h3>
    </li>
@endforeach
</ul>
@endsection
@section('content')
books list
@endsection