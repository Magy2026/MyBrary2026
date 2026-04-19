@extends('layouts.main')
@section('header-title')
@endsection
@section('content')

@extends('layouts.main')

@section('header-title')
My profile
@endsection
@section('content')
<div class="profile-container">

<h1>Welcome</h1>

<div class="profile_image">
     @if($user->profile_image)
    <img src="{{asset('storage/uploads/'. $user->profile_image)}}"  width="150">
  @else
  <div class="placeholder">
    <span>+</span>
  </div>
  @endif
   </div>

  
<h2 class="name">
  {{$user->name}} {{$user->last_name}}
  ({{$user->creatives()->exists() ? 'writer' : 'reader'}})
</h2>


<div class="section1 s-box">
   <h3>About me</h3>
</div>
 <div id="about-details" class="about-details">
<p><strong>Age:</strong>{{$user->age ?? 'Not set'}}</p>
<p><strong>Nickname:</strong>{{$user-> nickname ?? 'Not set'}}</p>
<p><strong>Gender:</strong>{{$user->gender ?? 'Not set'}}</p>
<p><strong>Email:</strong>{{$user-> email ?? 'Not set'}}</p>
</div>
 <p class="s-text">
    {{$user->about ?? 'Write something about yourself...'}}
</p>


<div class="section s-box">
  <h3>Status</h3>
  <p class="s-text">
    {{$user->status ?? 'No status yet...'}}</p>
</div>


<div class="section s-box">
  <h3>My Favorite Books</h3>
  <p class="s-text">
  {{$user->favorite_books ?? 'List your favorite books...'}} </p>
</div>


<div class="section s-box">
    <h3>My Creations 📖</h3>
        <ul>
    @foreach($user->creatives as $creative)
        <li class="s-text">
        {{ $creative->title }}
       </li>
    @endforeach
</ul>
  </div>
</div>
 
@endsection
@section('scripts')
<script>
  function toggleAbout(){
  let details=document.getElementById('about-details');
   
  details.classList.toggle('open');
}
</script>
@endsection
