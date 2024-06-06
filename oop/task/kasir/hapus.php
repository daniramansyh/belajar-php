<?php
session_start();

if(isset($_GET['key'])) {
    $key = $_GET['key'];
    if(isset($_SESSION['data'][$key])) {
        unset($_SESSION['data'][$key]);
    }
}

header('Location: index.php');
exit();