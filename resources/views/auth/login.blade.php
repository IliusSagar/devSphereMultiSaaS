@extends('layouts.app')

@section('content')

<h2>Login</h2>

@if(session('error'))
    <p class="error">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ url('/login') }}">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    @error('email') <p class="error">{{ $message }}</p> @enderror

    <input type="password" name="password" placeholder="Password" required>
    @error('password') <p class="error">{{ $message }}</p> @enderror

    <button type="submit">Login</button>
</form>

<p>
    Don't have an account?
    <a href="{{ url('/register') }}">Register</a>
</p>

@endsection