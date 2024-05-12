<?php
session_start();

if(isset($_GET['key'])) {
    $key = $_GET['key'];
    if(isset($_SESSION['siswa'][$key])) {
        $siswa = $_SESSION['siswa'][$key];
    } else {
        echo "Siswa tidak ditemukan!";
        exit();
    }
} else {
    echo "Parameter tidak valid!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form method="post" action="process_edit.php">
        <input type="hidden" name="key" value="<?php echo $key; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama']; ?>" required>
        <label for="nis">NIS:</label>
        <input type="text" name="nis" id="nis" value="<?php echo $siswa['nis']; ?>" required>
        <label for="kelas">Rayon:</label>
        <input type="text" name="rayon" id="rayon" value="<?php echo $siswa['rayon']; ?>" required>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>
</body>
</html>