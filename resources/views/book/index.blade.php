@extends('layouts.common')

@section('main')
    @include('share.side', ['user' => $user])

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