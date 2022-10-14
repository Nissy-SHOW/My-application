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
        <div class='items'>
            @foreach ($user as $user)
                <div class='item'>
                    <h2>
                        <a>{{ $user->name }}</a>
                    </h2>
                    <h5>
                        <a>{{ $user->email }}</a>
                    </h5>
                </div>
            @endforeach
        </div>
        <a href='/index'>items</a>
        <a href='/items/createitems'>createItem</a>
    </body>
    </html>