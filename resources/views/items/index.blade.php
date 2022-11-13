<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Items</title>
            <!-- Fonts -->
            
        </head>
        <body>
            <div class='items'>
                @foreach ($items as $item)
                    <div class='item'>
                        <a href="/items/{{ $item->id }}" id="{{ $item->id }}" method="get">{{$item->name}}</a>
                        <p>
                            <a>{{ $item->content }}</a>
                        </p>
                        <form action="/items/{{ $item->id }}" id="form_{{ $item->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $item->id }})">削除</button>
                        </form>   
                    </div>
                @endforeach
            </div>
                <a href='/'>user</a>
                <a href='/items/create'>createItem</a>
            <script>
                function　deletePost(id){
                    'use strict'
                    
                    if(confirm('削除すると復元できません。\n本当に削除しますか?')){
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </html>
