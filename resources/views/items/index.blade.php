<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Items</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='items'>
            @foreach ($items as $item)
                <div class='item'>
                    <h2>
                        <a href="/items/{{ $item->id }}">{{$item->name}}</a>
                    </h2>
                    <h5>
                        <a>{{ $item->content }}</a>
                    </h5>
                </div>
            @endforeach
        </div>
        <a href='/items/createitems'>createItem</a>
    </body>
</html>