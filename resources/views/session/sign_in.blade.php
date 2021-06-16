@extends('layouts.common')

@section('main')
    <div class="flex justify-center">
        <div>
            <h1 class="text-3xl font-semibold my-3">ログイン</h1>
            <form action="/sign_in" method="POST">
                @csrf
                <div>
                    <p>Eメール</p>
                    <input type="text" name="email" id="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mt-3">
                    <p>パスワード</p>
                    <input type="password" name="password" id="password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="ログイン"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded text-center">
                </div>
            </form>
        </div>
    </div>
@endsection