@extends('layouts.common')

@section('main')
    @include('share.side', ['user' => $user])

    <h2>Users</h2>
    <table>
        <tr>
            <th>image</th>
            <th>name</th>
            <th></th>
        </tr>
        @foreach ($users as $userdata)
            <tr>
                <td><img src="{{ asset('storage/profiles/'.$userdata->image) }}" alt="画像" width="50px"></td>
                <td>{{ $userdata->name }}</td>
                <td><a href="{{ route('user.show', ['user' => $userdata->id]) }}">show</a></td>
            </tr>
        @endforeach
    </table>
@endsection