<?php
include 'header.php';
include 'config.php';
$dsn="mysql:host=".host.";dbname=".dbname;
try	{
$pdo=new PDO($dsn,username,password);
$pdo->query('set names utf8;');
}
catch (Exception $e) {
die( "Failed:".$e->getMessage());
}
?>