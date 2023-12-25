<?php
    session_start();
    if (!isset($_SESSION['isLogin']))
        header('location: ../module/login.php');
?>