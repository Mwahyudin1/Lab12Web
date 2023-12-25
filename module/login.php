<?php
session_start();

$title = 'Data Barang';
include_once '../class/koneksi.php';

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '{$user}' AND password = md5('{$password}')";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = mysqli_fetch_array($result);

        header('location: ../module/artikel/index.php');
        exit;
    } else {
        $_SESSION['errorMsg'] = "<p class='error'>Gagal Login, silakan ulang lagi.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../class/style.css">
    <title>Login</title>
</head>
<body>
        <?php
            if (isset($_SESSION['errorMsg'])) {
                echo $_SESSION['errorMsg'];
                unset($_SESSION['errorMsg']);
            }
        ?>
    <div class="login">
        <h2>Login</h2>
        <form method="post">
            <div class="input">
                <label>Username</label>
                <input type="text" name="user">
            </div>
            <div class="input">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>    
        <?php
            include_once '../template/footer.php';
        ?>
    </div>
</body>
</html>
