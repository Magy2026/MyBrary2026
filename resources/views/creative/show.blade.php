@extends('layouts.main')

@section('header-title')
About us
@endsection
@section('content')
<h1>{{ $creative->title }}</h1>

@foreach($creative->pages as $page)
    <div class="page-line">
        <p>{{ $page->content }}</p>
    </div>
@endforeach

<a href="{{ route('creative.edit', $creative) }}">
    Edit
</a>
    <button type="button" class="button" onclick="openModal()">Delete</button>
<a href="{{ route('creative.index') }}">⬅ Back</a>
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <p>Delete this story?</p>
        <form id="modaldeleteForm" method="POST" action="{{route('creative.destroy', $creative)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Yes, delete</button>
        </form>

        <button type="button" onclick="closeModal()">Cancel</button>
    </div>
</div>
@endsection
@section('scripts')
<script>
function openModal() {
    document.getElementById('deleteModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('deleteModal').style.display = 'none';
}
</script>
@endsection