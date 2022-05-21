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

  if(isset($_POST["unggahkomentar"])){

    if(tambahkomen($_POST) > 0){
      echo "
        <script>
          alert('Komentar berhasil ditambahkan!');
        </script>
      ";
    }
    else{
      echo "
        <script>
          alert('error!');
        </script>
      ";
    }

    header("Location: komen.php?id=" . $_POST["id_forum"]);
  }

  $id = $_GET["id"];

  $forum = query("SELECT * FROM forum WHERE id = $id")[0];
  $komentar = query("SELECT * FROM komen WHERE id_forum = $forum[id] ORDER BY id ASC");
  $user = query("SELECT * FROM users WHERE id = $forum[id_user]")[0];
  $namabidang = query("SELECT judul FROM materi WHERE id = $forum[bidang]")[0];

//sss ?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
      <link rel="stylesheet" href="../CSS/outline.css">
      <link rel="stylesheet" href="../CSS/komen.css">
      <script src="../external/jquery-3.6.0.js"></script>
      <script src="../JS/fPageJS.js"></script>
        <title>Forum</title>
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

        <div class="back">
          <div class="kotak-forum">
            <div class="kotak-profil">
              <div class="satu">
                <img src="../resources/fotoprofile/<?= $user["foto"];?>" width="40px" height="40px">
                <h3><?= $user["username"];?></h3>
              </div>
              <div class="dua">
                <h3><?= $namabidang["judul"];?></h3>
              </div>
            </div>
            <hr>
            <h2><?= $forum["judul"];?></h2>
            <p><?= $forum["isi"];?></p>
          </div>
          <div class="judul-komentar">
            <h1>Komentar</h1>
          </div>

          <div class="kotak-komen">
            <form class="" action="" method="post">
              <input type="hidden" name="id_forum" value="<?= $id;?>">
              <input type="hidden" name="id_user" value="<?= $_COOKIE['key'];?>">
              <textarea name="komentar" placeholder="Tambahkan Komentar..." required></textarea>
              <div class="button">
                <button type="submit" name="unggahkomentar">Tambahkan</button>
              </div>
            </form>
          </div>

          <?php foreach($komentar as $row) : ?>
            <div class="kotak-komen">
              <div class="profil-komen">
                <?php $user_komen = query("SELECT * FROM users WHERE id = $row[id_user]")[0];?>
                <img src="../resources/fotoprofile/<?= $user_komen["foto"];?>" width="40px" height="40px">
                <h3><?= $user_komen["username"];?></h3>
              </div>
              <hr>
              <p><?= $row["isi"];?></p>

            </div>
          <?php endforeach;?>

          <div class="kosong">

          </div>

        </div>

        <div class="footer">
          <h3>@2021. All rights reserved.</h3>
          <img class="ig" src="../resources/logos/instagram.svg">
          <img class="yt" src="../resources/logos/youtube.svg">
        </div>
    </body>
</html>
