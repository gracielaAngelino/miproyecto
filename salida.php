<?php

session_start();
  session_destroy();
  header("Location: login.php");
  

echo '<script type="text/javascript">
        alert("Sesion cerrada");
        window.location.href="index.php?open=login.php";
        </script>';
        exit;
        ?>
