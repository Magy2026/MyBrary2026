@extends('layouts.main')

@section('header-title')
My Creatives
@endsection
@section('content')
@if(session('success'))
    <div id="toast" class="toast">
        {{ session('success') }}
    </div>
@endif
<h1>My Creatives 📖</h1>

<a href="{{ route('creative.create') }}">
    + Write new
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
@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    let toast = document.getElementById("toast");

    if (toast) {
        setTimeout(() => {
            toast.classList.add("show");
        }, 100);

        setTimeout(() => {
            toast.classList.remove("show");
        }, 2000);
    }
});
</script>
@endsection