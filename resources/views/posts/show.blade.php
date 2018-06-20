@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary mt-4">Go Back</a>
    <h1 class="mt-4">{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
@endsection
