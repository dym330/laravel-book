@extends('layouts.common')

@section('main')
    <h1>新規登録</h1>
    <p>{{ session('name') }}</p>
    <form action="/sign_up" method="POST">
        @csrf
        <div>
            <p>名前</p>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <p>Eメール</p>
            <input type="text" name="email" id="password">
        </div>
        <div>
            <p>パスワード</p>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="新規作成">
        </div>
    </form>
@endsection