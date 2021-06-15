@extends('layouts.common')

@section('main')
    @include('share.side', ['user' => $user])
@endsection