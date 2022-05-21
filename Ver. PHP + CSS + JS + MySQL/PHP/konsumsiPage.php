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

          <a class="ytLink" href="https://www.instagram.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

        </div>
        <div class="gridContainer">
            <div id="content1A">
                <h1>Konsumsi</h1>
                <p>kemampuan analisa data yang dimiliki oleh teknologi AI juga bisa digunakan untuk memperkirakan penjualan di masa depan dengan menggunakan data tren yang berkembang serta data perilaku konsumen. AI akan memanfaatkannya untuk mempromosikan produk pada calon konsumen. Data perilaku konsumen juga dipakai di fitur RFQ (A Request For Quotation) yang akan memberikan pemberitahuan pada konsumen yang sedang mencari suatu barang mengenai barang tersebut di berbagai platform e-commerce, sehingga konsumen dimudahkan dalam menemukan barang yang dicari itu.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam barang konsumsi.png" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Konsumsi</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=GoOgOGkFpIU">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/GoOgOGkFpIU/mqdefault.jpg">
                                    </div>
                                    <h2>Powered by AI: Engineering new shopping experiences</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=fKX5igoT0yI">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/fKX5igoT0yI/mqdefault.jpg">
                                    </div>
                                    <h2>How AI Can Elevate The Consumer Shopping Experience</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=77zeIQ_drIE">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/77zeIQ_drIE/mqdefault.jpg">
                                    </div>
                                    <h2>How To Predict Consumer Behavior Using AI Marketing</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://ids.ac.id/7-peran-artificial-intelligence-dalam-bidang-marketing-di-masa-depan/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/konsumsi1.jpg">
                        <h2>Peran Artifical Intelligence dalam bidang marketing di masa depan</h2>
                        <p>Bayangkan saja, di masa kini kita sudah sangat banyak dimudahkan dengan adanya campur tangan AI (Artificial Intelligence) dalam kehidupan pekerjaan atau kehidupan sehari-hari. Kamu bisa menemukan AI dimana saja, mulai dari bidang kesehatan, ekonomi, media hingga pemerintahan. Teknologi AI memiliki banyak keunggulan yang mampu memudahkan manusia dalam menjalankan suatu pekerjaan.</p>
                    </button>
                </a>
                <a href="https://www.medcom.id/teknologi/news-teknologi/JKRAXM8k-mengulas-penerapan-ai-dalam-mempelajari-kebiasaan-konsumen#:~:text=Mengulas%20Penerapan%20AI%20dalam%20Mempelajari%20Kebiasaan%20Konsumen.%20Jakarta%3A,kunci%20untuk%20menjawab%20berbagai%20kebutuhan%20dalam%20menjangkau%20konsumen.">
                    <button class="linkPreview">
                        <img src="../resources/Assets/konsumsi2.png">
                        <h2>Contoh Penerapan Artificial Intelligence di Perusahaan Asuransi</h2>
                        <p>Beberapa fitur dan inovasi Tokopedia yang telah memanfaatkan teknologi AI adalah fitur ChatBot untuk layanan Tokopedia Care, Intelligent Search, TokoCabang, serta Fast Recommendations terhadap lebih dari 350 juta produk yang sesuai dengan minat dari setiap pengguna Tokopedia.
                            "Kecerdasan buatan adalah teori dan perkembangan dari sebuah sistem komputer yang mampu melakukan hal-hal yang biasanya memerlukan kemampuan dan otak manusia. AI sendiri terbagi kedalam beberapa stream, yaitu Robotics, machine learning, computer vision, natural language processing, knowledge representation, dan recommendation system," ujar Irvan, dikutip dari laman Tokopedia, pada konferensi teknologi beberapa waktu lalu.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
