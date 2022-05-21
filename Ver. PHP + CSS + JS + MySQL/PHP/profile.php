<?php //tess
  session_start();
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
  else{
    header("Location: fPage.php");
    exit;
  }

  $id = $_COOKIE['key'];

  $user = query("SELECT * FROM users WHERE id = $id")[0];


//sss ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
        <link rel="stylesheet" href="../CSS/outline.css">
        <link rel="stylesheet" href="../CSS/editProfCSS.css">
        <script src="../JS/editProfJS.js"></script>

        <title>Check Profile page</title>
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

            <?php else : ?>
            <!--Normal-->
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
            <div class="profileContainer">
                <h1 id="profTitle">Profil Anda</h1>
                <div id="profPic">
                    <img src="../resources/fotoprofile/<?= $user["foto"];?>">
                </div>
            </div>
            <form class="contentForm">
                <label for="name">Nama</label><br>
                <input type="text" id="name" name="name" value="<?= $user["nama"];?>" disabled><br>
                <label for="name">Username</label><br>
                <input type="text" id="username" name="username" value="<?= $user["username"];?>" disabled><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="<?= $user["email"];?>" disabled><br>
                <button id="editButton"><a href="editprofile.php?id=<?= $id;?>">Edit Profil</a></button>
                <button id="editButton"><a href="editpassword.php?id=<?= $id;?>">Edit Password</a></button>
            </form>
        </div>
    </body>
</html>
