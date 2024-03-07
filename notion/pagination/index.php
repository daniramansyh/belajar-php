<?php

echo "INI HOME ";
echo "<br>";

$ambilHalaman = $_GET ['page'];
switch ($ambilHalaman) {
    case 'yana':
        include 'yana.php';
        break;
    default:
    echo "Bapak mu Yana";
        break;
}
?>