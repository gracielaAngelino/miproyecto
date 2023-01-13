<?php
/* *
if (empty($_SESSION['SES_ADMIN'])) {
    include_once "index.php";
    exit;
}
/* */

if (empty($_SESSION)) {
    header('Location: login.php');
    exit;
}
