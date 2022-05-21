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
                <h1>Kasino</h1>
                <p>Penggunaan Teknologi A.I. di industri perjudian sangat bermanfaat dalam hal memastikan efisiensi, pengalaman yang lebih baik, dan keadilan. Salah satu sektor di industri perjudian yang dibantu oleh teknologi A.I. adalah Customer Service.
                    Customer service dan support merupakan sektor penting dalam online casinos, karena inilah kasino menyediakan Chatbots. Chatbots merupakan program A.I. yang mengizinkan klien melakukan percakapan baik melalui teks maupun lisan. Program ini dibuat seakan-akan klien sedang melakukan percakapan dengan orang lain bukannya sebuah sistem. Hal ini memiliki tujuan agar klien merasakan pengalaman yang lebih otentik.
                    </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI untuk kasino 2.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Anasis A.I. dalam Kasino</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=y7aOJQcqlqQ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/y7aOJQcqlqQ/mqdefault.jpg">
                                    </div>
                                    <h2>Facial recognition and AI coming to Vegas casinos </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=jLXPGwJNLHk ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/jLXPGwJNLHk/mqdefault.jpg">
                                    </div>
                                    <h2>How AI beat the best poker players in the world | Engadget R+D </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=1-vu__DPlsY">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/1-vu__DPlsY/mqdefault.jpg">
                                    </div>
                                    <h2>A.I. LEARNS to Play Blackjack</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://zephyrnet.com/id/bagaimana-kecerdasan-buatan-dapat-membawa-kasino-online-ke-level-berikutnya/ ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/kasino1.png">
                        <h2>Bagaimana Kecerdasan Buatan Dapat Membawa Kasino Online ke Tingkat </h2>
                        <p>In Mei 1997, Deep Blue IBM bersaing dengan Garry Kasparov. Komputer mengalahkan master catur. Menjadi jelas: kecerdasan buatan dapat melampaui batas pikiran manusia, tidak peduli betapa jeniusnya itu. Jelas bahwa AI akan menjadi aspek yang tak terhindarkan dari semua </p>
                    </button>
                </a>
                <a href="https://tfetimes.com/how-ai-chatbot-data-is-helping-casinos-customise-their-players-needs/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/kasino2.jpg">
                        <h2>How AI Chatbot Data is Helping Casinos Customise Their Player’s Needs</h2>
                        <p>Customer support in Portugal is a key aspect of any great casino experience, whether it is a traditional brick and mortar location or an online casino.
                            Guest author from Portugal Martim Nabeiro (read more about author) discusses how AI chatbot data is assisting casinos to deliver a higher customer experience to their players.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
