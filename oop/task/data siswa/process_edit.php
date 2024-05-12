<?php
session_start();

if(isset($_POST['submit'])) {
    $key = $_POST['key'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $rayon = $_POST['rayon'];

    if(isset($_SESSION['siswa'][$key])) {
        $_SESSION['siswa'][$key]['nama'] = $nama;
        $_SESSION['siswa'][$key]['nis'] = $nis;
        $_SESSION['siswa'][$key]['rayon'] = $rayon;
    }

    header('Location: index.php');
    exit();
}

