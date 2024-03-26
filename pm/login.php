<?php
session_start();

// Data pengguna yang valid
$valid_user = 'Dani';
$valid_password = '12309742';
// Batasan percobaan login
$attempt_limit = 3;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    if ($username === $valid_user && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location:http://xetaaa.free.nf/open.php'); // Redirect ke halaman index setelah login sukses
        exit;
    } else {
        // Menghitung percobaan login
        $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;
        $remaining_attempts = $attempt_limit - ($_SESSION['login_attempts'] ?? 0);
        // Jika melebihi batasan, mencegah login
        if ($remaining_attempts <= 0) {
            $error_message = 'Percobaan login terlalu banyak. Coba lagi nanti.';
        } else {
            $error_message = "Username atau password salah. Sisa percobaan login: 
            $remaining_attempts.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if (isset($error_message)): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>