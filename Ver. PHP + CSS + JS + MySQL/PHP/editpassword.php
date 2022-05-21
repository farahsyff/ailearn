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

  if( isset($_POST["ubah"]) ){

      //cek apakah data berhasil diubah atau tidak
      if( ubahpassword($_POST) > 0){
        echo "
          <script>
            alert('Password Berhasil diubah!');
            document.location.href = 'profile.php';
          </script>
        ";
      }else{
        echo "
          <script>
            alert('Password Gagal diubah!');
            document.location.href = 'profile.php';
          </script>
        ";
      }

  }

  $id = $_GET['id'];

  $user = query("SELECT * FROM users WHERE id = $id")[0];


//sss ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
        <link rel="stylesheet" href="../CSS/outline.css">
        <link rel="stylesheet" href="../CSS/editProfCSS.css">
        <script src="../JS/editProfJS.js"></script>

        <title>Edit Password page</title>
    </head>
    <body>
        <div class="navPlaceHolder"></div>
        <div class="navBar">
            <h1>aIlearn</h1>
            <div id="searchForm">
                <form role="search" id="form" action="cari.php" method="post">
                    <input type="text" id="query" name="cari" placeholder="Cari..." autocomplete="off">
                    <button id="searchImg">
                      <img id= "searchLogo" src="../resources/logos/logo search ailearn.png">
                    </button>
                  </form>
            </div>

            <?php if(isset($_SESSION['masuk'])) : ?>
            <!--Login-->
            <div class="secNav">
                <a class="landing" href="fPage.php"><img src="../resources/logos/home.svg"></a>
                <a class="forum" href="forum.php"><img src="../resources/logos/forum.svg"></a>
                <div class="user">
                    <div class="userButton">
                        <div class="userButton2"><img src="../resources/logos/user.svg"></div>
                    </div>
                    <div class="userMenu">
                        <a class="user1" href="profile.php">Edit Profil</a>
                        <a class="user2" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>


            <!--Normal-->
            <?php else :?>
            <div class="firstNav activeNav">
                <a id="home" href="fPage.php"><span class="blot0"></span>Beranda</a>
                <a id="login" href="login.php"><span class="blot0"></span>Masuk</a>
            </div>
            <?php endif;?>


        </div>
        <div class="footer">
            <h3>@2021. All rights reserved.</h3>
            <a class="igLink" href="https://www.instagram.com/"><img class="ig" src="../resources/logos/instagram.svg"></a>

            <a class="ytLink" href="https://www.youtube.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

          </div>
        <div class="gridContainer">
            <div class="profileContainer">
                <h1 id="profTitle">Profil Anda</h1>
                <div id="profPic">
                    <img src="../resources/fotoprofile/<?= $user["foto"];?>">
                </div>
            </div>
            <form class="contentForm" action="" method="post">
              <input type="hidden" name="id" value="<?= $user["id"];?>">
              <input type="hidden" name="nama" value="<?= $user["nama"];?>">
              <input type="hidden" name="username" value="<?= $user["username"];?>">
              <input type="hidden" name="email" value="<?= $user["email"];?>">
              <input type="hidden" name="foto" value="<?= $user["foto"];?>">
                <label for="pwd">Masukan Password Baru</label><br>
                <input type="password" id="pwd" name="password1" autocomplete="off" required><br>
                <label for="pwd2">Konfirmasi Password Baru</label><br>
                <input type="password" id="pwd2" name="password2" autocomplete="off" required><br>
                <label for="pwd2">Masukan Password Lama</label><br>
                <input type="password" id="pwd3" name="password3" autocomplete="off" required><br>
                <a href="#"><button id="editButton" type="submit" name="ubah">Konfirmasi Edit</button></a>
            </form>
        </div>
    </body>
</html>
