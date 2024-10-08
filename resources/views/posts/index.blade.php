<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
    <h1>投稿一覧</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>本文</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
        @endforeach
    </table>
 </body>
 
 </html>