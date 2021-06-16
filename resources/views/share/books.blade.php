<h2 class="text-3xl font-semibold my-3">Book</h2>
<table class="table-auto w-full">
    <tr class="">
        <td>名前</td>
        <td>タイトル</td>
        <td>本文</td>
    </tr>
    @foreach ($books as $book)
        <tr class="border-t-2">
            <td>
                <a href="{{ route('user.show', ['user' => $book->user_id]) }}">
                    <img src="{{ asset('storage/profiles/'.$book->user->image) }}" alt="画像" width="50px">
                </a>
            </td>
            <td><a href="{{ route('book.show', ['book' => $book->id]) }}">{{ $book->title }}</a></td>
            <td>{{ $book->body }}</td>
        </tr>
    @endforeach
</table>
