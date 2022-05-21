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
                <h1>Pertanian</h1>
                <p>Penerapan AI di bidang pertanian sudah mulai sering ditemui. AI dengan machine learningnya dapat menganalisa untuk meningkatkan produksi dan keberlanjutan dengan mengurangi risiko dalam aktivitas fisik yang teralu banyak dilakukan oleh petani. Pemanfaatan data telah membantu petani untuk memutuskan kapan harus mulai menanam, kapan bisa mulai panen, jenis tanaman apa yang cocok untuk ditanam, berapa banyak pupuk dan bahan kimia yang perlu digunakan, serta seberapa sering harus mengairi ladang. </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam pertanian.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Pertanian</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=KpZMEU9wIb8">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/KpZMEU9wIb8/mqdefault.jpg">
                                    </div>
                                    <h2>5 Uses of AI in Agriculture! - 5 Mins 5 Ideas</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=qOGsz-rUx6E">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/qOGsz-rUx6E/mqdefault.jpg">
                                    </div>
                                    <h2>How Singapore Farms Use Artificial Intelligence</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=LRq0wqt7b7E">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/LRq0wqt7b7E/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence for Agriculture - 10 min - easily explained – AIA</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://infokomputer.grid.id/read/122290666/contoh-penerapan-artificial-intelligence-dan-cloud-di-bidang-pertanian?page=all">
                    <button class="linkPreview">
                        <img src="../resources/Assets/pertanian1.jpg">
                        <h2>Contoh Penerapan Artificial Intelligence dan Cloud di Bidang Pertanian</h2>
                        <p>Contoh penerapan Artificial Intelligence (AI) di bidang pertanian mulai jamak ditemui. Perusahaan robotika FJ Dynamics menerapkan AI untuk mentransformasikan pertanian tradisional dengan kekuatan data.</p>
                    </button>
                </a>
                <a href="https://www.medcom.id/ekonomi/ nalisa-ekonomi/ybJV244b-babak-baru-implementasi-ai-pertanian#:~:text=Melalui%20penerapan%20AI%2C%20petani%20dapat,produsen%2C%20maupun%20konsumen%20hasil%20pertanian.">
                    <button class="linkPreview">
                        <img src="../resources/Assets/pertanian2.jpg">
                        <h2>Babak Baru Implementasi AI Pertanian</h2>
                        <p>PEMANFAATAN teknologi merupakan keniscayaan bagi upaya peningkatan produksi pertanian di Indonesia, terutama dalam konteks mutu dan daya saing. Ketersediaan inovasi teknologi juga merupakan salah satu kunci peningkatan kesejahteraan petani dan menarik minat generasi muda dalam menciptakan aneka peluang bisnis turunan.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
