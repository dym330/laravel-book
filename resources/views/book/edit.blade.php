@extends('layouts.common')

@section('main')
    <div class="flex justify-center">
        <div class="w-6/12">
            <h2 class="text-3xl font-semibold my-3">Editing Book</h2>
            <form action="{{ route('book.update', $book->id) }}" method="post">
                @method('PATCH')
                @csrf
                <div>
                    <p>タイトル</p>
                    <input type="text" name="title" id="title" value="{{ $book->title }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mt-3">
                    <p>本文</p>
                    <input type="text" name="body" id="body" value="{{ $book->body }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="Update Book"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded text-center">
                </div>
            </form>
        </div>
    </div>
@endsection