@extends('layouts.main')

@section('header-title')
Creative
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
<h3>Rate this creative ❤️</h3>

<form method="POST" action="{{ route('rate.store') }}">
    @csrf
    <input type="hidden" name="creative_id" value="{{ $creative->id }}">
    <input type="hidden" name="rating" id="ratingInput">

    <div id="hearts">
        @for ($i = 1; $i <= 10; $i++)
            <span class="heart" data-value="{{ $i }}">♡</span>
        @endfor
    </div>

    <button type="submit">Submit</button>
</form>
<p>Average rating: {{ round($creative->averageRating(), 1) ?? 'No ratings yet' }}</p>
</div>
@endsection
@section('scripts')

<script>
const hearts = document.querySelectorAll('.heart');
const ratingInput = document.getElementById('ratingInput');

let isDragging = false;

hearts.forEach((heart, index) => {

    heart.addEventListener('mousedown', () => {
        isDragging = true;
        setRating(index + 1);
    });

    heart.addEventListener('mouseover', () => {
        if (isDragging) {
            setRating(index + 1);
        }
    });

});

document.addEventListener('mouseup', () => {
    isDragging = false;
});

function setRating(value) {
    ratingInput.value = value;

    hearts.forEach(h => h.classList.remove('active'));

    for (let i = 0; i < value; i++) {
        hearts[i].classList.add('active');
    }
}
</script>
@endsection