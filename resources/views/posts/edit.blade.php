@extends('includes.header')

@section('content')
    <div class="form-box flex flex-col container">
        <form action={{ route('post.edit', $post->id) }} class="form form-post  flex flex-col" method="POST">
            @csrf
            @method('PUT')
            <h1 class="form-header">Post</h1>
            <div class="flex flex-col">
                <input type="text" id="title" name="title" value="{{ $post->title }}" required />
                <textarea id="content" name="content" rows="15" cols="50" required>{{ $post->content }}</textarea>
            </div>

            <button class="btn btn--post">Edit Post</button>
        </form>
    </div>
@endsection
