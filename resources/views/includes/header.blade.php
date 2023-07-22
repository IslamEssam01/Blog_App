<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-5" rel="stylesheet" />

    <link rel="stylesheet" href={{ asset('css/general.css') }}>
    <link rel="stylesheet" href={{ asset('css/header.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/form/form.css') }} />
    <link rel="stylesheet" href={{ asset('css/form/login.css') }} />
    <link rel="stylesheet" href={{ asset('css/form/register.css') }} />

    <link rel="stylesheet" href={{ asset('css/post/post_form.css') }}>
    <link rel="stylesheet" href={{ asset('css/post/post_show.css') }}>

    <title>Blog App</title>
</head>

<body>

    <header class="header flex">
        <a href={{ route('home') }} class="logo">Blog App</a>

        <h1 class="heading-primary">BLOG APP</h1>

        @if (Auth::check())
            <div class="flex alignitems-center">

                <a href={{ route('user', Auth::user()->id) }} class="user-name">
                    {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                </a>
                <div class="dropdown">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 down-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                    <div class="dropdown-content">
                        <a href={{ route('post.add') }} class="btn--add">Add Post</a>
                        <a href={{ route('logout') }} class="btn--logout">Logout</a>
                    </div>
                </div>
            </div>
        @else
            <a href={{ route('login') }} class="btn--login-header">Login</a>
        @endif

    </header>

    @yield('content')

</body>

</html>
