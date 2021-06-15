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

    <h2>Book</h2>
    @foreach ($books as $book)
        <table>
            <tr>
                <td>名前</td>
                <td>タイトル</td>
                <td>本文</td>
            </tr>
            <tr>
                <td><a href="{{ route('user.show', ['user' => $book->user_id]) }}">{{ $book->user->name }}</a></td>
                <td><a href="{{ route('book.show', ['book' => $book->id]) }}">{{ $book->title }}</a></td>
                <td>{{ $book->body }}</td>
            </tr>
        </table>
    @endforeach
@endsection