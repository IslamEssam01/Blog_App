@extends('includes.header')

@section('content')
    <div class="form-box flex flex-col container">
        <form action={{ route('register') }} class="form flex flex-col" method="POST">
            @csrf
            <h1 class="form-header">Sign up</h1>
            <div class="flex flex-col">
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required />
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
            </div>

            <div class="register-options flex">
                <a href={{ route('login') }}>Already Registered?</a>
                <button class="btn btn--register">Register</button>
            </div>
        </form>
    </div>
@endsection
