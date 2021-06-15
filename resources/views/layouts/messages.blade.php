@if (session('success'))
    <div class="success" style="color: green;">
        {{ session('success') }}
    </div>
@endif

@if (session('alert'))
    <div class="alert" style="color: red;">
        {{ session('alert') }}
    </div>
@endif