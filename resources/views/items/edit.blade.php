<!DOCTYPE HTML>
<x-app-layout>
    <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Show Item</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
       <!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/items/{{ $item->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='item[name]' value="{{ $item->name }}">
            </div>
            <div class='content__body'>
                <h2>紹介文</h2>
                <input type='text' name='item[content]' value="{{ $item->content }}">
            </div>
            <div class='URL__body'>
                <h2>URL</h2>
                <input type='text' name='item[URL]' value="{{ $item->URL }}">
            </div>
            <div class='URL__body'>
                <h2>URL</h2>
                <input type='text' name='item[URL]' value="{{ $item->adrres }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
    </html>
</x-app-layout>