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
                <h1>Minyak & Gas</h1>
                <p>Pengaplikasian teknologi A.I di bidang Minyak dan gas fokus pada pembelajaran mesin dan ilmu data. Pembelajaran mesin yang memungkinkan komputer untuk belajar dari interpretasi data tanpa harus ada input dari manusia dan penyempurnaan proses melalui iterasi untuk menghasilkan program yang tepat untuk mencapai tujuan tertentu. Hal ini tentunya diperlukan di bidang Minyak & Gas karena memungkinkan perusahaan untuk memantau operasi internal yang kompleks dan merespon kekhawatiran yang manusia tidak dapat deteksi secara cepat dan akurat.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI untuk minyak dan gas.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Minyak dan Gas</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=MS1QpPToh8c ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/MS1QpPToh8c/mqdefault.jpg">
                                    </div>
                                    <h2>CDL 1st Edition - Big Data Analytics dan AI Bantu Produksi Industri Energi Lebih Efisien </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=nQucxgfpUks ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/nQucxgfpUks/mqdefault.jpg">
                                    </div>
                                    <h2>Introducing Artificial Intelligence in the Oil and Gas Industry </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=UyJWDw7ppH8 ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/UyJWDw7ppH8/mqdefault.jpg">
                                    </div>
                                    <h2>How AI is Disrupting the Oil & Gas Industry </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://www.businesswire.com/news/home/20200424005472/en/Artificial-Intelligence-in-the-Oil-Gas-Industry-2020-2025---Upstream-Operations-to-Witness-Significant-Growth---ResearchAndMarkets.com ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk minyak dan gas, data.png">
                        <h2>Artificial Intelligence in the Oil & Gas Industry, 2020-2025 - Upstream Operations to Witness Significant Growth - ResearchAndMarkets.com </h2>
                        <p>The AI in Oil and Gas market was valued at USD2 billion in 2019 and is expected to reach USD3.81 billion by 2025, at a CAGR of 10.96% over the forecast period 2020-2025. As the cost of IoT sensors declines, more major oil and gas organizations are bound to start integrating these sensors into their upstream, midstream, and downstream operations along with AI-enabled predictive analytics.</p>
                    </button>
                </a>
                <a href=" https://www.offshore-technology.com/features/application-of-artificial-intelligence-in-oil-and-gas-industry/ ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/minyak2.jpg">
                        <h2>Exploring the impact of artificial intelligence on offshore oil and gas</h2>
                        <p>The offshore oil and gas industry has changed rapidly in recent years, with new technologies being adopted by the energy sector to meet the challenges of a digital economic landscape. Artificial intelligence is an exciting new technological field, but what uses could it have for oil and gas? Umar Ali explores the applications of artificial intelligence in the offshore oil and gas industry.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
