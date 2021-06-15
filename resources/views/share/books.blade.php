<h2>Book</h2>
@foreach ($books as $book)
    <table>
        <tr>
            <td>名前</td>
            <td>タイトル</td>
            <td>本文</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('user.show', ['user' => $book->user_id]) }}">
                    <img src="{{ asset('storage/profiles/'.$book->user->image) }}" alt="画像" width="50px">
                </a>
            </td>
            <td><a href="{{ route('book.show', ['book' => $book->id]) }}">{{ $book->title }}</a></td>
            <td>{{ $book->body }}</td>
        </tr>
    </table>
@endforeach