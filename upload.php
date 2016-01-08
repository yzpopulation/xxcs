<?php
include 'config.php';
include 'conn.php';

$sql = "select * from users where username= ? and passcode=?";

$pdo = new PDO($dsn, username, password);
$pdo -> query('set names utf8;');
$cmd=$pdo->prepare($sql);

$cmd->bindValue(1,$_POST['username']);
$cmd->bindValue(2,$_POST['password']);
//$statement = $db->prepare('SELECT * FROM foods WHERE `name`=? AND `healthy`=?');
//$statement2 = $db->prepare('SELECT * FROM foods WHERE `name`=:name AND `healthy`=:healthy)';
//$statement->execute(array(1 => 'Cake', 2 => true));
//$statement2->execute(array(':name' => 'Pie', ':healthy' => false));
//$statement->bindValue(1, 'Cake');
//$statement->bindValue(2, true);
//$statement2->bindValue(':name', 'Pie');
//$statement2->bindValue(':healthy', false);
$cmd->execute();
$result=$cmd->fetch(pdo::FETCH_NUM);
print_r($result);
