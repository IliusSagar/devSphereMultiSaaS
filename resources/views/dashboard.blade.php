@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<p>Welcome, {{ auth()->user()->name }}</p>

<form method="POST" action="{{ url('/logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection