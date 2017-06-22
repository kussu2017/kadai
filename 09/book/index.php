<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
  
  <form method="post" action="login.php">
  <div class="login">
   <fieldset>
    <legend>お気に入りの本を登録しよう</legend>
     <label>本の名前：<input type="text" name="title"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
</header>
<!-- Head[End] -->

</body>
</html>
