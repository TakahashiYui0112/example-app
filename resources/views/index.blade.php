<!DOCTYPE html>
<html>
<head>
    <title>配列の要素を表示</title>
</head>
<body>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">タイトル：{{ $post->title }}</a></li>
            <!-- <li>都道府県：{{ $post->prefectures }}</li> -->
        @endforeach
    </ul>
    <div><a href="{{ route('posts.create')}}">新規作成画面</a></div>
</body>
</html>

