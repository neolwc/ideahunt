<?php
session_start();

$dbh = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

require 'header.php';
require 'loader.php';
require 'footer.php';
?>
