<?php

session_start();

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
      header('Location: error.html');
      exit();
}


if($_GET['password']=='John Cena') header('location: endpage.html');
else header('location: final_index10.html');

?>