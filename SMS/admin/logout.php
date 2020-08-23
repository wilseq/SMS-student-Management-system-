<?php

    session_start();
    unset($_SESSION['uid']); //destroys session
    header('location:../login.php')
  //  echo "Loged out";
 ?>
