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
        </tr>
        <tr>
            <td>{{ $book->user->name }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->body }}</td>
        </tr>
    </table>
@endsection