@extends('layouts.app')

@section('content')
<div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1">Article</h5>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Add</a>
</div>
@endsection
