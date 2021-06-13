<header>
    @if (session('id'))
        <a href="/">Bookers</a>
        <a href="/">Home</a>
        <a href="/user">Users</a>
        <a href="/">Books</a>
        <a href="/">logout</a>
    @else
        <a href="/">Bookers</a>
        <a href="">Home</a>
        <a href="/about">About</a>
        <a href="/sign_up">sign up</a>
        <a href="/sign_in">login</a>
    @endif
</header>