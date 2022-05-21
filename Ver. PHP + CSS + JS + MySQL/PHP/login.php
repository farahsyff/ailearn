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
    header("Location: fPage.php");
    exit;
  }

  if( isset($_POST["masuk"]) ){
    $usernameEmail = $_POST["usernameEmail"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users
      WHERE username = '$usernameEmail'");

    if(mysqli_num_rows($result) === 1){

      $row = mysqli_fetch_assoc($result);

      if(password_verify($password, $row["password"]) ){

        $_SESSION["masuk"] = true;

        setcookie('key', $row['id']);
        setcookie('key2', hash('sha256', $row['username']));

        header("Location: fPage.php");
        exit;
      }


    }

    $error = true;
  }

  if(isset($error)){
    echo "<script>
      alert('Username / Password Salah!');
    </script>";
  }

//sss ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginCSS.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

    <title>Masuk</title>
  </head>

  <body>

    <div class="form">
      <h1 class="h1">Masuk</h1>

      <form action="" method="post">
        <div class="teksform">
          <label for="usernameEmail">Username atau Email</label>
          <input type="text" name="usernameEmail" id="usernameEmail" required autocomplete="off">
        </div>

        <div class="teksform">
          <label for="password">Password</label>
          <input type="password" name="password" id="password"required>
        </div>

        <div class="button">
          <input type="submit" name="masuk" value="Masuk">
        </div>

        <span>Belum memiliki akun? <a href="register.php">Daftar di sini</a></span>
      </form>
    </div>
  </body>
</html>
