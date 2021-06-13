@extends('layouts.common')

@section('main')
    <h2>User info</h2>
    <table>
        <th>name</th><td>{{ $user->name }}</td>
    </table>
@endsection