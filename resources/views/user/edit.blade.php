@extends('layouts.common')

@section('main')
    <div class="flex justify-center">
        <div class="w-6/12">
            <h2 class="text-3xl font-semibold my-3">User info</h2>
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div>
                    <p>名前</p>
                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mt-3">
                    <p>自己紹介</p>
                    <input type="text" name="introduction" id="introduction" value="{{ $user->introduction }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mt-3">
                    <p>画像</p>
                    <input type="file" name="image" id="image">
                </div>
                <div class="mt-3">
                    <input type="submit" value="Update User"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded text-center">
                </div>
            </form>
        </div>
    </div>
@endsection