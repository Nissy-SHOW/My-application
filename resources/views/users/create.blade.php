<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        </head>
    
        <body>
            <h1>ユーザー情報の登録　編集</h1>
            <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <h2>住所</h2>
                    <input type='text' name='user[adrres]' placeholder='住所'/>
                    <h2>年齢</h2>
                    <input type='text' name='user[age]' placeholder='年齢'/>
                    <h2>趣味</h2>
                    <input type='text' name='user[hoby]' placeholder='趣味'/>
                    <h2>アイコン</h2>
                    <input type="file" name="image">
                </div>
                
                <input type='submit' value='store'/>
            </form>
            <div class='back'>[<a href='/'>back</a>]</div>
        </body>
    </html>