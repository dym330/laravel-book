@extends('layouts.common')

@section('main')
    @include('share.side', ['user' => $user])
    @include('share.books', ['books' => $books])
@endsection
