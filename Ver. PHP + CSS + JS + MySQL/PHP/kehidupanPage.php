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
                <h1>Ilmu Kehidupan</h1>
                <p>Teknologi AI yang merupakan pembelajaran mesin dan pembelajaran mendalam, mengizinkan komputer untuk belajar tanpa perlu diprogram terus-menerus. Teknologi seperti inilah yang dibutuhkan di bidang Ilmu Kehidupan, seperti menyortir berbagai macam jenis sel kanker di lab.
                    Salah satu bidang ilmu pengetahuan yang sangat dipengaruhi oleh teknologi A.I. adalah analisis gambar. Jika biasanya yang mengukur fitur, seperti tekstur organel dan kualitas ruang kosong dalam sel adalah para ilmuwan, hal tersebut sekarang dapat dilakukan oleh perangkat lunak A.I. secara otomatis. Selain itu, dengan cara mengukur karakteristik sel yang tidak biasa, AI dapat menangkap lebih banyak informasi yang belum pernah dimanfaatkan.
                    Sementara AI yang memiliki kemampuan melebihi ilmuwan manusia di bidangnya, mereka lebih cenderung mengambil alih tugas-tugas tertentu daripada mengambil peran profesional Ilmu Kehidupan.
                    </p>
            </div>
            <div id="content1B">
                <img id="image1" src="../resources/Assets/AI untuk ilmu kehidupan.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Ilmu Kehidupan</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=wC9NBo7NnlQ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/wC9NBo7NnlQ/mqdefault.jpg">
                                    </div>
                                    <h2>The Importance of AI in life sciences </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=Y74h6DQAlPY">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/Y74h6DQAlPY/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence in Biotechnology | How AI is revolutionizing Biotech </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=XyZa2mFaTWs ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/XyZa2mFaTWs/mqdefault.jpg">
                                    </div>
                                    <h2>Webinar: AI in Life Sciences: What's working, what's not, and what's next? </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://www.biostock.se/2020/05/the-applications-of-ai-in-life-science/#:~:text=Artificial%20Intelligence%20is%20having%20a,up%20their%20drug%20discovery%20projects ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/kehidupan1.jpg">
                        <h2>The applications of AI in life science</h2>
                        <p>Artificial Intelligence is having a big impact on the life science sector. Diagnosing and treating patients is becoming more effective thanks to AI, and pharma companies are relying on the up-and-coming technology to speed up their drug discovery projects. In this second article in BioStock’s article series on AI, we take a closer look at the general impact of AI in life science.</p>
                    </button>
                </a>
                <a href="https://www.lek.com/sites/default/files/insights/pdf-attachments/2060-AI-in-Life-Sciences.pdf ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk ilmu kehidupan 2.png">
                        <h2>Artificial Intelligence in Life Sciences: The Formula for Pharma Success Across the Drug Lifecycle</h2>
                        <p>Artificial intelligence (AI) has the potential to
                            transform the pharmaceutical industry. Each of the
                            major pharma players is investing in the technology
                            at some level, and there are a growing number of
                            applications that address target and drug discovery,
                            preclinical and clinical development, and postapproval activities. With AI comes the potential to
                            improve drug approval rates, reduce development
                            costs, get medications to patients faster and help
                            patients comply with their treatments. </p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
