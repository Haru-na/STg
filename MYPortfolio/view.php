<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
</head>
<body>
  <form action=""  method="POST">
  <p>検索したい文字を入力してください。</p>
  <input type="text" name = "text">
  <input type="submit" value="検索">
  </form>
</body>
</html>

<?php
//isset():undefinedかどうかチェックする 真逆の意味で
if (isset($_POST['text'])) {
  $text = $_POST['text'];
} else {
  $text = '';
}
// $text = $_POST['text'];
//データベースへ接続する
$dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
$user = 'root';
$password = 'root';
$dbh = new PDO ($dsn, $user, $password);//dbh:DBハンドラー
$dbh->query('SET NAMES utf8');
//SQL文を実行する
// $sql = 'SELECT * FROM `survey`';//お問い合わせ内容を全部SELECTするSQL文
$sql = 'SELECT * FROM `sussy` WHERE `contact` LIKE  ?';
$data[] = '%'.$text.'%';
$stmt = $dbh->prepare($sql);
$stmt->execute($data);
//データベースを切断する
$dbh = null;

// $rec = $stmt->fetch(PDO::FETCH_ASSOC);//実行結果を一行ずつ配列で取り出す
while ($rec = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo $rec['code']. '<br>';
  echo $rec['name']. '<br>';
  echo $rec['email']. '<br>';
  echo $rec['contact']. '<br>';
  echo '<hr>';
}
?>
