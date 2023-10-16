<!DOCTYPE html>
<html>

<head>
    <title>配列の要素を表示</title>
</head>

<body>
    <ul>
        <li>タイトル：{{ $post->title }}</li>
        <li>本文：{{ $post->content }}</li>
        <li>都道府県：{{ $post->prefectures }}</li>
        <li>投稿日時：{{ $post->created_at }}</li>
        <li>更新日時：{{ $post->updated_at }}</li>
    </ul>
    <div><a href="{{ route('posts.index')}}">一覧に戻る</a></div>
    <div><a href="{{ route('posts.edit', ['id' => $post->id])}}">編集する</a></div>
    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
    </form>
</body>

</html>