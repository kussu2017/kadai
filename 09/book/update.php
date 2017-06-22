<?php
//1.POSTでParamを取得
$id = $_POST["id"];
$title = $_POST["title"];
$url = $_POST["url"];
$comment = $_POST["comment"];
var_dump($_POST);


//2.DB接続など
//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db17;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//3．データ登録SQL作成
//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//基本的にinsert.phpの処理の流れです。
$update = $pdo->prepare("UPDATE gs_bm_table SET title=:title,url=:url,comment=:comment WHERE id=:id");
$update->bindValue(':id', $id, PDO::PARAM_INT);
$update->bindValue(':title', $title, PDO::PARAM_STR);
$update->bindValue(':url', $url, PDO::PARAM_STR);
$update->bindValue(':comment', $comment, PDO::PARAM_STR);

//SQL実行
$status = $update->execute();


$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
   header("Location: select.php");
   exit;
}


?>
