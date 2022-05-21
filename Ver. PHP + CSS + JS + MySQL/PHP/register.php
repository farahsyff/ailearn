<?php //tess
  session_start();
  require 'functions.php';

  if(isset($_COOKIE['key']) && isset($_COOKIE['key2'])){
    $id = $_COOKIE['key'];
    $key = $_COOKIE['key2'];

    $result = mysqli_query($conn, "SELECT username FROM
      users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
      $_SESSION['masuk'] = true;
    }
  }

  if(isset($_SESSION["masuk"])){
    header("Location: FrontPage.php");
    exit;
  }

  if( isset($_POST["daftar"]) ){
    if(daftar($_POST) > 0){
      echo "<script>
        alert('Pendaftaran Berhasil!');
        document.location.href = 'login.php';
      </script>";
      exit;
    }else{
      echo mysqli_error($conn);
    }
  }
//sss ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

    <title>Daftar</title>
  </head>

  <body>

    <div class="form">
      <h1 class="h1">Daftar</h1>

      <form action="" method="post">
        <div class="teksform">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" required>
        </div>

        <div class="teksform">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" required>
        </div>

        <div class="teksform">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>

        <div class="teksform">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>

        <div class="teksform">
          <label for="password2">Konfirmasi Password</label>
          <input type="password" name="password2" id="password2" required>
        </div>

        <div class="button">
          <input type="submit" name="daftar" value="Daftar">
        </div>

        <span>Sudah memiliki akun? <a href="login.php">Masuk</a></span>
      </form>
    </div>
  </body>
</html>
