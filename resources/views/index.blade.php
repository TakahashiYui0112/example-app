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
    @auth
    <div><a href="{{ route('posts.create')}}">新規作成画面</a></div>
    @endauth
    @guest
    <div><a href="{{ route('login')}}">ログインする</a></div>
    <div><a href="{{ route('register')}}">ユーザー登録する</a></div>
    @endguest
</body>
</html>

