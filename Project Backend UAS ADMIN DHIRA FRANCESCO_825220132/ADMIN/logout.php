<?php
session_start();

if (isset($_SESSION['stLogin']) && $_SESSION['stLogin']) {
    session_unset();
    session_destroy();
    header("location:login.php");
}
?>