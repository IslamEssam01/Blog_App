@extends('includes.header')


@section('content')
    <h2 class="heading-secondary center-text">{{ $user->firstName }} {{ $user->lastName }}'s Posts </h2>
    @if ($user->posts)
        <div class="flex flex-col container posts">
            @foreach ($user->posts->reverse() as $post)
                <div>
                    <a href={{ route('post.show', $post->id) }} class="title">{{ $post->title }}</a>

                    <p class="content">{{ $post->content }}</p>
                    <p class="created">created at {{ $post->created_at }} </p>

                </div>
            @endforeach
    @endif
    </div>
@endsection
