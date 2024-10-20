<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
     <h1>投稿作成</h1>
    <!-- $errors は、Laravelがエラー発生時に自動的に生成する変数 anyはひとつでもあれば -->
     @if ($errors->any())
         <div>
             <ul>
                <!-- $errors->all() は、バリデーションエラーの配列を返し、$error には各エラーメッセージが代入されます -->
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif    
     <form action="{{ route('posts.store') }}" method="POST">
        
         @csrf
         <table>
             <tr>
                 <th>タイトル</th>
                 <td>
                     <input type="text" name="title">
                 </td>
             </tr>
             <tr>
                 <th>本文</th>
                 <td>
                     <textarea name="content" cols="40" rows="8"></textarea>
                 </td>
             </tr>     
         </table>
         <input type="submit" value="投稿">
     </form>
 </body>
 
 </html>