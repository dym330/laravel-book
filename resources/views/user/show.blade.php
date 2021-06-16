@extends('layouts.common')

@section('main')
    <div class="flex flex-wrap">
        <div class="w-3/12">
            @include('share.side', ['user' => $user])
        </div>
        <div class="w-9/12">
            @include('share.books', ['books' => $books])
        </div>
    </div>
@endsection
