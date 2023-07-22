@extends('includes.header')

@section('content')
    <div class="form-box flex flex-col container">
        <form action="#" class="form flex flex-col" method="POST">
            @csrf
            <h1 class="form-header">Sign in</h1>
            <div class="flex flex-col">
                @error('email')
                    <p class="email-error">Please enter the right email and password</p>
                @enderror
                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
            </div>
            <div class="flex Options">
                <div class="checkbox flex">
                    <input type="checkbox" name="rememberMe" id="rememberMe" value={{ true }} />
                    <label for="rememberMe">Remember me</label>
                </div>
                {{-- <a href="#">Forgot your password?</a> --}}
            </div>
            <button class="btn btn--login">Login</button>
        </form>

        <div class="container form-footer flex">
            <p>Don't have an account?</p>
            <a href={{ route('register') }}>Sign up</a>
        </div>
    </div>
@endsection
