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
            <form action='/postsItem' method='POST'>
                {{ csrf_field() }}
                <div class='item_name'>
                    <h2>Name</h2>
                    <input type='text' name='post[naem]' placeholder='アイテムの名前'/>
                    <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class='item_coment'>
                    <h2>content</h2>
                    <textarea name='post[content]' placeholder='紹介文' ></textarea>
                    <p class='body_error' style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class='URL'>
                    <h2>URL</h2>
                    <text type='text' name=post[URL] placeholder='https~~~'></text>
                </div>
                <div class='image'>
                    <h2>画像</h2>
                    <text type='text' name=post[image] placeholder='https~~~'></text>
                </div>
                <input type='submit' value='store'/>
            </form>
            <div class='back'>[<a href='/'>back</a>]</div>
        </body>
    </html>
