@extends('layouts.common')

@section('main')
    @include('share.side', ['user' => $user])

    <h2>Users</h2>
    <table>
        <tr><th>user</th></tr>
        @foreach ($users as $userdata)
            <tr><td>{{ $userdata->name }}</td></tr>
        @endforeach
    </table>
@endsection