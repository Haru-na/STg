<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $contact = htmlspecialchars($_POST['contact']);

  //データベースへ接続する
  // $dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
  $dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
  $user = 'root';
  $password = 'root';
  $dbh = new PDO ($dsn, $user, $password);//dbh:DBハンドラー
  $dbh->query('SET NAMES utf8');
  //SQL文を実行する
  $sql = 'INSERT INTO `sussy`( `name`, `email`, `contact`) VALUES (?,?,?)';
  $data = [$name,$email,$contact];//配列を作っているだけ
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  //データベースを切断する
  $dbh = null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact finish</title>
</head>
<body>
<header>
    <!-- すし -->
    <div class="menu">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href=""><img src="" alt=""></a></li>
        <li><a href="#about-us">About us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>
  <main class="normal">
    <div class="thank normal">
      <h2 class="normal">Contact contents</h2>
        <div class="thank-box">
          <h3 class="thank-text">Contact details</h3>
          <p class="thank-text">Name :<?=$name?></p>
          <p class="thank-text">Email :<?=$email?></p>
          <p class="thank-text">Contact contents :<?=$contact?></p>
          <p class="thank-text">Thank you very much！</p>
        </div>
    </div>
  </main>
</body>
</html>