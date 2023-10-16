<!DOCTYPE html>
<html>

<head>
    <title>配列の要素を表示</title>
</head>

<body>
    <h1>新規作成画面</h1>
    <form action="/posts" method="post">
        @csrf
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title">

        <label for="content">本文</label>
        <textarea id="content" name="content"></textarea>

        <label for="prefecture_id">都道府県</label>
        <select name="prefecture_id" id="prefecture_id">
            @foreach($prefectures as $prefecture)
            <option value="{{$prefecture->id}}">{{$prefecture -> name}}</option>
            @endforeach
        </select>

        <button type="submit">送信</button>

    </form>
    <div><a href="{{ route('posts.index')}}">一覧に戻る</a></div>
</body>

</html>