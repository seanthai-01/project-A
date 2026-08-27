<?php 
    $db_host = "localhost";
    $db_username = "project_a";
    $db_password = "24112013";
    $db_project = "project_a";

    $db_connect = new mysqli($db_host,$db_username,$db_password,$db_project);

    if($db_connect->connect_error){
        die("Can't connect to database!".$db_connect->connect_error);
    }
?>