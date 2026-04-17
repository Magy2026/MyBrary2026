@extends('layouts.main')

@section('header-title')
My Creative Corner
@endsection
@section('content')
<h1>My Creative Corner 📖</h1>

<a href="{{ route('creative.create') }}">
    + Write new ✍️
</a>

<hr>

@foreach($creatives as $creative)
    <div style="margin-bottom: 15px;">
        <a href="{{ route('creative.show', $creative) }}">
            <h3>{{ $creative->title }}</h3>
        </a>
    </div>
@endforeach
@endsection