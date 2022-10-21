<!DOCTYPE html>
<x-app-layout>
    
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        </head>
    
        <body>
            <h1>アイテム　紹介</h1>
            <form action='/storeItems' method='POST' enctype="multipart/form-data">
                @csrf
                <div class='item_name'>
                    <h2>Name</h2>
                    <input type='text' name='item[name]' placeholder='アイテムの名前'/>
                    <p class="title_error" style="color:red">{{ $errors->first('item.title') }}</p>
                </div>
                <div class='item_coment'>
                    <h2>content</h2>
                    <textarea name='item[content]' placeholder='紹介文' ></textarea>
                    <p class='body_error' style="color:red">{{ $errors->first('item.body') }}</p>
                </div>
                <div class='URL'>
                    <h2>URL</h2>
                    <textarea type='text' name=item[URL] placeholder='https~~~'></textarea>
                </div>
                <div class='adrres'>
                    <h2>場所</h2>
                    <textarea type='text' name=item[adrres] value='https~~~'></textarea>
                </div>
                <div class='image'>
                    <h2>画像</h2>
                    <input type="file" name="image">
                </div>
                
                <input type='submit' value='store'/>
            </form>
            <div class='back'>[<a href='/index'>back</a>]</div>
        </body>
    </html>
</x-app-layout>
