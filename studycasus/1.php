<?php
$nilai = 8;
$penentu = $nilai >= 75 ? "Kompeten" : "Belum Kompeten";
$color= $nilai >= 75 ? "green" : "red";

echo "Nilai : {$nilai} <span style = 'color:{$color}'> {$penentu} </span>";
?>

<?php
