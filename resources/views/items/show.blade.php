<!DOCTYPE HTML>
    <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Show Item</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                    <image src="{{$item->image_url}}">
                </div>
            </div>
            <button onclick="like({{$item->id}})">いいね</button>
            <p class="edit">[<a href="/items/{{ $item->id }}/edit">edit</a>]</p>
            <div class="footer">
                <a href="/index">戻る</a>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
            </script>
            <script>
                function like(postId) {
                    $.ajax({
                        headers: {
                          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                        url: `/like/${postId}`,
                        type: "POST",
                      })
                        .done(function (data, status, xhr) {
                          console.log(data);
                        })
                        .fail(function (xhr, status, error) {
                          console.log();
                        });
                }
                /*
                function like(postId) {
                  const url = '/post/${postId}';
                  fetch(url, {
                    method: 'POST',
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                      'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        .done(function (data, status, xhr) {
                          console.log(data);
                        })
                        .fail(function (xhr, status, error) {
                          console.log();
                        });
                    })
                  })
                    .then(res => {})
                    .catch(err => console.log(err));
                */
            </script>
        </body>
    </html>