@extends('layouts.common')

@section('main')
    <div class="flex flex-wrap">
        <div class="w-3/12">
            @include('share.side', ['user' => $user])
        </div>
        <div class="w-9/12">
            <h2 class="text-3xl font-semibold my-3">Users</h2>
            <table class="table-auto w-full">
                <tr class="text-left">
                    <th>image</th>
                    <th>name</th>
                    <th></th>
                </tr>
                @foreach ($users as $userdata)
                    <tr class="border-t-2">
                        <td><img src="{{ asset('storage/profiles/'.$userdata->image) }}" alt="画像" width="50px"></td>
                        <td>{{ $userdata->name }}</td>
                        <td>
                            <a href="{{ route('user.show', ['user' => $userdata->id]) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                                show
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection