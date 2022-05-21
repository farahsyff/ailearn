<?php
  session_start();
  $_SESSION = [];
  session_unset();
  session_destroy();

  setcookie('key', '', time()-3600);
  setcookie('key2', '', time()-3600);

  header("Location: fPage.php");
  exit;
 ?>
