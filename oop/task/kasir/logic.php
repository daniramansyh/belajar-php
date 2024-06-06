<?php
session_start();

if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $hargaBarang = $_POST['hargaBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];

    $data = array(
        'barang' => $barang,
        'hargaBarang' => $hargaBarang,
        'jumlahBarang' => $jumlahBarang,
    );

    $_SESSION['data'][] = $data;

    header('Location: index.php');
    exit();
}

$totalHarga = 0;
foreach ($_SESSION['data'] as $key => $data){
    $total = $data['hargaBarang'] * $data['jumlahBarang'];
    $totalHarga += $total;
};
