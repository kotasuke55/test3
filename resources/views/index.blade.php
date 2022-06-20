<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/index" method="post">
  @csrf
  @error('name')
  <p>{{$message}}</p>
  @enderror
  <p>氏名</p>
  <input type="text" name="name">
  @error('email')
  <p>{{$message}}</p>
  @enderror
  <p>メールアドレス</p>
  <input type="text" name="email">
  <p></p>
  <input type="submit" value="送信する">
</form>
</body>
</html>