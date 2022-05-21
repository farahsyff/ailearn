<?php //tess
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
        <link rel="stylesheet" href="../CSS/articlePageCSS.css">
        <script src="../JS/articlePageJS.js"></script>
        <script src="../external/slidePlugin.js"></script>
        <link rel="stylesheet" href="../external/slidePlugin.css">
        <script src="../external/videoPlugin.js"></script>
        <link rel="stylesheet" href="../external/videoPlugin.css">

        <title>asuransi page</title>
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
            <div id="content1A">
                <h1>Pemasaran</h1>
                <p>Pada bidang ini, A.I. digunakan agar tim pemasaran atau marketing mampu memprediksikan hal-hal yang akan dilakukan pelanggan, meningkatkan kepuasan pengalaman pelanggan, dan melihat peluang bisnis dengan memanfaatkan data pelanggan dan konsep machine learning. A.I. juga memudahkan tim pemasaran dalam mengolah banyaknya data yang berasal dari pelanggan. Salah satu penggunaannya yaitu dengan adanya Chatbots yang membantu melayani sejumlah pelanggan dalam waktu singkat.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI untuk pemasaran.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Pemasaran</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=c5RZDSyEhCk">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/c5RZDSyEhCk/mqdefault.jpg">
                                    </div>
                                    <h2>Peran Artificial Intelligence dalam dunia marketing masa depan </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=Ra_yTQnhf_8 ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/LkR7AOX3BBc/mqdefault.jpg">
                                    </div>
                                    <h2>A.I. for Marketing & Growth - Where do I start? </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=xAB8fvMQzSI">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/xAB8fvMQzSI/mqdefault.jpg">
                                    </div>
                                    <h2>What is Artificial Intelligence in Marketing </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=6XfvBb2L01Q">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/6XfvBb2L01Q/mqdefault.jpg">
                                    </div>
                                    <h2> Artificial Intelligence and Marketing: The Future Is Here </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://ids.ac.id/7-peran-artificial-intelligence-dalam-bidang-marketing-di-masa-depan/ ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/pemasaran1.jpg">
                        <h2>7 Peran Artificial Intelligence dalam Bidang Marketing di Masa Depan </h2>
                        <p>Bayangkan saja, di masa kini kita sudah sangat banyak dimudahkan dengan adanya campur tangan AI (Artificial Intelligence) dalam kehidupan pekerjaan atau kehidupan sehari-hari. Kamu bisa menemukan AI dimana saja, mulai dari bidang kesehatan, ekonomi, media hingga pemerintahan. Teknologi AI memiliki banyak keunggulan yang mampu memudahkan manusia dalam menjalankan suatu pekerjaan.</p>
                    </button>
                </a>
                <a href="https://bbs.binus.ac.id/gbm/2019/07/17/peran-artificial-intelligence-dalam-dunia-pemasaran/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk pemasaran 2.jpg">
                        <h2>Peran Artificial Intelligence dalam Dunia Pemasaran </h2>
                        <p>Fenomena globalisasi digital telah mengubah lanskap pemasaran. Melalui mesin pencari dan media sosial, masyarakat kini bisa menemukan berbagai hal dalam waktu cepat. Platform digital yang dibombardir dengan banyak data mengakibatkan pemasar dapat memperoleh pengetahuan yang sangat dibutuhkan mengenai perilaku dan interaksi pelanggan yang kompleks  pada berbagai produk, layanan, konten, dan kampanye dalam pemasaran.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
