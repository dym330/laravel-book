@extends('layouts.common')

@section('main')
    <h2>User info</h2>
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div>
            <p>名前</p>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <p>自己紹介</p>
            <input type="text" name="introduction" id="introduction" value="{{ $user->introduction }}">
        </div>
        <div>
            <p>画像</p>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <input type="submit" value="Update User">
        </div>
    </form>
@endsection