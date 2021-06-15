<h2>User info</h2>
<img src="{{ asset('storage/profiles/'.$user->image) }}" alt="プロフィール画像">
<table>
    <tr>
        <th>name</th><td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>introduction</th><td>{{ $user->introduction }}</td>
    </tr>
</table>
<a href="{{ route('user.edit', ['user' => $user->id])}}">編集</a>

<h2>Book新規登録</h2>
<form action="/book" method="POST">
    @csrf
    <div>
        <p>タイトル</p>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <p>本文</p>
        <input type="text" name="body" id="body">
    </div>
    <div>
        <input type="submit" value="登録">
    </div>
</form>