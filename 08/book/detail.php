<?php
$id = $_GET["id"];


//1. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db17;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
   $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <input type="hidden" name="id" value="<?=$id?>">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>本のタイトル：<input type="text" name="title" value="<?=$row["title"]?>"></label><br>
     <label>URL：<input type="text" name="url" value="<?=$row["url"]?>"></label><br>
     <label><textArea name="comment" rows="4" cols="40" value="<?=$row["comment"]?>"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>



</body>
</html>
