@if (count($errors) > 0)
    <div class="bg-red-300 text-red-800">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif