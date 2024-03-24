<?php
    $server = "localhost";
    $user_name = "root";
    $password ="";
    $db_name = "PROJECTWEB_DB";

    $conn = mysqli_connect($server, $user_name, $password, $db_name);

    if($conn){
    }else{
        echo "Connect Faild";
    }
?>