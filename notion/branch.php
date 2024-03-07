<?php
// $true = true;
// var_dump($true);

    // if ($true){
    //     echo "Dia benar";
    // }

// $nilai = 50;
//     if (nilai > 70) {
//         echo "Selamat anda lulus!";
//     } else {
//         echo " KUDU BELAJAR BRO, SEMANGAT";
//         echo "<br>";
//     }

// echo $nilai > 70 ? "selamat anda lulus!" : "Mohon maaf, anda harus coba lagi"; ternary

	// $nilai = 45;
	// echo "Variable tersebut bernilai : {$nilai} <br>";
	
	// if ($nilai >= 50){
	//   echo "GOOD JOB !";
	// }elseif( $nilai >= 45 && $nilai < 50){
	//   echo "Jangan Menyerah !";
	// }else{
	//   echo "Coba Lagi !";
	// }

$url = '/about';

    switch ($url) {
    case '/':
        echo 'Selamat datang di dashboard.';
        break;
    case '/about':
        echo 'Selamat datang di halaman ini.';
        break;
    case '/contact':
        echo 'Selamat datang di halaman kontak.';
        break;
    default:
        echo 'Maaf halaman yang anda cari tidak ditemukan.';
    }

    echo '<br>';
?>