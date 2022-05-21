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

  $artikel = query("SELECT * FROM forum ORDER BY id DESC");

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $artikel = query("SELECT * FROM forum WHERE bidang = $id ORDER BY id DESC");
  }

//sss ?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
      <link rel="stylesheet" href="../CSS/outline.css">
      <link rel="stylesheet" href="../CSS/forum.css">
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

        <div id="back">
          <div class="container-button">
            <div class="judul">
              <h1>Forum Diskusi</h1>
            </div>
            <div class="button-bidang">
              <a href="bikinforum.php" id="button1">Buat Forum</a>
              <!--Dropdown-->
              <div class="dropDownContainer">
                  <div class="dropDownBar">
                      <button class="dropDownButton">
                          <h4>Bidang Penerapan A.I.</h3>
                          <div class="dropDownArrow"><img src="../resources/logos/down-arrow.svg"></div>
                      </button>
                      <div class="dropDownMenu">
                          <a href="forum.php?id=1" class="dropDownWrap"><h4>Analisis dalam Olahraga</h4></a>
                          <a href="forum.php?id=6" class="dropDownWrap"><h4>Ilmu Kehidupan</h4></a>
                          <a href="forum.php?id=11" class="dropDownWrap"><h4>Pemasaran</h4></a>
                          <a href="forum.php?id=2" class="dropDownWrap"><h4>Analisis dalam Pertanian</h4></a>
                          <a href="forum.php?id=7" class="dropDownWrap"><h4>Kasino</h4></a>
                          <a href="forum.php?id=12" class="dropDownWrap"><h4>Pendidikan</h4></a>
                          <a href="forum.php?id=3" class="dropDownWrap"><h4>Asuransi</h4></a>
                          <a href="forum.php?id=4" class="dropDownWrap"><h4>Barang Konsumsi</h4></a>
                          <a href="forum.php?id=8" class="dropDownWrap"><h4>Kesehatan</h4></a>
                          <a href="forum.php?id=13" class="dropDownWrap"><h4>Perhotelan</h4></a>
                          <a href="forum.php?id=5" class="dropDownWrap"><h4>Bisnis</h4></a>
                          <a href="forum.php?id=9" class="dropDownWrap"><h4>Manufaktur</h4></a>
                          <a href="forum.php?id=14" class="dropDownWrap"><h4>Perjalanan & Transportasi</h4></a>
                          <a href="forum.php?id=10" class="dropDownWrap"><h4>Minyak & Gas</h4></a>
                          <a href="forum.php?id=15" class="dropDownWrap"><h4>Telekomunikasi, Media, & Teknologi</h4></a>
                      </div>
                  </div>

              </div>
            </div>
          </div>
          <div class="container">
            <?php $i = 0;?>
            <?php foreach($artikel as $row) : ?>
              <?php $i++;?>
              <div class="kotak">
                <a href="komen.php?id=<?= $row["id"];?>">
                  <?php $namabidang = query("SELECT judul FROM materi WHERE id = $row[bidang]")[0];?>
                  <h2><?= $namabidang["judul"];?></h2>
                  <hr>
                  <h2><?= $row["judul"];?></h2>
                  <p><?= $row["isi"];?></p>
                  <div class="kotak-profil">
                    <?php $user = query("SELECT * FROM users WHERE id = $row[id_user]")[0];?>
                    <h3><?= $user["username"];?></h3>
                    <img src="../resources/fotoprofile/<?= $user["foto"];?>" width="40px" height="40px">
                  </div>
                </a>
              </div>
            <?php endforeach;?>
          </div>

          <?php if(!$artikel) : ?>
          <div class="kosong">
            <h1>Tidak Ada Forum</h1>
          </div>
          <?php elseif($i === 1 || $i === 2) :?>
          <div class="kosong2">

          </div>
          <?php endif;?>
        </div>


        <div class="footer">
            <h3>@2021. All rights reserved.</h3>
            <a class="igLink" href="https://www.instagram.com/"><img class="ig" src="../resources/logos/instagram.svg"></a>

            <a class="ytLink" href="https://www.youtube.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

          </div>
    </body>
</html>
