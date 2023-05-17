
@extends('posts.master')

@section('content')
    @foreach ($posts as $post)
        <p>title:  {{ $post->title }}</p>
        <p>content:  {{ $post->content }}</p>
        <p>create time:  {{ $post->created_at }}</p>
        <a href="{{ route('post.create') }}">Create Post</a>
        <form action="{{ route('post.edit', $post->id) }}" method="GET">
            @csrf
            <button type="submit">Edit</button>
        </form>
        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr>
    @endforeach

    {{ $posts->links() }}
@endsection
