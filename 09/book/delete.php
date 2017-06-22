<?php


$id = $_GET["id"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db17;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//3．データ登録SQL作成
$update = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$update->bindValue(':id', $id, PDO::PARAM_INT);


//SQL実行
$status = $update->execute();


if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
   header("Location: select.php");
   exit;
}









?>