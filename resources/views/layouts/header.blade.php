<header class="text-gray-50 bg-gray-700 h-10">
    <div class="container mx-auto flex justify-between items-center h-10">
        <div id="logo">
            <a href="{{ route('top') }}" class="text-2xl font-semibold">Bookers</a>
        </div>
        <nav>
            <ul>
                @if (session('id'))
                    <li class="list-none inline-block ml-3"><a href="{{ route('user.show', ['user' => session('id')]) }}">Home</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('book.index') }}">Books</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('logout') }}">logout</a></li>
                @else
                    <li class="list-none inline-block ml-3"><a href="{{ route('top') }}">Home</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('about') }}">About</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('sign_up') }}">sign up</a></li>
                    <li class="list-none inline-block ml-3"><a href="{{ route('sign_in') }}">login</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>