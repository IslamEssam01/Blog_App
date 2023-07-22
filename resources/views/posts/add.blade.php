@extends('includes.header')

@section('content')
    <div class="form-box flex flex-col container">
        <form action={{ route('post.add') }} class="form form-post flex flex-col" method="POST">
            @csrf
            <h1 class="form-header">Post</h1>
            <div class="flex flex-col">
                <input type="text" id="title" name="title" placeholder="title" />
                <textarea id="content" name="content" rows="15" cols="50" required></textarea>
            </div>

            <button class="btn btn--post">Add Post</button>
        </form>
    </div>
@endsection
