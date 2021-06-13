@extends('layouts.common')

@section('main')
    <h2>User info</h2>
    <table>
        <th>name</th><td>{{ $user->name }}</td>
    </table>

    <h2>Users</h2>
    <table>
        <tr><th>user</th></tr>
        @foreach ($users as $userdata)
            <tr><td>{{ $userdata->name }}</td></tr>
        @endforeach
    </table>
@endsection