@extends('includes.header')


@section('content')
    <h2 class="heading-secondary center-text">Posts from last 7 days</h2>
    @if ($posts)
        <div class="flex flex-col container posts">
            @foreach ($posts->reverse() as $post)
                <div>
                    <a href={{ route('post.show', $post->id) }} class="title">{{ $post->title }}</a>

                    <p class="content">{{ $post->content }}</p>
                    <p class="created">created by : <a href={{ route('user', $post->user->id) }}>{{ $post->user->firstName }}
                            {{ $post->user->lastName }} </a> at {{ $post->created_at }} </p>

                </div>
            @endforeach
    @endif
    </div>
@endsection
