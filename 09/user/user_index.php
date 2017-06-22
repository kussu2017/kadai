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
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザー一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録画面</legend>
     <label>ユーザー名：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="lpw" name="lpw"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
