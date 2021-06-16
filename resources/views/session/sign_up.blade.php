@extends('layouts.common')

@section('main')
    <div class="flex justify-center">
        <div>
            <h1 class="text-3xl font-semibold my-3">新規登録</h1>
            <p>{{ session('name') }}</p>
            <form action="/sign_up" method="POST">
                @csrf
                <div class="mb-3">
                    <p>名前</p>
                    <input type="text" name="name" id="name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-3">
                    <p>Eメール</p>
                    <input type="text" name="email" id="password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-3">
                    <p>パスワード</p>
                    <input type="password" name="password" id="password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="新規作成"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded text-center">
                </div>
            </form>
        </div>
    </div>
@endsection