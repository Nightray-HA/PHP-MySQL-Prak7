<?php
    session_start();
    //mengakhiri session
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: index.php");
?>