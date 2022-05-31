<?php
session_start();

 unset($_SESSION['cliente']);


echo '<script>';
echo 'window.location.href="index.php";';
echo '</script>';

?>