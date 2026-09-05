<?php
    $db_host = "localhost";
    $db_user = "project_a";
    $db_password = "24112013";
    $db_database = "project_a";

    $db_connect = new mysqli($db_host,$db_user,$db_password,$db_database);

    if($db_connect->connect_error){
        die("can't connect to database".$db_connect->connect_error);
    }else{
        echo "Database Connected";
    }

?>