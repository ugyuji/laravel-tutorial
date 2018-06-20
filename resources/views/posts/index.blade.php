@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Blog</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card mt-4 mb-4">
                <div class="card-body">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found.</p>
    @endif
@endsection
