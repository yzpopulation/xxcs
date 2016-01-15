<?php
include 'header.php';

try	{
$pdo=new PDO(dsn,username,password,array(pdo::FETCH_NUM));
$pdo->query('set names utf8;');
}
catch (Exception $e) {
die( "Failed:".$e->getMessage());
}
?>