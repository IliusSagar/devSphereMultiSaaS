@extends('layouts.app')

@section('content')

<h2>Register</h2>

<form method="POST" action="{{ url('/register') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required>
    @error('name') <p class="error">{{ $message }}</p> @enderror

    <input type="email" name="email" placeholder="Email" required>
    @error('email') <p class="error">{{ $message }}</p> @enderror

    <input type="password" name="password" placeholder="Password" required>
    @error('password') <p class="error">{{ $message }}</p> @enderror

    <button type="submit">Register</button>
</form>

<p>
    Already have an account?
    <a href="{{ url('/login') }}">Login</a>
</p>

@endsection