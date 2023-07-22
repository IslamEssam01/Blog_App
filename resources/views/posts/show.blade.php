@extends('includes.header')

@section('content')
    <div class="post container">
        <div class="flex justifycontent-spacebetween alignitems-center margin-bottom-sm">
            <h1 class="heading-primary ">{{ $post->title }}</h1>
            @if (Auth::check() && $post->user_id === Auth::user()->id)
                <div class="options flex">
                    <form action={{ route('post.edit', $post->id) }} method="GET">
                        @csrf
                        <button class="btn btn--edit">Edit Post</button>
                    </form>
                    <form action={{ route('post.delete', $post->id) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn--delete">Delete Post</button>
                    </form>
                </div>
            @endif

        </div>
        <p class="created margin-bottom-lr">created by : <a
                href={{ route('user', $post->user->id) }}>{{ $post->user->firstName }}
                {{ $post->user->lastName }} </a> at {{ $post->created_at }} </p>
        <p class="post-content">{{ $post->content }}</p>
    </div>
@endsection
