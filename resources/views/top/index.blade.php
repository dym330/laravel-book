@extends('layouts.common')

@section('main')
    <div class="flex justify-center">
        <div>
            <h1 class="text-3xl font-semibold mt-3">welcome to Bookers !!</h1>
            <p>
                In <span class="font-bold">Bookers</span>,<br />
                you can share and exchange your opinions , inpressions , and emotions<br />
                about various books!
            </p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded block text-center" href="{{ route('sign_in') }}">log in</a>
            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 my-3 rounded block text-center" href="{{ route('sign_up') }}">Sign up</a>
        </div>
    </div>
@endsection
