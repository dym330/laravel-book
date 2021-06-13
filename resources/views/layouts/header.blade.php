<header style="background-color: lightsteelblue; height: 50px; width: 100%; display: flex; justify-content: space-between; align-items: center;">
    <div id="logo">
        <a href="{{ route('top') }}" style="float: left;">Bookers</a>
    </div>
    <nav>
        <ul>
            @if (session('id'))
                <li　style="list-style: none;"><a href="{{ route('user.show', ['user' => session('id')]) }}" style="">Home</a></li>
                <li　style="list-style: none;"><a href="{{ route('user.index') }}" style="">Users</a></li>
                <li　style="list-style: none;"><a href="/" style="">Books</a></li>
                <li　style="list-style: none;"><a href="{{ route('logout') }}" style="">logout</a></li>
            @else
                <li　style="list-style: none;"><a href="{{ route('top') }}" style="">Home</a></li>
                <li　style="list-style: none;"><a href="{{ route('about') }}" style="">About</a></li>
                <li　style="list-style: none;"><a href="{{ route('sign_up') }}" style="">sign up</a></li>
                <li　style="list-style: none;"><a href="{{ route('sign_in') }}" style="">login</a></li>
            @endif
        </ul>
    </nav>
</header>