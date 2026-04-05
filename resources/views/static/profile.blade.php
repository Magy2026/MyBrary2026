@extends('layouts.main')

@section('header-title')
My profile
@endsection
@section('content')
<div class="profile-container">
<h1>Welcome</h1>
<div class="profile-image">
  <label for="imageUpload">
    @if($user->profile_image)
    <img src="{{asset('storage/'.$user->profile_image)}}" alt="">
  @else
  <div class="placeholder">
    <span>+</span>
  </div>

  @endif
  <div class="overlay"><br><br>Add Photo</div>
  </label>
  <form method="POST" action="{{route('profile')}}" enctype="multipart/form-data">
    @csrf
<input type="file" id="imageUpload" name="profile_image" hidden onchange="this.form.sumbit()">
  </form>
  </div>
<h2 class="name">
  {{$user->name}} {{$user->last_name}}
</h2>


<div class="section1">
  <h3>About me</h3>
  <p>{{$user->about ?? 'Write something about yourself...'}}</p>
</div>

<div class="section">
  <h3>Status</h3>
  <p>{{$user->status ?? 'No status yet...'}}</p>
</div>

<div class="section">
  <h3>My Creative Corner</h3>
  <p>Your poems, thoughts, writings will appear here...</p>
</div>

<div class="section">
  <h3>My Favorite Books</h3>
  <p>List your favorite books...</p>
</div>
  </div>

@endsection