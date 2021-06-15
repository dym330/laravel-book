@extends('layouts.common')

@section('main')
    <h2>User info</h2>
    <table>
        <th>name</th><td>{{ $user->name }}</td>
    </table>

    <h2>Book新規登録</h2>
    <form action="/book" method="POST">
        @csrf
        <div>
            <p>タイトル</p>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <p>本文</p>
            <input type="text" name="body" id="body">
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>

    <h2>Book detail</h2>
    <table>
        <tr>
            <td>名前</td>
            <td>タイトル</td>
            <td>本文</td>
            @if ($book->user_id == session('id'))
                <td></td>
                <td></td>
            @endif
        </tr>
        <tr>
            <td>
                <a href="{{ route('user.show', $book->user_id) }}">
                    <img src="{{ asset('storage/profiles/'.$book->user->image) }}" alt="画像" width="50px">
                    <br>{{ $book->user->name }}
                </a>
            </td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->body }}</td>
            @if ($book->user_id == session('id'))
                <td><a href="{{ route('book.edit', ['book' => $book->id]) }}">Show</a></td>
                <td>
                    <form action="{{ route('book.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="削除" onclick="return confirm('削除しますか？');">
                    </form>
                </td>
            @endif
        </tr>
    </table>
@endsection