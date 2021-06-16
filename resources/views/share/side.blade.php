<h2 class="text-3xl font-semibold my-3">User info</h2>
<img src="{{ asset('storage/profiles/'.$user->image) }}" alt="プロフィール画像" class="mb-3">
<table class="table-auto">
    <tr class="border-t-2">
        <th class="px-4 py-2">name</th><td class="px-4 py-2">{{ $user->name }}</td>
    </tr>
    <tr class="border-t-2">
        <th class="px-4 py-2">introduction</th><td class="px-4 py-2">{{ $user->introduction }}</td>
    </tr>
</table>
<a href="{{ route('user.edit', ['user' => $user->id])}}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 w-3/5 rounded block text-center">
    編集
</a>

<h2 class="text-3xl font-semibold mt-5 mb-3">Book新規登録</h2>
<form action="/book" method="POST">
    @csrf
    <div class="mb-3">
        <p>タイトル</p>
        <input type="text" name="title" id="title"
            class="mt-1 block w-4/5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </div>
    <div class="mb-3">
        <p>本文</p>
        <textarea type="text" name="body" id="body"
            class="mt-1 block w-4/5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </textarea>
    </div>
    <div>
        <input type="submit" value="登録"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded text-center">
    </div>
</form>