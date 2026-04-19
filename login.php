<?php
session_start();
include '../config/database.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();
    
    if($user) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin UMKM Depok</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login Admin Desa Depok</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>