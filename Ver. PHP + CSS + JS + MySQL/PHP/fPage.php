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

//sss ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
        <link rel="stylesheet" href="../CSS/outline.css">
        <link rel="stylesheet" href="../CSS/fPageCSS.css">
        <script src="../external/jquery-3.6.0.js"></script>
        <script src="../JS/fPageJS.js"></script>
        <title>front page</title>
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
            <div class="welcomeContainer">
                <div class="openingContainer">
                    <h2>Selamat Datang di Website Kami!</h2>
                    <p>AIlearn merupakan platform website yang bertujuan agar peminat teknologi dapat memperluas pengetahuannya
                        mengenai A.I. di berbagai bidang kehidupan. Tersedianya informasi singkat mengenai penerapan A.I.
                        untuk para pemula yang tertarik untuk mempelajari A.I
                    </p>
                </div>
                <div class="slideContainer">
                    <div class="slideContainer2">
                        <div class="arrowContainer arrL"></div>
                        <div class="arrowContainer arrR"></div>
                        <div class="slides"><img src="../resources/images/aihealthcare1.jpg"></div>
                        <div class="slides"><img src="../resources/images/aihealthcare2.jpg"></div>
                        <div class="slides"><img src="../resources/images/aihealthcare3.jpg"></div>
                        <div class="slides"><img src="../resources/images/aihealthcare4.jpg"></div>
                        <div class="slides"><img src="../resources/images/aihealthcare5.jpg"></div>
                        <div class="dotContainer">
                            <div class="dot activeDot" onclick="bulletSlide(0)"></div>
                            <div class="dot" onclick="bulletSlide(1)"></div>
                            <div class="dot" onclick="bulletSlide(2)"></div>
                            <div class="dot" onclick="bulletSlide(3)"></div>
                            <div class="dot" onclick="bulletSlide(4)"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropDownContainer">
                <div class="dropDownBar">
                    <button class="dropDownButton">
                        <h4>Bidang Penerapan A.I.</h3>
                        <div class="dropDownArrow"><img src="../resources/logos/down-arrow.svg"></div>
                    </button>
                    <div class="dropDownMenu">
                        <a href="olahragaPage.php" class="dropDownWrap"><h4>Analisis dalam Olahraga</h4></a>
                        <a href="kehidupanPage.php" class="dropDownWrap"><h4>Ilmu Kehidupan</h4></a>
                        <a href="pemasaranPage.php" class="dropDownWrap"><h4>Pemasaran</h4></a>
                        <a href="pertanianPage.php" class="dropDownWrap"><h4>Analisis dalam Pertanian</h4></a>
                        <a href="kasinoPage.php" class="dropDownWrap"><h4>Kasino</h4></a>
                        <a href="pendidikanPage.php" class="dropDownWrap"><h4>Pendidikan</h4></a>
                        <a href="asuransiPage.php" class="dropDownWrap"><h4>Asuransi</h4></a>
                        <a href="konsumsiPage.php" class="dropDownWrap"><h4>Barang Konsumsi</h4></a>
                        <a href="kesehatanPage.php" class="dropDownWrap"><h4>Kesehatan</h4></a>
                        <a href="perhotelanPage.php" class="dropDownWrap"><h4>Perhotelan</h4></a>
                        <a href="bisnisPage.php" class="dropDownWrap"><h4>Bisnis</h4></a>
                        <a href="manufakturPage.php" class="dropDownWrap"><h4>Manufaktur</h4></a>
                        <a href="transportasiPage.php" class="dropDownWrap"><h4>Perjalanan & Transportasi</h4></a>
                        <a href="minyakGas.php" class="dropDownWrap"><h4>Minyak & Gas</h4></a>
                        <a href="telekomPage.php" class="dropDownWrap"><h4>Telekomunikasi, Media, & Teknologi</h4></a>
                    </div>
                </div>

            </div>
            <div class="sideContentContainer1">
                <h2>Artificial Intelligence</h2>
                <p>Kecerdasan buatan biasa disebut juga sebagai Artificial Intelligence atau A.I.
                    yang merupakan penerapan atau simulasi berdasarkan perlakuan manusia terhadap suatu sistem.
                    Artificial Intelligence ditujukan untuk dapat berpikir dan berperilaku layaknya
                    manusia sehingga dapat membantu memudahkan pekerjaan manusia.<br><br>

                    Keistimewaan dari A.I. yaitu kemampuannya untuk merasionalisasi dan mengambil
                    tindakan yang mempunyai peluang terbaik untuk mencapai tujuan tertentu.
                </p>
            </div>
            <div class="sideContentContainer2">
                <div class="descContainer">
                    <h2>A.I. di Lingkungan Sekitar Kita</h2>
                    <p>A.I. ada diseluruh aspek kehidupan masyarakat modern. Tanpa kita sadari, teknologi-teknologi dan aplikasi
                        yang kita gunakan sehari-hari telah menggunakan A.I. dalam pengaplikasikannya. Contohnya adalah membaca email,
                        rekomendasi musik, sosial media, dan sebagainya. <br>
                        Aplikasi-aplikasi yang marak dipakai seperti Twitter, Facebook, ataupun Instagram semua menggunakan A.I.
                        untuk meningkatkan kualitas aplikasinya. Penggunaan A.I. dapat membantu aplikasi-aplikasi tersebut
                        melakukan berbagai macam proses komputer kompleks secara optimal.
                    </p>
                </div>
                <div class="vidContainer">
                    <iframe class="vidContainer2" src="https://www.youtube.com/embed/n2rE7DW0qqk"></iframe>
                </div>
            </div>
            <div class="sideContentContainer3">
                <div class="descContainer">
                    <h2>Pengaruh A.I.</h2>
                    <p>Kehadiran Ai memudahkan kehidupan sehari hari kita.
                        Ai banyak membantu dalam bidang pekerjaan kita, AI memiliki pontensi untuk meningkatkan produktifitas,
                        efesiensi dan akurasi hampir di semua bidang.<br>
                        Penggunaan AI mampu meningkatkan kecerdasan manusia dan manusia pun bisa mendapatkan nilai yang nyata
                        dari data yang di hasilkan oleh AI.
                    </p>
                </div>
                <div class="vidContainer">
                    <iframe class="vidContainer2" src="https://www.youtube.com/embed/naPfusziGvA"></iframe>
                </div>
            </div>
        </div>
    </body>
</html>
