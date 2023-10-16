<!DOCTYPE html>
<html>
<head>
    <title>配列の要素を表示</title>
</head>
<body>
<h1>編集画面</h1>
<form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
@csrf
@method('put')
    <label for="title">タイトル</label>
    <input type="text" id="title" name="title" value="{{ $post->title }}" >

    <label for="content">本文</label>
    <textarea  id="content" name="content" >{{ $post->content }}</textarea>

    <label for="prefectures">都道府県</label>
    <input type="text" id="prefectures" name="prefectures" value="{{ $post->prefectures }}" >

    <button type="submit">送信</button>

</form>
<div><a href="{{ route('posts.index')}}">一覧に戻る</a></div>
</body>
</html>
