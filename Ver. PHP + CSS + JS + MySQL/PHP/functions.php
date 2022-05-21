<?php
  //koneksi ke database
  //$conn = mysqli_connect("sql203.epizy.com", "epiz_28868095", "Ct3XP0q1fWSgMa", "epiz_28868095_ailearn");
  $conn = mysqli_connect("localhost", "root", "root", "ailearn");

  function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  function daftar($data){
    global $conn;

    $nama = htmlspecialchars(stripslashes(mysqli_real_escape_string($conn, $data["nama"])));
    $username = htmlspecialchars(strtolower((stripcslashes($data["username"]))));
    $email = htmlspecialchars($data["email"]);
    $password  = mysqli_real_escape_string($conn, $data["password"]);
    $password2  = mysqli_real_escape_string($conn, $data["password2"]);
    $foto = "profile.png";

    $result = mysqli_query($conn, "SELECT username FROM users
      WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
      echo "<script>
        alert('Username sudah terdaftar!')
      </script>";
      return false;
    }

    $result2 = mysqli_query($conn, "SELECT email FROM users
      WHERE email = '$email'");

      if(mysqli_fetch_assoc($result2)){
        echo "<script>
          alert('Email sudah terdaftar!')
        </script>";
        return false;
      }

    if($password !== $password2){
      echo "<script>
        alert('Konfirmasi password tidak sesuai!';)
      </script>";
      return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users
      VALUES('0', '$nama', '$username', '$email',
        '$password', '$foto')");

    return mysqli_affected_rows($conn);
  }

  function cari($keyword){
    $query = "SELECT * FROM materi WHERE
              judul LIKE '%$keyword%' OR
              definisi LIKE '%$keyword%'
              ";
    return query($query);
  }

  function tambah($data){
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $bidang = $data["bidang"];
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);


    if($bidang === 0){
      return false;
    }

    //query insert data
    $query = "INSERT INTO forum VALUES('0', '$id', '$bidang', '$judul', '$isi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function tambahkomen($data){
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id_forum = $data["id_forum"];
    $id_user = $data["id_user"];
    $isi = htmlspecialchars($data["komentar"]);

    //query insert data
    $query = "INSERT INTO komen VALUES('0', $id_forum, $id_user, '$isi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function uploadfoto(){

    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];


    //cek apakah tidak ada gambar yang diupload
    if($error === 4){
      echo "<script>
        alert('pilih gambar terlebih dahulu!');
       </script>";
       return false;
    }

    //cek apakah yang diuplaod adalah gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if(!in_array($ekstensigambar, $ekstensigambarvalid)){
      echo "<script>
        alert('yang anda upload bukan gambar!');
       </script>";
       return false;
    }

    //cek jika ukurannya terlalu besar
    if($ukuranfile > 3000000){
      echo "<script>
        alert('ukuran foto terlalu besar!');
       </script>";
       return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensigambar;
    move_uploaded_file($tmpname, '../resources/fotoprofile/' . $namaFileBaru);

    return $namaFileBaru;
  }

  function ubahprofile($data){
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $fotolama = htmlspecialchars($data["fotolama"]);

    if($_FILES['foto']['error'] === 4){
      $foto = $fotolama;
    }else {
      $foto = uploadfoto();
    }

    if($foto === false){
      return false;
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE
    id = '$id'");

    $row = mysqli_fetch_assoc($result);
    if(!password_verify($password, $row["password"])){
      return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);


    //query insert data
    $query = "UPDATE users SET
                nama = '$nama',
                username = '$username',
                email = '$email',
                password = '$password',
                foto = '$foto'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }


  function ubahpassword($data){
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $password3 = mysqli_real_escape_string($conn, $data["password3"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $foto = htmlspecialchars($data["fotolama"]);

    if($password1 !== $password2){
      echo "<script>
        alert('konfirmasi password tidak sesuai!');
      </script>";
      return false;
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE
    id = '$id'");

    $row = mysqli_fetch_assoc($result);
    if(!password_verify($password3, $row["password"])){
      echo "<script>
        alert('password tidak sesuai!');
      </script>";
      return false;
    }


    $password1 = password_hash($password1, PASSWORD_DEFAULT);


    //query insert data
    $query = "UPDATE users SET
                nama = '$nama',
                username = '$username',
                email = '$email',
                password = '$password1',
                foto = '$foto'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
 ?>
