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

  if(isset($_POST["unggah"])){

    if(tambah($_POST) > 0){
      echo "
        <script>
          alert('Forum berhasil diunggah!');
          document.location.href = 'forum.php';
        </script>
      ";
    }
    else{
      echo "<script>
        return confirm('Forum anda Gagal diunggah. Coba lagi?');
        document.location.href = 'bikinforum.php';
      </script>";
    }
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
      <link rel="stylesheet" href="../CSS/bikinforum.css">
      <script src="../external/jquery-3.6.0.js"></script>
      <script src="../JS/fPageJS.js"></script>
        <title>Buat Forum</title>
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

        <div class="konten">
          <h1>Buat Forum</h1>
          <div class="kotak">
            <form class="" action="" method="post">
              <input type="hidden" name="id" value="<?= $_COOKIE['key'];?>">
              <select class="" name="bidang" required>
                <option value="0" selected disabled >Pilih Bidang Penerapan A.I.</option>
                <option value="1">Analisis dalam Olahrga</option>
                <option value="2">Analisis dalam Pertanian</option>
                <option value="3">Asuransi</option>
                <option value="4">Barang Konsumsi</option>
                <option value="5">Bisnis</option>
                <option value="6">Ilmu Kehidupan</option>
                <option value="7">Kasino</option>
                <option value="8">Kesehatan</option>
                <option value="9">Manufaktur</option>
                <option value="10">Minyak dan Gas</option>
                <option value="11">Pemasaran</option>
                <option value="12">Pendidikan</option>
                <option value="13">Perhotelan</option>
                <option value="14">Telekomunikasi, Media dan Teknologi</option>
                <option value="15">Perjalanan dan Transportasi</option>
              </select>
              <input type="text" name="judul" placeholder="Judul Forum" required autocomplete="off">
              <textarea name="isi" required placeholder="Tulis Forum..."></textarea>
              <div class="button">
                <button type="submit" name="unggah" onclick="return confirm('Lanjutkan Proses Mengunggah?');">Unggah</button>
              </div>
            </form>
          </div>
        </div>

        <div class="footer">
            <h3>@2021. All rights reserved.</h3>
            <a class="igLink" href="https://www.instagram.com/"><img class="ig" src="../resources/logos/instagram.svg"></a>

            <a class="ytLink" href="https://www.youtube.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

          </div>
    </body>
</html>
