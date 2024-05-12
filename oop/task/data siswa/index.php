<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <form method="post" action="process.php">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <label for="nis">NIS:</label>
    <input type="text" name="nis" id="nis" required>
    <label for="rayon">Rayon:</label>
    <input type="text" name="rayon" id="rayon" required>
    <button type="submit" name="submit">Tambah Siswa</button>
</form>

    <ul>
        <?php if(isset($_SESSION['siswa'])): ?>
            <?php foreach($_SESSION['siswa'] as $key => $siswa): ?>
                <li>
                    Nama: <?php echo $siswa['nama']; ?> | 
                    NIS: <?php echo $siswa['nis']; ?> |
                    Rayon: <?php echo $siswa['rayon']; ?> |
                    <a href="edit.php?key=<?php echo $key; ?>">Edit</a> |
                    <a href="hapus.php?key=<?php echo $key; ?>">Hapus</a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>
