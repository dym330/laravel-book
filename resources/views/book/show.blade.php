@extends('layouts.common')

@section('main')
    <div class="flex flex-wrap">
        <div class="w-3/12">
            @include('share.side', ['user' => $user])
        </div>
        <div class="w-9/12">
            <h2 class="text-3xl font-semibold my-3">Book detail</h2>
            <table class="table-auto w-full">
                <tr>
                    <td>名前</td>
                    <td>タイトル</td>
                    <td>本文</td>
                    @if ($book->user_id == session('id'))
                        <td></td>
                        <td></td>
                    @endif
                </tr>
                <tr class="border-t-2">
                    <td>
                        <a href="{{ route('user.show', $book->user_id) }}">
                            <img src="{{ asset('storage/profiles/'.$book->user->image) }}" alt="画像" width="50px">
                            <br>{{ $book->user->name }}
                        </a>
                    </td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->body }}</td>
                    @if ($book->user_id == session('id'))
                        <td>
                            <a href="{{ route('book.edit', ['book' => $book->id]) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                                Show
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('book.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="削除" onclick="return confirm('削除しますか？');"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-center">
                            </form>
                        </td>
                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection