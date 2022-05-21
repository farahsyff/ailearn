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
                <h1>Perjalanan dan Transportasi</h1>
                <p>Mobil dengan kemudi otomatis merupakan salah satu pengaplikasian Artificial Intelligence di bidang Perjalanan & Transportasi. Penemuan tersebut ditujukan untuk menangani empat permasalahan lalu lintas, yaitu kemacetan, pengeluaran perbaikan dan biaya operasional, emisi gas, dan keamanan penumpangnya.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam transportasi.jpeg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Transportasi</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=IoIB0lGKKSw">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/IoIB0lGKKSw/mqdefault.jpg">
                                    </div>
                                    <h2>Transforming Transportation with AI | I AM AI </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=LkR7AOX3BBc">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/LkR7AOX3BBc/mqdefault.jpg">
                                    </div>
                                    <h2>Transportation - Traffic Management with AI from Advantech </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=HIuoK7vdS8c">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/HIuoK7vdS8c/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence in Public Transport - Highlights </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://www.altexsoft.com/ai-in-transportation/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/transport1.jpg">
                        <h2>Artificial Intelligence in Transportation</h2>
                        <p>The safety of passengers, pedestrians, and drivers has always been the number one concern for the transportation industry. Taking advantage of AI models does far more than decrease the number of human errors; transportation analytics assists in minimizing effects of driving hazards in crowded urban areas, while also monitoring safety regulation compliance and vehicle maintenance reports.</p>
                    </button>
                </a>
                <a href="https://www.forbes.com/sites/cognitiveworld/2019/07/26/how-ai-can-transform-the-transportation-industry/?sh=701c26949640">
                    <button class="linkPreview">
                        <img src="../resources/Assets/transport2.jpg">
                        <h2>How AI Can Transform The Transportation Industry</h2>
                        <p>Transportation, the industry that deals with the movement of commodities and passengers from one place to another, has gone through several studies, researches, trials, and refinements to reach where it is now. One of the major milestones in the history of transportation was the steamboat in the year 1787. Prior to this, people relied on animal-drawn carts for their commute. Thereafter, major breakthroughs that led to the growth of the transportation industry were the invention of bicycles (early 19th century), motor cars (in the 1890s), trains (19th century), and aircrafts (1903).</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
