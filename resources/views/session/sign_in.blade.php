@extends('layouts.common')

@section('main')
    <h1>ログイン</h1>
    <form action="/sign_in" method="POST">
        @csrf
        <div>
            <p>Eメール</p>
            <input type="text" name="email" id="password">
        </div>
        <div>
            <p>パスワード</p>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="ログイン">
        </div>
    </form>
@endsection