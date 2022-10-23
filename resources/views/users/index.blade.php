<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        </head>
        <body>
        <h1>Blog Name</h1>
        <div class='users'>
            @foreach ($user as $user)
                <div class='item'>
                    <div class="image">
                        <image src="{{$user->Icon}}">
                    </div>
                    <h2>{{ $user->name }}</h2>
                    <h5>{{ $user->email }}</h5>
                    <h5>{{ $user->adrres }}</h5>
                    <h5>{{ $user->age }}</h5>
                    <h5>{{ $user->hoby }}</h5>
                </div>
            @endforeach
        </div>
        <p class="edit">[<a href="/users/{{ $user->id }}/edit">ユーザー情報の登録、編集</a>]</p>
        <div>
            <a href='/index'>items</a>
            <a href='/items/create'>createItem</a>
        </div>
    </body>
    </html>