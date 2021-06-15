@extends('layouts.common')

@section('main')
    <h2>User info</h2>
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <input type="submit" value="Update User">
        </div>
    </form>
@endsection