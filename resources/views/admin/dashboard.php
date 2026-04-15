

<h2>Dashboard Admin</h2>

<p>Welcome,</p>


<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
