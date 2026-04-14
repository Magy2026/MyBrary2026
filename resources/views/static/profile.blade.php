@extends('layouts.main')

@section('header-title')
My profile
@endsection
@section('content')
<div class="profile-container">
<h1>Welcome</h1>



<div class="profile_image">
 <form method="POST" action="{{route('profile.image')}}" enctype="multipart/form-data">
    @csrf 
    <input type="file" id="fileInput" name="profile_image" hidden onchange="this.form.submit()">
      <label for="fileInput">
    @if($user->profile_image)
    <img src="{{asset('storage/uploads/'. $user->profile_image)}}"  width="150">
  @else
  <div class="placeholder">
    <span>+</span>
  </div>
  @endif
  <div class="overlay"><br><br>
  {{$user->profile_image ? 'Change Photo' : 'Add Photo'}}
</div>
  </label>
   </form>
  </div>

  
<h2 class="name">
  {{$user->name}} {{$user->last_name}}
</h2>


<div class="section1 s-box">
  <div class="about-header" onclick="toggleAbout()">
  <h3>About me</h3>
</div>
 <div id="about-details" class="about-details">
<p><strong>Age:</strong>{{$user->age ?? 'Not set'}}</p>
<p><strong>Nickname:</strong>{{$user-> nickname ?? 'Not set'}}</p>
<p><strong>Gender:</strong>{{$user->gender ?? 'Not set'}}</p>
<p><strong>Email:</strong>{{$user-> email ?? 'Not set'}}</p>
</div>
 <p onclick="openModal ('about', '{{$user->about}}')" class="s-text">
    {{$user->about ?? 'Write something about yourself...'}}</p>
</div>



<div class="section s-box">
  <h3>Status</h3>
  <p onclick="openModal ('status', '{{$user->status}}')" class="s-text">
    {{$user->status ?? 'No status yet...'}}</p>
</div>


<div class="section s-box">
  <h3>My Favorite Books</h3>
  <p onclick="openModal ('favorite_books', '{{$user->favorite_books}}')" class="s-text">
  {{$user->favorite_books ?? 'List your favorite books...'}} </p>
</div>

<div class="section s-box">
  <h3>My Creative Corner</h3>
  <p>Your poems, thoughts, writings will appear here...</p>
</div>
  </div>

@endsection
<div id="modal" class="modal">
  <div class="modal-content">
    <h3>Edit</h3>
    <form method="POST" action="/profile/update">
     @csrf
<textarea name="value" id="modalInput"></textarea>
<input type="hidden" name="field" id="modalField">
<div class="buttons">
  <button type="submit">Save</button>
  <button type="button" onclick="closeModal()">Close</button>
</div>
  </form>
  </div>
</div>


@section('scripts')
<script>
const label=document.querySelector('.profile_image label');
const overlay=label.querySelector('.overlay');

label.addEventListener('mouseover', () => overlay.style.opacity=1);
label.addEventListener('mouseout', () => overlay.style.opacity=0);


function toggleAbout(){
  let details=document.getElementById('about-details');
   
  details.classList.toggle('open');
}


function openModal(field, value) {
  document.getElementById('modal').style.display = 'block';
  document.getElementById('modalInput').value = value ?? '';
  document.getElementById('modalField').value = field;
}

function closeModal() {
  document.getElementById('modal').style.display = 'none';
}
</script>
@endsection