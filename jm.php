<?php
include 'header.php';
class mc
{
    public static function encrypt($str, $key,$key2)
    {
       return base64_encode(hash_hmac("sha1", base64_encode(hash_hmac("sha1", $str, $key, true)), $key2, true));
    }

    public static function checker()
    {
        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
        $code = $_SESSION["code"];
        $a= mc::encrypt(session_id(), $_SESSION["username"],$_SESSION["password"]);
        if ($a == $code) {
            $sql = "select * from users where username= ? and password = ?";
            $pdo = new PDO(dsn, username, password);
            $db = $pdo->prepare($sql);
            $db->bindValue(1, $username);
            $db->bindValue(2, $password);
            $db->execute();
            if ($db->rowCount() == 1) {
                return 1;
            }
        }
        return 0;
    }
}