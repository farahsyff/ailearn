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
                <h1>Bisnis</h1>
                <p>AI merupakan pilihan yang paling mudah diakses bagi startup dan merek-merek kecil yang ingin menjangkau komunitas lokal.  AI tidak hanya membantu mengoptimalkan keyword campaign, performa situs dan tag yang relevan, tetapi juga menghemat biaya dari yang biasanya dikeluarkan. Dengan kecanggihan AI dalam mempelajari perilaku konsumen dan mengadaptasinya ke dalam bentuk pesan dan gambar paling menarik sudah semakin baik saja. AI juga dapat secara teratur memperbarui dan mengoptimalkan iklan untuk mendorong kunjungan serta keterlibatan dari audiens yang Anda targetkan. Perangkat seperti ini sudah menjadi startegi inti dari agensi digital dan publisis, dan kini juga sudah bisa dimanfaatkan oleh bisnis skala kecil dan menengah. </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam bisnis 2.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Bisnis</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=hYoRMqkN_TI">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/hYoRMqkN_TI/mqdefault.jpg">
                                    </div>
                                    <h2>Big Data and AI in Small Business</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=N_eHmaRf9T4">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/N_eHmaRf9T4/mqdefault.jpg">
                                    </div>
                                    <h2>How to Apply AI in Business</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=mz4eyl0mC7A">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/mz4eyl0mC7A/mqdefault.jpg">
                                    </div>
                                    <h2>How Artificial Intelligence is Transforming Business</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://ofiskita.com/articles/detail/peran-ai-dalam-memajukan-bisnis">
                    <button class="linkPreview">
                        <img src="../resources/Assets/binisimg1.jpg">
                        <h2>Peran AI dalam Memajukan Bisnis</h2>
                        <p>Cara terbaik untuk menguji teknologi baru adalah dengan mengimplementasikannya langsung di lapangan, khususnya dalam berbisnis. Integrasi artificial intelligence ke dalam strategi marketing bisnis akan membantu Anda untuk dapat terus berkompetisi dengan pelaku bisnis lainnya. Terutama untuk bisnis kecil menengah agar belajar dari perusahaan besar yang sudah memanfaatkan teknologi AI.</p>
                    </button>
                </a>
                <a href="https://www.karyaone.co.id/blog/artificial-intelligence-dalam-bisnis/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/bisnisimg2.jpg">
                        <h2>Contoh Penerapan Artificial Intelligence Dalam Bisnis</h2>
                        <p>Artificial Intelligence adalah hal yang ditakutkan oleh manusia di satu sisi tapi juga memberikan banyak manfaat di sisi lain.
                            Dalam kehidupan sehari-hari dan dalam dunia bisnis terutama, artificial intelligence memberikan banyak keuntungan, seperti yang akan kita bahas nanti dalam artikel ini.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
