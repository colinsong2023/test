
@extends('posts.master')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('post.store') }}">
        @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="" >
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="content" name="content" rows="5" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
