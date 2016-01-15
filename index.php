<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
include('jm.php');
//$_SESSION["username"]='admin';
//$_SESSION["password"]='admin123';
//$_SESSION['code'] =mc::encrypt(session_id(), $_SESSION["username"],$_SESSION["password"]);
if(mc::checker()){
    header("Location:a.php");
}
?>

</body>
</html>
