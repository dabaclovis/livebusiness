@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white">
            Create Article
        </div>
        <div class="card-body">
            @include('partials.createform')
        </div>
    </div>
@endsection
