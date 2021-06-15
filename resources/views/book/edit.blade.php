@extends('layouts.common')

@section('main')
    <h2>Editing Book</h2>
    <form action="{{ route('book.update', $book->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
            <p>タイトル</p>
            <input type="text" name="title" id="title" value="{{ $book->title }}">
        </div>
        <div>
            <p>本文</p>
            <input type="text" name="body" id="body" value="{{ $book->body }}">
        </div>
        <div>
            <input type="submit" value="Update Book">
        </div>
    </form>
@endsection