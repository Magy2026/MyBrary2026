@extends('layouts.main')

@section('header-title')
My profile
@endsection
@section('content')
<div class="main-continer">
  <div class="main-bloc">

<h1>Welcome {{auth()->user()->name}}</h1>
<p>Your email adress is {{auth()->user()->email}}</p>
  </div>
</div>
@endsection