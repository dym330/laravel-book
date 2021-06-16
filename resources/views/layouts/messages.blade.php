@if (session('success'))
    <div  class="bg-green-300 text-green-800">
        {{ session('success') }}
    </div>
@endif

@if (session('alert'))
    <div  class="bg-red-300 text-red-800">
        {{ session('alert') }}
    </div>
@endif