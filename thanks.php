<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $address = htmlspecialchars($_POST['address']);
  $contact = htmlspecialchars($_POST['contact']);

  //データベースへ接続する
  // $dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
  $dsn = 'mysql:dbname=STg;host=localhost';//データソースネーム
  $user = 'root';
  $password = 'root';
  $dbh = new PDO ($dsn, $user, $password);//dbh:DBハンドラー
  $dbh->query('SET NAMES utf8');
  //SQL文を実行する
  $sql = 'INSERT INTO `stg`(`name`, `email`, `address`, `contact`) VALUES (?,?,?,?)';
  
  $data = [$name,$email,$address,$contact];//配列を作っているだけ
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
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Contact finish</title>
</head>
<body>
      <!-- すし -->
      <div class="stars"></div>
      <div class="twinkling"></div>
      <div class="clouds"></div>
  <header>
    <!-- すし -->
    <section class="ham">
      <div class="btn-trigger" id="btn17">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <div>
      <ul class="menu">
        <li><a href="">Home</a></li>
        <li><a href="#works">Works</a></li>
        <!-- 本来はlogoを入れる -->
        <li><a href=""><img src="./assets/images/header-logo yellow.png" alt=""></a></li>
        <li><a href="#about-us">About us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>
  <main>
    <div class="thank">
      <h2>Contact contents</h2>
        <div class="thank-box">
          <h3 class="thank-text">Contact details</h3>
          <p class="thank-text">Name :  <?=$name?></p>
          <p class="thank-text">Email :  <?=$email?></p>
          <p class="thank-text">address :  <?=$address?></p>
          <p class="thank-text">Contact contents :<?=$contact?></p>
          <p class="thank-text">Thank you very much！</p>
        </div>
        <div class="back-btn">
        <a href="./index.html">Back home!!</a>
      </div>
    </div>
  </main>
</body>
</html>