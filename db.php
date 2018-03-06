<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'library';
$mysqli = new mysqli($host, $user, $pass, $dbname) or die($mysqli->error);
?>