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
                <h1>Telekomunikasi, Media, & Teknologi</h1>
                <p>Bidang ini memanfaatkan teknologi dari A.I. untuk memproses serta menganalisis big data agar terus menyediakan pengalaman pengguna yang lebih baik, meningkatkan operasional, dan meningkatkan pendapatan melalui produk dan jasa yang baru. A.I. digunakan untuk membantu operator dalam mengoptimalkan kualitas jaringan berdasarkan informasi traffic dari negara dan zona waktu dan inisiatif memperbaiki jaringan mereka sebelum pengguna mengalami pengalaman yang buruk, asisten virtual yang membantu layanan customer, dan Robotic Process Automation (RPA).</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam telekomunikasi, media, teknologi.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I dalam Telekomunikasi, Media, dan Teknologi</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=cMFhap8eZNo">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/cMFhap8eZNo/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence and Telecommunications </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=l1WUoVQXtQo">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/l1WUoVQXtQo/mqdefault.jpg">
                                    </div>
                                    <h2>The state of AI in the telecom industry</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=ZL50DmyFHHQ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/ZL50DmyFHHQ/mqdefault.jpg">
                                    </div>
                                    <h2>Empowering Telecoms with Artificial Intelligence - COMARCH </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://techsee.me/blog/artificial-intelligence-in-telecommunications-industry/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/tele1.jpg">
                        <h2>4 Ways AI Is Transforming the Telecom Industry</h2>
                        <p>The use of AI in telecom is increasingly popular – and it’s easy to see why. In this article, we’ll discuss the four main applications of AI in telecommunications.</p>
                    </button>
                </a>
                <a href="https://www.conversica.com/resources/data-sheets/why-the-telecom-industry-needs-intelligent-virtual-assistants/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/tele2.jpg">
                        <h2>Why the Telecom Industry Needs Intelligent Virtual Assistant</h2>
                        <p>Intelligent Virtual Assistants are the next generation of Intelligent Automation helping telecommunications companies scale human interactions that attract, acquire, and grow customers. This telecommunications solution brief from Conversica describes how Intelligent Virtual Assistants accelerate revenue across the customer lifecycle; from engaging leads in two-way, human-like conversations at scale to retaining and growing customers.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
