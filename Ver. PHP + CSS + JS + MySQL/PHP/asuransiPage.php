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
                <h1>Asuransi</h1>
                <p>Penggunaan AI di asuransi biasa membantu perusahaan asuransi untuk menganalisa berbagai hal.
                    Salah satu contoh penerapan AI di bidang asuransi adalah memproses kerusakan pada sebuah
                    kendaraan dengan menggunakan teknologi computer vision untuk meneliti foto-foto kerusakan
                    pada kendaraan secara langsung(real time). Di contoh ini AI digunakan untuk memahami
                    berbagai keputusan perbaikan yang tersedia untuk klien tersebut, seperti rekomendasi
                    perbaikan, cat, dan jumlah jam kerja untuk memperbaiki kendaraan tersebut. Penerapan
                    AI ini akan mempercepat proses perusahaan asuransi memahami dari jarak jauh apa yang terjadi
                    pada kendaraan itu. Dengan cara ini perusahaan asuransi bisa membuat kesepakatan
                    tentang perbaikan dengan lebih lebih cepat.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam Asuransi 2.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Asuransi</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=dWhyMA1b4U8">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/dWhyMA1b4U8/mqdefault.jpg">
                                    </div>
                                    <h2>How A.I. Is Transforming the Insurance Industry</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=LkR7AOX3BBc">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/LkR7AOX3BBc/mqdefault.jpg">
                                    </div>
                                    <h2>The power and potential of AI in insurance claims</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=b9sqaoDAIUI">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/b9sqaoDAIUI/mqdefault.jpg">
                                    </div>
                                    <h2>AI in Insurance - How to Automate Insurance Claim Processing with Machine Learning?</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://katadata.co.id/desysetyowati/digital/5f33a0a724dcc/teknologi-ai-bantu-perusahaan-asuransi-ukur-premi-uang-pertanggungan?__cf_chl_jschl_tk__=0eb21b73caab691335e080882423e641897d7237-1623509524-0-AahzLZSy9zp_LKx4WLOkVD6VuEPWg8Oksu68qvsQPNw0Serf-sYq3OZNZ-H9qKn9U9JelMQJhThxBXiWOvtowc8BBidP1NeAPZC5Jl2c0tduDP47QiN3X6GkE5n42U1clTesdNHAtCVkAzObwVQBYN157TJt-pPWYeR0kbgg_fg6mNTclkKnEdgtwdnpT4REz5ypRK7yXw1ObkHLdPZlkaK01ewAYWtffTOybMcOI6TocnUq7ecUdMLuHW15oA7KyxSKPyIl01d38i7PjdkCGLkLr25U2_GIZ7khXH0hJhS_KtcAn2FVfcXi2E8fVgAGZaFUlEe5_ORBI3T98c_g3VmeFXDZ43sbJlprhsb6tB5tEv1R1jK38IZht_r8-F1vTuhNnz3aRz06sVrPcPRxMFyaFsFtlFQoN5TDub0376ulGyhJabzoLtBy7IXCmjsFWGOH4L7KQPVxU41ZQXwwxfiqoSr4u3bdJR2cQCaKpJ0IBYfpXe1FLB-eDx1RQJArPgGt83VDq6cYOPU1reQpwEc">
                    <button class="linkPreview">
                        <img src="../resources/Assets/asuransiarticle.jpg">
                        <h2>Teknologi AI Bantu Perusahaan Asuransi Ukur Premi & Uang Pertanggungan</h2>
                        <p>Teknologi AI bisa menganalisis kebiasaan merokok seseorang, sehingga membantu perusahaan asuransi mengukur besaran premi dan uang pertanggungan</p>
                    </button>
                </a>
                <a href="https://infokomputer.grid.id/read/122141500/contoh-penerapan-artificial-intelligence-di-perusahaan-asuransi">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk asuransi.jpg">
                        <h2>Contoh Penerapan Artificial Intelligence di Perusahaan Asuransi</h2>
                        <p>Contoh penerapan Artificial Intelligence (AI) di perusahaan asuransi Tokio Marine dapat menjadi referensi.
                            Contoh penerapan AI berupa solusi auto damage assessment ini baru pertama kalinya diimplementasikan oleh sebuah perusahaan asuransi besar di Jepang.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
