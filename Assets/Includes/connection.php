<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'legacy_db';
$con = mysqli_connect($host, $user, $password, $db) or die("Unable to connect");

session_start();
?>