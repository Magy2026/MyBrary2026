@extends('layouts.main')
@section('header-title')
@endsection
@section('content')
<h2>Writers ✍️</h2>

@if($users->isEmpty())
    <p>No writers yet...</p>
@else
  <ul class="writers-list">
    @foreach($users as $user)
        <li class="writer-item">
            <img src="{{ $user->profile_image 
                    ? asset('storage/uploads/' . $user->profile_image) 
                    : asset('default-avatar.png')}}" class="writer-avatar">
            <a href="{{ route('writers.show', $user) }}">
                {{$user->name}} {{$user->last_name}}
            </a>
        </li>
    @endforeach
</ul>
@endif

@endsection