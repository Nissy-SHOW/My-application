<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Item</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $item->name }}
        </h1>
        <div class="content">
            <div class="content__item">
                <h3>内容</h3>
                <p>{{ $item->content }}</p>    
            </div>
        </div>
        <div>
            <div class="url">
                <h3>URL</h3>
                <p>{{ $item->URL }}</p>
            </div>
        </div>
        <div>
            <div class="sdrres">
                <h3>adrres</h3>
                <p>{{ $item->adrres }}</p>
            </div>
        </div>
        <div>
            <div class="image">
                <h3>image</h3>
                <p href="$item->image">{{ $item->image_url }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </body>
</html>