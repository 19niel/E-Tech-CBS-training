<?php
    $db_name = 'mysql:host=localhost;db_name=etech_db';
    $db_user = 'root';
    $db_password = '';

    $conn = new PDO($db_name, $db_user, $db_password);

    if ($conn){
        echo "connected";
    }

    function unique_id(){
        $chars = '0123456789abcdefghhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($chars);
        $randomString = '';
         for ($i=0; $i < 20 ; $i++){
            $randomString.=$chars[mt_rand(0, $charLength - 1)];
         }
         return $randomString;
    }

?>